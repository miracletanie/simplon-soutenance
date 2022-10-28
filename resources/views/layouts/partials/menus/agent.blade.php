<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

    <li class="navigation-header"><span data-i18n="Navigations">Navigation</span><i data-feather="more-horizontal"></i>
    </li>
    <li class="@if (Route::current()->getName() == 'dashboard') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ route('dashboard') }}">
            <i data-feather='home'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
                Tableau de bord
            </span>
        </a>
    </li>

    <li class="navigation-header">
        <span data-i18n="Navigations">Menu general</span>
        <i data-feather="more-horizontal"></i>
    </li>


    <li class="nav-item">
        <a class="d-flex align-items-center" href="#">
            <i data-feather="users"></i>
            <span class="menu-title text-truncate" data-i18n="Invoice">Biens Immobiliers</span>
        </a>
        <ul class="menu-content">
            <li class="@if (Route::current()->getName() == 'type-bien.create' || Route::current()->getName() == 'type-bien.index' ) active @endif ">
                <a class="d-flex align-items-center" href="{{route('type-bien.index')}}">
                    <i data-feather="list"></i>
                    <span class="menu-item text-truncate" data-i18n="List">Type de bien</span>
                </a>
            </li>
            <li class="@if (Route::current()->getName() == 'bien.create' || Route::current()->getName() == 'bien.index'  || Route::current()->getName() == 'bien.show'   || Route::current()->getName() == 'bien.visite' ) active @endif ">
                <a class="d-flex align-items-center" href="{{route('bien.index')}}">
                    <i data-feather="list"></i>
                    <span class="menu-item text-truncate" data-i18n="List">Liste des biens</span>
                </a>
            </li>

        </ul>
    </li>

    <li class="nav-item">
        <a class="d-flex align-items-center" href="#">
            <i data-feather="users"></i>
            <span class="menu-title text-truncate" data-i18n="Invoice">Blog</span>
        </a>
        <ul class="menu-content">
            <li class="@if (Route::current()->getName() == 'type-article.create' || Route::current()->getName() == 'type-artcle.index' ) active @endif ">
                <a class="d-flex align-items-center" href="{{route('type-article.index')}}">
                    <i data-feather="list"></i>
                    <span class="menu-item text-truncate" data-i18n="List">Type d'article</span>
                </a>
            </li>
            <li class="@if (Route::current()->getName() == 'article.create' || Route::current()->getName() == 'article.index'  || Route::current()->getName() == 'article.show' ) active @endif ">
                <a class="d-flex align-items-center" href="{{route('article.index')}}">
                    <i data-feather="list"></i>
                    <span class="menu-item text-truncate" data-i18n="List">Liste des articles</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="@if (Route::current()->getName() == 'visite.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{route('visite.index')}}">
            <i data-feather='trello'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
            Demandes de visite
            </span>
        </a>
    </li>

    <li class="@if (Route::current()->getName() == 'message.index') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{route('message.index')}}">
            <i data-feather='trello'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
            Messages
            </span>
        </a>
    </li>


{{--
    <li class="navigation-header">
        <span data-i18n="Navigations">Menu Administration</span>
        <i data-feather="more-horizontal"></i>
    </li>
    <li class="@if (Route::current()->getName() == 'activities.calendar') active @endif nav-item">
        <a class="d-flex align-items-center" href="#">
            <i data-feather='trello'></i>
            <span class="menu-title text-truncate" data-i18n="Home">
                Gestion des utilisateurs
            </span>
        </a>
    </li> --}}

</ul>
