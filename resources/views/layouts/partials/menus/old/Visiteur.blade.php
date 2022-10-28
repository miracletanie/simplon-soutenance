<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

    <li class="navigation-header"><span data-i18n="Navigations">{{ __('app.navigations') }}</span><i data-feather="more-horizontal"></i>
    </li>
    <li class="@if (Route::current()->getName() == 'dashboard') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ url('/') }}">
            <i data-feather='home'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
                {{ __('app.dashboard') }}
            </span>
        </a>
    </li>

    <li class="navigation-header">
        <span data-i18n="Navigations">{{ __('app.menu_general') }}</span>
        <i data-feather="more-horizontal"></i>
    </li>

    <li class="@if (Route::current()->getName() == 'client.show' || Route::current()->getName() == 'client.followUp' || Route::current()->getName() == 'client.showFileManager' || Route::current()->getName() == 'client.needs' || Route::current()->getName() == 'client.meeting_list' ) active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('client.mafiche') }}">
            <i data-feather='file-text'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
                {{ __('app.ma_fiche') }}
            </span>
        </a>
    </li>
    <li class="@if (Route::current()->getName() == 'activities.calendar') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('activities.calendar') }}">
            <i data-feather='trello'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
            {{ __('app.activities') }}
            </span>
        </a>
    </li>
    <li class="@if (Route::current()->getName() == 'resource.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('resource.index') }}">
            <i data-feather='trello'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
            {{ __('app.ressources') }}
            </span>
        </a>
    </li>
</ul>
