<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

    <li class="navigation-header"><span data-i18n="Navigations">{{ __('app.navigations') }}</span><i data-feather="more-horizontal"></i>
    </li>
    <li class="@if (Route::current()->getName() == 'dashboard') active @endif nav-item"><a class="d-flex align-items-center"
            href="{{ url('/dashboard') }}"><i data-feather='home'></i><span class="menu-title text-truncate"
                data-i18n="Home">{{ __('app.dashboard') }}</span></a>
    </li>
    {{--<li class="@if (Route::current()->getName() == 'partenaire.interventions') active @endif "><a class="d-flex align-items-center"
            href="{{ route('partenaire.interventions') }}"><i data-feather='layers'></i><span
                class="menu-item text-truncate" data-i18n="List">{{ __('app.interventions') }}</span></a>
    </li>--}}
    <li class="@if (Route::current()->getName() == 'partenaire.activites_externes') active @endif "><a class="d-flex align-items-center"
            href="{{ route('partenaire.activites_externes') }}"><i data-feather='activity'></i><span
                class="menu-item text-truncate" data-i18n="List">{{ __('app.offres_activites') }}</span></a>
    </li>
    <li class="@if (Route::current()->getName() == 'partenaire.offres_emploi') active @endif "><a class="d-flex align-items-center"
            href="{{ route('partenaire.offres_emploi') }}"><i data-feather='briefcase'></i><span
                class="menu-item text-truncate" data-i18n="List">{{ __('app.offres_demploi') }}</span></a>
    </li>
    <!-- <li class="@if (Route::current()->getName() == 'partenaire.offres_benevolat') active @endif "><a class="d-flex align-items-center"
            href="{{ route('partenaire.offres_benevolat') }}"><i data-feather='heart'></i><span
                class="menu-item text-truncate" data-i18n="List">Offres bénévolat</span></a>
    </li> -->
    <li class="@if (Route::current()->getName() == 'partenaire.offres_mentorat') active @endif "><a class="d-flex align-items-center"
            href="{{ route('partenaire.offres_mentorat') }}"><i data-feather='user-plus'></i><span
                class="menu-item text-truncate" data-i18n="List">{{ __('app.offres_mentorat') }}</span></a>
    </li>
    <li class="@if (Route::current()->getName() == 'partenaire.offres_benevolat') active @endif "><a class="d-flex align-items-center"
            href="{{ route('partenaire.offres_benevolat') }}"><i data-feather='heart'></i><span
                class="menu-item text-truncate" data-i18n="List">{{ __('app.offres_bénévolat') }}</span></a>
    </li>
    <!-- <li class="@if (Route::current()->getName() == 'partenaire.activites_externes') active @endif "><a class="d-flex align-items-center"
            href="{{ route('partenaire.activites_externes') }}"><i data-feather='activity'></i><span
                class="menu-item text-truncate" data-i18n="List">Offres activités</span></a>
    </li> -->
    <li class="@if (Route::current()->getName() == 'partenaire.candidatures') active @endif "><a class="d-flex align-items-center"
            href="{{ route('partenaire.candidatures') }}"><i data-feather='users'></i><span
                class="menu-item text-truncate" data-i18n="List">{{ __('app.candidatures') }}</span></a>
    </li>
    <li class="@if (Route::current()->getName() == 'partenaire.informations') active @endif "><a class="d-flex align-items-center"
            href="{{ route('partenaire.informations') }}"><i data-feather='info'></i><span
                class="menu-item text-truncate" data-i18n="List">{{ __('app.informations') }}</span></a>
    </li>
</ul>
