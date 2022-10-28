<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

    <li class="navigation-header"><span data-i18n="Navigations">Navigations</span><i data-feather="more-horizontal"></i>
    </li>
        <li class="@if(Route::current()->getName() == "dashboard") active @endif nav-item"><a class="d-flex align-items-center" href="{{url('/')}}"><i data-feather='home'></i><span class="menu-title text-truncate" data-i18n="Home">{{ __('app.dashboard') }}</span></a>
    </li>

    <li class="navigation-header"><span data-i18n="Navigations">Administration</span><i data-feather="more-horizontal"></i>
    </li>
    <li class="nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="users"></i><span class="menu-title text-truncate" data-i18n="Invoice">Ges. Comptes</span></a>
        <ul class="menu-content">
            <li class="@if(Route::current()->getName() == 'account.index') active @endif "><a class="d-flex align-items-center" href="{{route('account.index')}}"><i data-feather="list"></i><span class="menu-item text-truncate" data-i18n="List">Liste des compte</span></a>
            </li>
            <li class="@if(Route::current()->getName() == 'account.create' || Route::current()->getName() == 'account.edit') active @endif "><a class="d-flex align-items-center" href="{{route('account.create')}}"><i data-feather="plus-circle"></i><span class="menu-item text-truncate" data-i18n="List">Ajouter un compte</span></a>
            </li>

        </ul>
    </li>
</ul>
