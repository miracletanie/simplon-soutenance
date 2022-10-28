@extends('admin.layouts.main')

@section('css')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/forms/wizard/bs-stepper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/forms/select/select2.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/plugins/forms/form-wizard.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/pages/modal-create-app.min.css') }}">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{ asset('admin/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('admn/app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('admin/app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('admin/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/extensions/sweetalert2.min.css') }}">

    <!-- BEGIN: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{ asset('admin/app-assets/css/plugins/extensions/ext-component-sweet-alerts.min.css') }}">
    <!-- END: Page CSS-->

    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/pages/page-profile.min.css')}}">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/extensions/jstree.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/plugins/extensions/ext-component-tree.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/pages/app-file-manager.min.css')}}">
    <!-- END: Page CSS-->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        .nav-pills .nav-link {
            margin: .5rem;
        }
        .nav-pills .nav-link.active:hover {
            background-color: #7367F0;
            color: #fff;
        }
        .nav-pills .nav-link:hover {
            background-color: #7367F085;
            color: #fff;
        }
    </style>
@endsection

@section('js')
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('admin/app-assets/vendors/js/forms/wizard/bs-stepper.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/forms/cleave/cleave.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js') }}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('admin/app-assets/js/scripts/pages/modal-add-new-cc.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/js/scripts/pages/page-pricing.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/js/scripts/pages/modal-add-new-address.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/js/scripts/pages/modal-create-app.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/js/scripts/pages/modal-two-factor-auth.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/js/scripts/pages/modal-edit-user.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/js/scripts/pages/modal-share-project.min.js') }}"></script>

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('admin/app-assets/js/scripts/tables/table-datatables-basic.min.js') }}"></script>
    <!-- END: Page JS-->
    <script src="{{ asset('admin/app-assets/js/scripts/components/components-navs.min.js') }}"></script>

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('admin/app-assets/vendors/js/extensions/moment.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/vendors/js/extensions/polyfill.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('admin/app-assets/js/scripts/pages/app-user-view-account.min.js') }}"></script>
    <script src="{{ asset('admin/app-assets/js/scripts/pages/app-user-view.min.js') }}"></script>
    <!-- END: Page JS-->

    <script src="{{asset('admin/app-assets/js/scripts/pages/page-profile.min.js')}}"></script>



    <script src="{{asset('admin/app-assets/vendors/js/extensions/jstree.min.js')}}"></script>

    <script src="{{asset('admin/app-assets/js/scripts/pages/app-file-manager.min.js')}}"></script>

@endsection

@section('breacrumd')
    <h2 class="content-header-title float-start mb-0">Tableau de bord</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Tableau de bord</a>
            </li>

            <li class="breadcrumb-item active">Bien : #{{ $bien->reference ?? '' }} </li>
        </ol>
    </div>
@endsection

@section('content')
    <div id="user-profile">
        <!-- profile header -->
        <div class="row">
            <div class="col-12">
                <div class="card profile-header mb-2">
                    <!-- profile cover photo -->
                    <div></div>
                    {{-- <img class="card-img-top" src="{{asset('app-assets/images/profile/user-uploads/timeldine.jpg')}}"
                        alt="User Profile Image" height="100" style="background-color: gray" /> --}}
                    <img class="card-img-top" height="120" style="background-color: #283046" />
                    <!--/ profile cover photo -->

                    <div class="position-relative">
                        <!-- profile picture -->
                        <div class="profile-img-container d-flex align-items-center">
                            <div class="profile-img">
                                <img src="{{asset('site/img/property-1.jpg')}}" class="rounded img-fluid" alt="Card image" />
                            </div>
                            <!-- profile title -->
                            <div class="profile-title ms-3">
                                <h2 class="text-white">{{$bien->name. "-". $bien->location}}</h2>
                                <p class="text-white">Type de bien: {{$bien->type->name ?? ""}}</p>
                            </div>
                        </div>
                    </div>

                    <!-- tabs pill -->
                    <div class="profile-header-nav">
                        <!-- navbar -->
                        <nav
                            class="navbar navbar-expand-md navbar-light justify-content-end justify-content-md-between w-100">
                            <button class="btn btn-icon navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <i data-feather="align-justify" class="font-medium-5"></i>
                            </button>

                            <!-- collapse  -->
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div class="profile-tabs d-flex justify-content-between flex-wrap mt-1 mt-md-0">
                                    <ul class="nav nav-pills mb-0">

                                        <li class="nav-item">
                                            <a class="@if (Route::current()->getName() == 'bien.show') active @endif nav-link fw-bold"
                                               href="{{route('bien.show',$bien->token)}}">
                                                <span class="d-none d-md-block">Fiche du bien</span>
                                                <i data-feather="info" class="d-block d-md-none"></i>
                                            </a>
                                        </li>
                                        {{--
                                        <?php dd(Route::current()->getName() == 'bien.visite'); ?> --}}

                                        <li class="nav-item">
                                            <a class="@if (Route::current()->getName() == 'bien.visite') active @endif nav-link fw-bold"
                                               href="{{route('bien.visite',$bien->token)}}">
                                                <span class="d-none d-md-block">Visite pour le bien</span>
                                                <i data-feather="image" class="d-block d-md-none"></i>
                                            </a>
                                        </li>


                                    </ul>

                                    <ul class="nav nav-pills float-right">


                                            <li class="nav-item me-1">

                                                    <a href="{{ route('bien.edit', $bien->token) }}"
                                                    {{-- class="nav-link fw-bold  btn btn-sm btn-success" --}}
                                                    class=" btn btn-sm btn-success" title="Modifier">
                                                        <span class="d-none d-md-block"><i data-feather="edit"></i></span>
                                                    </a>

                                            </li>




                                            <li class="nav-item me-1">
                                                <a href="#" {{-- class="nav-link fw-bold  btn btn-sm btn-primary" --}}
                                                class="btn btn-sm btn-primary" data-bs-target="#approval"
                                                   data-bs-toggle="modal" title="Mettre à jour le statut du dossier">
                                            <span class="d-none d-md-block">
                                                <i data-feather="check"></i>
                                                Mettre à jour le statut
                                            </span>
                                                </a>
                                            </li>

                                    </ul>

                                </div>
                            </div>
                            <!--/ collapse  -->
                        </nav>
                        <!--/ navbar -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ profile header -->

        <!-- profile info section -->
        <section id="profile-info">
            <div class="row">

                @yield('main')
            </div>
            <!--/ progressbar -->

        </section>
        <!--/ profile info section -->


    </div>


    <div class="modal fade" id="approval" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-5 px-sm-5 pt-50">
                    <div class="text-center mb-2">
                        <h1 class="mb-1">Mettre à jour le dossier</h1>
                        <p>Seuls les chefs de département peuvent changer le statut de ce dossier.</p>
                    </div>
                    <form id="editUserForm" class="row gy-1 pt-75" action="#"
                          method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="col-12 col-md-12">
                            <label class="form-label" for="approval">Votre décision pour ce dossier est :</label>
                            <select name="approval" id="approval" class="form-control" required>
                                <option value="">Selectionner une reponse</option>

                            </select>
                        </div>

                        <div class="col-12 col-md-12" id="list_department">

                        </div>
                        <input type="hidden" name="client_id" value="{{$bien->id}} ">

                        <div class="col-12 text-center mt-2 pt-50">
                            <button type="submit" class="btn btn-primary me-1">Enregistrer</button>
                            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                Fermer
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
