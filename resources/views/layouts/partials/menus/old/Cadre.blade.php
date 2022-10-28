<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

    <li class="navigation-header">
        <span data-i18n="Navigations">Navigations</span>
        <i data-feather="more-horizontal"></i>
    </li>

    <li class="@if (Route::current()->getName() == 'dashboard') active @endif nav-item">
        <a class="d-flex align-items-center" href="{{ url('/dashboard') }}">
            <i data-feather='home'></i>
            <span class="menu-title text-truncate" data-i18n="Home">Tableau de bord</span>
        </a>
    </li>

    <li class="navigation-header">
        <span data-i18n="Navigations">Menu général</span>
        <i data-feather="more-horizontal"></i>
    </li>

    <li class="@if (Route::current()->getName() == 'cadre.import_cerige_date' || Route::current()->getName() == 'cadre.detail_ceriges_data' || Route::current()->getName() == 'cadre.list_cerige_date') active @endif ">
        <a class="d-flex align-items-center" href="{{ route('cadre.import_cerige_date') }}">
            <i data-feather='database'></i>
            <span class="menu-item text-truncate" data-i18n="List">Données Ceri-GES</span>
        </a>
    </li>

    <li class="@if (Route::current()->getName() == 'cadre.index') active @endif ">
        <a class="d-flex align-items-center" href="{{ route('cadre.index') }}">
            <i data-feather='layers'></i>
            <span class="menu-item text-truncate" data-i18n="List">Exportation données</span>
        </a>
    </li>

    <li class="@if (Route::current()->getName() == 'client.index') active @endif ">
        <a class="d-flex align-items-center" href="{{ route('client.index') }}">
            <i data-feather='layers'></i>
            <span class="menu-item text-truncate" data-i18n="List">Clients</span>
        </a>
    </li>

    <li class="@if (Route::current()->getName() == 'cadre.rapports') active @endif ">
        <a class="d-flex align-items-center" href="{{ route('cadre.rapports') }}">
            <i data-feather='clipboard'></i>
            <span class="menu-item text-truncate" data-i18n="List">Rapports</span>
        </a>
    </li>

    <li class="@if (Route::current()->getName() == 'cadre.statistiques') active @endif "><a class="d-flex align-items-center" href="{{ route('cadre.statistiques') }}"><i data-feather='check-square'></i><span class="menu-item text-truncate" data-i18n="List">Statistiques</span></a>
    </li>

    <li class="@if (Route::current()->getName() == 'cadre.reddition') active @endif ">
        <a class="d-flex align-items-center" href="{{ route('cadre.reddition') }}">
            <i data-feather='file-plus'></i>
            <span class="menu-item text-truncate" data-i18n="List">Reddition comptes</span>
        </a>
    </li>

    <li class="@if (Route::current()->getName() == 'cadre.categorie_documents') active @endif ">
        <a class="d-flex align-items-center" href="{{ route('cadre.categorie_documents') }}">
            <i data-feather='folder-plus'></i>
            <span class="menu-item text-truncate" data-i18n="List">Catégorie document</span>
        </a>
    </li>

    <li class="@if (Route::current()->getName() == 'cadre.collaborateurs') active @endif ">
        <a class="d-flex align-items-center" href="{{ route('cadre.collaborateurs') }}">
            <i data-feather='folder-plus'></i>
            <span class="menu-item text-truncate" data-i18n="List">Collaborateurs</span>
        </a>
    </li>

    {{-- <li class="@if (Route::current()->getName() == 'external-activities.index') active @endif ">
        <a class="d-flex align-items-center" href="{{ route('external-activities.index') }}">
            <i data-feather='folder-plus'></i>
            <span class="menu-item text-truncate" data-i18n="List">Activités externes</span>
        </a>
    </li> --}}

    <li class="@if (Route::current()->getName() == 'activities.calendar') active @endif ">
        <a class="d-flex align-items-center" href="{{ route('activities.calendar') }}">
            <i data-feather='folder-plus'></i>
            <span class="menu-item text-truncate" data-i18n="List">Calendrier Activités externes</span>
        </a>
    </li>

    {{-- <li class="@if (Route::current()->getName() == 'cadre.ressources.interets') active @endif ">
        <a class="d-flex align-items-center" href="{{ route('cadre.ressources.interets') }}">
            <i data-feather='folder-plus'></i>
            <span class="menu-item text-truncate" data-i18n="List">Intérets aux ressources</span>
        </a>
    </li> --}}


    <li class="navigation-header">
        <span data-i18n="Navigations">Menu configuration</span>
        <i data-feather="more-horizontal"></i>
    </li>

    <li class="@if (Route::current()->getName() == 'program.index' || Route::current()->getName() == 'program.create') active @endif ">
        <a class="d-flex align-items-center" href="{{ route('program.index') }}">
            <i data-feather='list'></i>
            <span class="menu-item text-truncate" data-i18n="List">Programmes</span>
        </a>
    </li>

    <li class="@if (Route::current()->getName() == 'criteria.index' || Route::current()->getName() == 'criteria.create') active @endif ">
        <a class="d-flex align-items-center" href="{{ route('criteria.index') }}">
            <i data-feather='list'></i>
            <span class="menu-item text-truncate" data-i18n="List">Critères d'admissibilité</span>
        </a>
    </li>

    <li class="@if (Route::current()->getName() == 'service.index') active @endif ">
        <a class="d-flex align-items-center" href="{{ route('service.index') }}">
            <i data-feather='list'></i>
            <span class="menu-item text-truncate" data-i18n="List">Sous-volets</span>
        </a>
    </li>
    <li class="@if (Route::current()->getName() == 'activity.index') active @endif ">
        <a class="d-flex align-items-center" href="{{ route('activity.index') }}">
            <i data-feather='list'></i>
            <span class="menu-item text-truncate" data-i18n="List">Interventions</span>
        </a>
    </li>

    {{--<li class="@if (Route::current()->getName() == 'agreement.index') active @endif ">
        <a class="d-flex align-items-center" href="{{ route('agreement.index') }}">
            <i data-feather='list'></i>
            <span class="menu-item text-truncate" data-i18n="List">Entente</span>
        </a>
    </li> --}}
{{--
    <li class="@if (Route::current()->getName() == 'procedure.index') active @endif ">
        <a class="d-flex align-items-center" href="{{ route('procedure.index') }}">
            <i data-feather='list'></i>
            <span class="menu-item text-truncate" data-i18n="List">Démarche</span>
        </a>
    </li>

    <li class="@if (Route::current()->getName() == 'plan.index') active @endif ">
        <a class="d-flex align-items-center" href="{{ route('plan.index') }}">
            <i data-feather='list'></i>
            <span class="menu-item text-truncate" data-i18n="List">Plan</span>
        </a>
    </li> --}}
{{--
    <li class="@if (Route::current()->getName() == 'monitoring.index') active @endif ">
        <a class="d-flex align-items-center" href="{{ route('monitoring.index') }}">
            <i data-feather='list'></i>
            <span class="menu-item text-truncate" data-i18n="List">Suivi</span>
        </a>
    </li> --}}

    <li class="@if (Route::current()->getName() == 'resource.index') active @endif ">
        <a class="d-flex align-items-center" href="{{ route('resource.index') }}">
            <i data-feather='list'></i>
            <span class="menu-item text-truncate" data-i18n="List">Ressources</span>
        </a>
    </li>
    <li class="@if (Route::current()->getName() == 'needs.index') active @endif ">
        <a class="d-flex align-items-center" href="{{ route('needs.index') }}">
            <i data-feather='list'></i>
            <span class="menu-item text-truncate" data-i18n="List">Besoins</span>
        </a>
    </li>
    {{-- <li class="@if (Route::current()->getName() == 'activity-type.index') active @endif ">
        <a class="d-flex align-items-center" href="{{ route('activity-type.index') }}">
            <i data-feather='list'></i>
            <span class="menu-item text-truncate" data-i18n="List">Type activités </span>
        </a>
    </li> --}}

</ul>
