<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

    <li class="navigation-header">
        <span data-i18n="Navigations">
            Navigations
        </span>
        <i data-feather="more-horizontal"></i>
    </li>
    <li class="@if (Route::current()->getName() == 'dashboard') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ url('/') }}">
            <i data-feather='home'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
                Tableau de bord
            </span>
        </a>
    </li>

    <li class="navigation-header">
        <span data-i18n="Navigations">
            Menu général
        </span>
        <i data-feather="more-horizontal"></i>
    </li>
    {{-- <li class="@if (Route::current()->getName() == 'agent.visitor') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('agent.visitor') }}">
            <i data-feather='users'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
                Visiteurs
            </span>
        </a>
    </li> --}}

    {{-- <li class="@if (Route::current()->getName() == 'client.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('client.index') }}">
            <i data-feather='users'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
                Clients
            </span>
        </a>
    </li> --}}
    <li class="@if (Route::current()->getName() == 'client.index' ||
                    Route::current()->getName() == 'client.accepted' ||
                    Route::current()->getName() == 'client.no-accepted' ||
                    Route::current()->getName() == 'client.futurs-immigrants' ||
                    Route::current()->getName() == 'client.futurs-immigrants' ||
                    Route::current()->getName() == 'client.new' ||
                    Route::current()->getName() == 'client.show' ||
                    Route::current()->getName() == 'client.create' ||
                    Route::current()->getName() == 'client.edit' ||
                    Route::current()->getName() == 'client.showFileManager' ||
                    Route::current()->getName() == 'client.followUp' ||
                    Route::current()->getName() == 'client.followUpUpdate' ||
                    Route::current()->getName() == 'client.followUpReject' ||
                    Route::current()->getName() == 'client.needs' ||
                    Route::current()->getName() == 'client.meeting_list' ||
                    Route::current()->getName() == 'client.meeting_create' ||
                    Route::current()->getName() == 'client.meeting_edit' ||
                    Route::current()->getName() == 'folder.create' ||
                    Route::current()->getName() == 'client.needs.reorder' ||
                    Route::current()->getName() == 'client.needs.create' ||
                    Route::current()->getName() == 'client.download.document' ||
                    Route::current()->getName() == 'client.accepted'
                    ) active @endif">
        <a class="d-flex align-items-center" href="#">
            <i data-feather="users"></i>
            <span class="menu-title text-truncate" data-i18n="Invoice">Dossiers immigrants</span>
        </a>
        <ul class="menu-content">
            <li class="@if (Route::current()->getName() == 'client.index') active @endif ">
                <a class="d-flex align-items-center" href="{{ route('client.index') }}">
                    <i data-feather="list"></i>
                    <span class="menu-item text-truncate" data-i18n="List">Tous les dossiers</span>
                </a>
            </li>
            <li class="@if (Route::current()->getName() == 'client.accepted') active @endif ">
                <a class="d-flex align-items-center" href="{{ route('client.accepted') }}">
                    <i data-feather="list"></i>
                    <span class="menu-item text-truncate" data-i18n="List">Dossiers validés</span>
                </a>
            </li>
            <li class="@if (Route::current()->getName() == 'client.no-accepted') active @endif ">
                <a class="d-flex align-items-center" href="{{ route('client.no-accepted') }}">
                    <i data-feather="list"></i>
                    <span class="menu-item text-truncate" data-i18n="List">Besoin de suivi</span>
                </a>
            </li>
            <li class="@if (Route::current()->getName() == 'client.futurs-immigrants') active @endif ">
                <a class="d-flex align-items-center" href="{{ route('client.futurs-immigrants') }}">
                    <i data-feather="list"></i>
                    <span class="menu-item text-truncate" data-i18n="List">Futurs immigrants</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="@if (Route::current()->getName() == 'service.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('service.index') }}">
            <i data-feather='layers'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
                Services
            </span>
        </a>
    </li>
    <li class="@if (Route::current()->getName() == 'activities.calendar') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('activities.calendar') }}">
            <i data-feather='trello'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
                Activités Alpa
            </span>
        </a>
    </li>
    <li class="@if (Route::current()->getName() == 'agenda.program') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('agenda.program') }}">
            <i data-feather='calendar'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
                Mon agenda
            </span>
        </a>
    </li>

    <li class="@if (Route::current()->getName() == 'agent.rapports') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('agent.rapports') }}">
            <i data-feather='book'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
                Rapports
            </span>
        </a>
    </li>

    <li class="@if (Route::current()->getName() == 'resource.index') active @endif ">
        <a class="d-flex align-items-center" href="{{ route('resource.index') }}">
            <i data-feather='list'></i>
            <span class="menu-item text-truncate" data-i18n="List">Ressources</span>
        </a>
        <ul class="menu-content">
            <li class="@if (Route::current()->getName() == 'resource.index') active @endif ">
                <a class="d-flex align-items-center" href="{{ route('resource.index') }}">
                    <i data-feather='list'></i>
                    <span class="menu-item text-truncate" data-i18n="List">Mes ressources</span>
                </a>
            </li>
            <li class="@if (Route::current()->getName() == 'agent.events') active @endif nav-item">
                <a class="d-flex align-items-center" href="{{ route('agent.events') }}">
                    <i data-feather='trello'></i>
                    <span class="menu-title text-truncate" data-i18n="Home">
                        Activités externes
                    </span>
                </a>
            </li>
            <li class="@if (Route::current()->getName() == 'agent.offres') active @endif nav-item">
                <a class="d-flex align-items-center" href="{{ route('agent.offres') }}">
                    <i data-feather='clipboard'></i>
                    <span class="menu-title text-truncate" data-i18n="Home">
                        Offres d'emploi
                    </span>
                </a>
            </li>
            <li class="@if (Route::current()->getName() == 'agent.mentors') active @endif nav-item">
                <a class="d-flex align-items-center" href="{{ route('agent.mentors') }}">
                    <i data-feather='user'></i>
                    <span class="menu-title text-truncate" data-i18n="Home">
                        Mentorat
                    </span>
                </a>
            </li>
            <li class="@if (Route::current()->getName() == 'agent.benevoles') active @endif nav-item">
                <a class="d-flex align-items-center" href="{{ route('agent.benevoles') }}">
                    <i data-feather='user'></i>
                    <span class="menu-title text-truncate" data-i18n="Home">
                        Bénévolat
                    </span>
                </a>
            </li>
        </ul>
    </li>
    <li class="@if (Route::current()->getName() == 'agent.notifications') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('agent.notifications') }}">
            <i data-feather='bell'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
                Notifications
            </span>
        </a>
    </li>
</ul>
