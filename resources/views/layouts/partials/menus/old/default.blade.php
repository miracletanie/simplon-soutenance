<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

    <li class="navigation-header"><span data-i18n="Navigations">Navigations</span><i data-feather="more-horizontal"></i>
    </li>
    <li class="@if (Route::current()->getName() == 'dashboard') active @endif nav-item"><a
            class="d-flex align-items-center" href="{{ url('/') }}"><i data-feather='home'></i><span
                class="menu-title text-truncate" data-i18n="Home">{{ __('app.dashboard') }}</span></a>
    </li>

    <li class="navigation-header"><span data-i18n="Navigations">Menu général</span><i
            data-feather="more-horizontal"></i>
    </li>

    @if (Auth::user()->role_id == 3 || Auth::user()->role_id == 1 || Auth::user()->role_id == 2)

    <li class="@if (Route::current()->getName() == 'folder.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('folder.index') }}">
            <i data-feather='users'></i>
            <span class="menu-title text-truncate" data-i18n="Home">Mes candidats</span>
        </a>
    </li>
    <li class="@if (Route::current()->getName() == 'folder.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('folder.index') }}">
            <i data-feather='folder'></i>
            <span class="menu-title text-truncate" data-i18n="Home">Clients</span>
        </a>
    </li>

    <li class="@if (Route::current()->getName() == 'folder.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('folder.index') }}">
            <i data-feather='users'></i>
            <span class="menu-title text-truncate" data-i18n="Home">Mes candidats</span>
        </a>
    </li>

    @endif

    <li class="@if (Route::current()->getName() == 'service.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('folder.index') }}">
            <i data-feather='folder'></i>
            <span class="menu-title text-truncate" data-i18n="Home">Sous volets</span>
        </a>
    </li>

    <li class="@if (Route::current()->getName() == 'calendar.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('folder.index') }}">
            <i data-feather='calendar'></i>
            <span class="menu-title text-truncate" data-i18n="Home">Mon agenda</span>
        </a>
    </li>

    <li class="@if (Route::current()->getName() == 'calendar.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('folder.index') }}">
            <i data-feather='calendar'></i>
            <span class="menu-title text-truncate" data-i18n="Home">Evénements</span>
        </a>
    </li>

    <li class="@if (Route::current()->getName() == 'calendar.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('folder.index') }}">
            <i data-feather='calendar'></i>
            <span class="menu-title text-truncate" data-i18n="Home">Mentorat</span>
        </a>
    </li>

    <li class="navigation-header">
        <span data-i18n="Navigations">Paramètrages</span>
        <i data-feather="more-horizontal"></i>
    </li>

    <li class="@if (Route::current()->getName() == 'calendar.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('folder.index') }}">
            <i data-feather='calendar'></i>
            <span class="menu-title text-truncate" data-i18n="Home">Rapport d'activités</span>
        </a>
    </li>

    <li class="@if (Route::current()->getName() == 'calendar.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('folder.index') }}">
            <i data-feather='calendar'></i>
            <span class="menu-title text-truncate" data-i18n="Home">Gest. des données</span>
        </a>
    </li>

    <li class="@if (Route::current()->getName() == 'calendar.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('folder.index') }}">
            <i data-feather='calendar'></i>
            <span class="menu-title text-truncate" data-i18n="Home">Reddition compte</span>
        </a>
    </li>

    <li class="navigation-header"><span data-i18n="Navigations">Administration</span><i
            data-feather="more-horizontal"></i></li>

    <li class="@if (Route::current()->getName() == 'account.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('account.index') }}">
            <i data-feather='users'></i>
            <span class="menu-title text-truncate" data-i18n="Home">Gest. Utilisateurs</span>
        </a>
    </li>

    <li class="@if (Route::current()->getName() == 'params') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('params.index') }}"><i data-feather='params'></i><span
            class="menu-title text-truncate" data-i18n="params">Paramères système</span></a>
    </li>

    <li class="nav-item">
        <a class="d-flex align-items-center" href="#">
            <i data-feather="users"></i>
            <span class="menu-title text-truncate" data-i18n="Invoice">Fichiers</span>
        </a>
        <ul class="menu-content">
            <li class="@if (Route::current()->getName() == 'account.add_file') active @endif ">
                <a class="d-flex align-items-center" href="{{ route('account.add_file') }}">
                    <i data-feather="list"></i>
                    <span class="menu-item text-truncate" data-i18n="List">Ajouter fichier Excel</span>
                </a>
            </li>
        </ul>
    </li>
</ul>
