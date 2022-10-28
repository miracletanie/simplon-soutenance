<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

    <li class="navigation-header"><span data-i18n="Navigations">Navigations</span><i data-feather="more-horizontal"></i>
    </li>
    {{-- <li class="@if (Route::current()->getName() == 'dashboard') active @endif nav-item"><a
            class="d-flex align-items-center" href="{{ url('/dashboard') }}"><i data-feather='home'></i><span
        class="menu-title text-truncate" data-i18n="Home">Tableau de
        bord</span></a>
    </li>
    <li class="@if (Route::current()->getName() == 'account.index') active @endif "><a class="d-flex align-items-center"
            href="{{ route('account.index') }}"><i data-feather='users'></i><span class="menu-item text-truncate"
                data-i18n="List">Profils</span></a>
    </li>
    <li class="@if (Route::current()->getName() == 'account.categorie_documents') active @endif "><a
            class="d-flex align-items-center" href="{{ route('account.categorie_documents') }}"><i
                data-feather='folder-plus'></i><span class="menu-item text-truncate" data-i18n="List">Catégorie
                document</span></a>
    </li>
    <li class="@if (Route::current()->getName() == 'params.index') active @endif "><a class="d-flex align-items-center"
            href="{{ route('params.index') }}"><i data-feather='folder-plus'></i><span class="menu-item text-truncate"
                data-i18n="List">Paramètres</span></a>
    </li> --}}
    {{-- <li class="@if (Route::current()->getName() == 'account.create' || Route::current()->getName() == 'account.edit') active @endif "><a class="d-flex align-items-center" href="#"><i
                data-feather='folder-plus'></i></i><span class="menu-item text-truncate"
                data-i18n="List">Documents</span></a>
    </li> --}}
    <li class="@if (Route::current()->getName() == 'dashboard') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ url('/') }}">
            <i data-feather='home'></i>
            <span class="menu-title text-truncate" data-i18n="Home">

                {{ __('Tableau de bord') }}
            </span>
        </a>
    </li>

    <li class="navigation-header"><span data-i18n="Navigations">Menu général</span><i
            data-feather="more-horizontal"></i>
    </li>

    <li class="@if (Route::current()->getName() == 'client.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('client.index') }}">
            <i data-feather='users'></i>
            <span class="menu-title text-truncate" data-i18n="Home">Clients/Immigrants</span>
        </a>
    </li>
    <li class="navigation-header"><span data-i18n="Navigations">Gestion</span><i data-feather="more-horizontal"></i>
    </li>
    <li class="@if (Route::current()->getName() == 'account.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('account.index') }}">
            <i data-feather='users'></i>
            <span class="menu-title text-truncate" data-i18n="Home">Utilisateurs</span>
        </a>
    </li>
    {{-- <li class="@if (Route::current()->getName() == 'activity-type.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('activity-type.index') }}">
            <i data-feather='users'></i>
            <span class="menu-title text-truncate" data-i18n="Home">Type ressources</span>
        </a>
    </li> --}}
    <li class="@if (Route::current()->getName() == 'role.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('role.index') }}">
            <i data-feather='users'></i>
            <span class="menu-title text-truncate" data-i18n="Home">Rôles</span>
        </a>
    </li>
    {{-- <li class="@if (Route::current()->getName() == 'permission.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('permission.index') }}">
            <i data-feather='users'></i>
            <span class="menu-title text-truncate" data-i18n="Home">Permissions</span>
        </a>
    </li> --}}
    <li class="@if (Route::current()->uri() == '/translations') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ url('translations') }}">
            <i data-feather='users'></i>
            <span class="menu-title text-truncate" data-i18n="Home">Traductions</span>
        </a>
    </li>

    {{-- <li class="navigation-header"><span data-i18n="Navigations">configurations</span><i
            data-feather="more-horizontal"></i>
    </li>

    <li class="@if (Route::current()->uri() == 'department.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('department.index') }}">
            <i data-feather='airplay'></i>
            <span class="menu-title text-truncate" data-i18n="Home">Departements</span>
        </a>
    </li> 

    <li class="@if (Route::current()->uri() == 'requirement.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('requirement.index') }}">
            <i data-feather='airplay'></i>
            <span class="menu-title text-truncate" data-i18n="Home">Besoins</span>
        </a>
    </li> --}}

</ul>
