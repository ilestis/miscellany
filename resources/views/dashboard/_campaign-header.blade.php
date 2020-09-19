<?php /** @var \App\Models\Campaign $campaign */?>
<div class="campaign-header @if(!empty($campaign->header_image))campaign-imaged-header" style="background-image: url({{ Img::crop(1200, 400)->url($campaign->header_image) }}) @endif">
    <div class="campaign-header-content">

    <div class="campaign-content">
        <a href="{{ route('campaigns.show', $campaign) }}" title="{!! $campaign->name !!}">
            <h1 class="campaign-title">{!! $campaign->name !!}</h1>
        </a>
    @if ($campaign->hasPreview())
        <div class="preview">
            {!! $campaign->preview() !!}
        </div>
    @else
        <div class="preview help-block">
            {!! __('dashboard.helpers.customise') !!}
        </div>
    @endif
        @can('update', $campaign)
            <div class="action-bar">
                <a href="{{ route('campaigns.edit', $campaign) }}" class="btn btn-primary">{{ __('crud.edit') }}</a>

                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false">
                    <i class="fas fa-ellipsis-h"></i>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('campaign_users.index') }}" class="campaign-link" title="{{ __('dashboard.campaigns.tabs.users', ['count' => \App\Facades\CampaignCache::members()->count()]) }}">
                            <i class="fa fa-user"></i> {{ __('campaigns.show.tabs.members') }} ({{ \App\Facades\CampaignCache::members()->count() }})
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('campaign_roles.index') }}" class="campaign-link" title="{{  __('dashboard.campaigns.tabs.roles', ['count' => \App\Facades\CampaignCache::roles()->count()]) }}">
                            <i class="fa fa-lock"></i> {{ __('campaigns.show.tabs.roles') }} ({{ \App\Facades\CampaignCache::roles()->count() }})
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('campaign_settings') }}" class="campaign-link" title="{{ __('dashboard.campaigns.tabs.modules', ['count' => $campaign->setting->countEnabledModules()]) }}">
                            <i class="fa fa-cogs"></i> {{ __('campaigns.show.tabs.settings') }} <span class="pull-right">({{ $campaign->setting->countEnabledModules() }})</span>
                        </a>
                    </li>
                </ul>

            </div>
        @endcan

    </div>

    </div>
</div>
