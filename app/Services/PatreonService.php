<?php

namespace App\Services;

use App\User;
use Patreon\API;
use Patreon\OAuth;
use Exception;
use TCG\Voyager\Facades\Voyager;

/**
 * Class PatreonService
 * @package App\Services
 */
class PatreonService
{
    /**
     * @var User
     */
    protected $user;

    protected $patreonRoleName = 'patreon';

    /**
     * Set the user
     * @param null $user
     * @return $this
     */
    public function user($user = null)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @param $code
     * @throws Exception
     */
    public function link($code)
    {
        if (empty($code)) {
            throw new Exception('missing_code');
        }

        $clientId = env('PATREON_CLIENT_ID');
        $clientSecret = env('PATREON_CLIENT_SECRET');
        $redirectUri = url('/settings/patreon-callback');

        $oauth = new OAuth($clientId, $clientSecret);
        $tokens = $oauth->get_tokens($code, $redirectUri);

        if (empty($tokens['access_token'])) {
            throw new Exception('invalid_token');
        }

        $api = new API($tokens['access_token']);
        $patreon = $api->fetch_user();
        $patron = $patreon->get('data');

        if ($patron->has('relationships.pledges')) {
            // Some pledge object that doesn't provide exact details
            $pledge = $patron->relationship('pledges')->get(0)->resolve($patreon);

            // This value is useless, probably.
            $this->user->pledge = $pledge->get('id');

            $this->user->patreonEmail = $patron->attribute('email');
            $this->user->patreonFullname = $patron->attribute('full_name');
            $this->user->update(['settings']);

            // We're so far, good. Let's add the user to the Patreon group
            if ($pledge && !$this->user->hasRole($this->patreonRoleName)) {
                $this->user->roles()->attach($this->getRole()->id);
            }

            return true;
        }

        throw new Exception('no_pledge');
    }

    /**
     * @return mixed
     */
    protected function getRole()
    {
        return Voyager::model('Role')->where('name', '=', $this->patreonRoleName)->first();
    }

    /**
     * Remove a user from the patreon role
     * @return $this
     */
    public function unlink()
    {
        if ($this->user->hasRole($this->patreonRoleName)) {
            $this->user->roles()->detach($this->getRole()->id);

            $this->user->pledge = null;
            $this->user->update(['settings']);
        }
        return $this;
    }
}