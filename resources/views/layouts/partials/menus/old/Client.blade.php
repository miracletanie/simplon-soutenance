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
    {{--<li class="@if (Route::current()->getName() == 'category.list') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('category.list') }}">
            <i data-feather='layers'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
                {{ __('app.services') }}
            </span>
        </a>
    </li>--}}
    {{-- <li class="nav-item">
        <a class="d-flex align-items-center" href="#">
            <i data-feather="layers"></i>
            <span class="menu-title text-truncate" data-i18n="Invoice">Prestations</span>
        </a>
        <ul class="menu-content">
            <li class="@if (Route::current()->getName() == 'program.list') active @endif ">
                <a class="d-flex align-items-center" href="{{ route('program.list') }}">
                    <i data-feather="list"></i>
                    <span class="menu-item text-truncate" data-i18n="List">Prest. proposées</span>
                </a>
            </li>
            <li class="@if (Route::current()->getName() == 'client.services') active @endif ">
                <a class="d-flex align-items-center" href="{{ route('client.services') }}">
                    <i data-feather="list"></i>
                    <span class="menu-item text-truncate" data-i18n="List">Mes souscriptions</span>
                </a>
            </li>
        </ul>
    </li> --}}

    <li class="@if (Route::current()->getName() == 'client.meetings') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('client.meetings') }}">
            <i data-feather='calendar'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
                {{ __('app.rendez_vous') }}
            </span>
        </a>
    </li>
{{--
    <li class="@if (Route::current()->getName() == 'resource.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('resource.index') }}">
            <i data-feather='trello'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
                Ressources
            </span>
        </a>
    </li>
--}}
    <li class="@if (Route::current()->getName() == 'activities.calendar') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('activities.calendar') }}">
            <i data-feather='trello'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
            {{ __('app.activities') }}
            </span>
        </a>
    </li>
    <li class="@if (Route::current()->getName() == 'client.activities') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('client.activities') }}">
            <i data-feather='trello'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
                {{ __('app.evenements') }}
            </span>
        </a>
    </li>

    <li class="@if (Route::current()->getName() == 'client.offres') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('client.offres') }}">
            <i data-feather='clipboard'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
                {{ __('app.offres_demploi') }}
            </span>
        </a>
    </li>

    <li class="@if (Route::current()->getName() == 'client.mentors') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('client.mentors') }}">
            <i data-feather='clipboard'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
                {{ __('app.offres_mentorat') }}
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

    <li class="@if (Route::current()->getName() == 'client.notifications') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('client.notifications') }}">
            <i data-feather='bell'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
                {{ __('app.notifications') }}
            </span>
        </a>
    </li>
</ul>
