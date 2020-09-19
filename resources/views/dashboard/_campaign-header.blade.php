<?php /** @var \App\Models\Campaign $campaign */?>
<div class="campaign-header @if(!empty($campaign->header_image))campaign-imaged-header" style="background-image: url({{ Img::crop(1200, 400)->url($campaign->header_image) }}) @endif">
    <div class="campaign-header-content">

    <div class="campaign-content">
        <div class="campaign-head">
            <a href="{{ route('campaigns.show', $campaign) }}" title="{!! $campaign->name !!}" class="campaign-link">
                <h1 class="campaign-title">{!! $campaign->name !!}</h1>
            </a>
        @can('update', $campaign)
            <div class="action-bar">
                <a href="{{ route('campaigns.edit', $campaign) }}" class="btn btn-primary margin-r-5">
                    <span class="hidden-xs">{{ __('campaigns.show.actions.edit') }}</span>
                    <span class="visible-xs">{{ __('crud.edit') }}</span>
                </a>

                <div class="btn-group pull-right">
                    <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false">
                        <i class="fas fa-ellipsis-h"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('campaign_users.index') }}"  title="{{ __('dashboard.campaigns.tabs.users', ['count' => \App\Facades\CampaignCache::members()->count()]) }}">
                                <i class="fa fa-user"></i> {{ __('campaigns.show.tabs.members') }} ({{ \App\Facades\CampaignCache::members()->count() }})
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('campaign_roles.index') }}" title="{{  __('dashboard.campaigns.tabs.roles', ['count' => \App\Facades\CampaignCache::roles()->count()]) }}">
                                <i class="fa fa-th-large"></i> {{ __('campaigns.show.tabs.roles') }} ({{ \App\Facades\CampaignCache::roles()->count() }})
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('campaign_settings') }}" title="{{ __('dashboard.campaigns.tabs.modules', ['count' => $campaign->setting->countEnabledModules()]) }}">
                                <i class="fa fa-cog"></i> {{ __('campaigns.show.tabs.settings') }} ({{ $campaign->setting->countEnabledModules() }})
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard.setup') }}" title="{{ trans('dashboard.settings.title') }}">
                                <i class="fa fa-cog"></i> {{ trans('dashboard.settings.title') }}
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <br class="clear" />
        @endcan
        @can ('follow', $campaign)
            <div class="action-bar pull-right">
                <button id="campaign-follow" class="btn btn-default btn-xl" data-id="{{ $campaign->id }}"
                        style="display: none"
                        data-following="{{ $campaign->isFollowing() ? true : false }}"
                        data-follow="{{ __('dashboard.actions.follow') }}"
                        data-unfollow="{{ __('dashboard.actions.unfollow') }}"
                        data-url="{{ route('campaign.follow') }}"
                        data-toggle="tooltip" title="{{ __('dashboard.helpers.follow') }}"
                        data-placement="bottom"
                >
                    <i class="fa fa-star"></i> <span id="campaign-follow-text"></span>
                </button>
            </div>
        @endcan
        </div>

    @if ($campaign->hasPreview())
        <div class="preview">
            {!! $campaign->preview() !!}
        </div>
    @else
        <div class="preview help-block">
            {!! __('dashboard.helpers.customise') !!}
        </div>
    @endif

    </div>

    </div>
</div>
