@extends('admin.layouts.main')

@section('breacrumd')
    <h2 class="content-header-title float-start mb-0">Tableau de bord</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tableau de bord</a>
            </li>
            <li class="breadcrumb-item active">Liste des types de bien
            </li>
        </ol>
    </div>
@endsection


@section('content')
    <section id="nav-filled">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card cardActive">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <a href="{{route('type-bien.index')}}">
                                <h3 class="fw-bolder mb-75">{{ $types->count() }}</h3>
                                <span>Tous les types de bien</span>
                            </a>
                        </div>
                        <a href="{{route('type-bien.index')}}">
                            <div class="avatar bg-light-primary p-50">
                                <span class="avatar-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user font-medium-4">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


        </div>
        <div class="row match-height">
            <!-- Justified Tabs starts -->
            <div class="col-xl-12 col-lg-12">
                <div class="card card-user-timeline">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-list user-timeline-title-icon">
                                <line x1="8" y1="6" x2="21" y2="6"></line>
                                <line x1="8" y1="12" x2="21" y2="12"></line>
                                <line x1="8" y1="18" x2="21" y2="18"></line>
                                <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                <line x1="3" y1="18" x2="3.01" y2="18"></line>
                            </svg>
                            <h4 class="card-title">Liste des types de biens </h4>
                        </div>


                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('type-bien.create') }}" class="btn btn-sm btn-primary">
                                    <i data-feather='plus'></i>
                                    Ajouter un type de bien
                                </a>

                            </div>
                            <div class="col-md-3 offset-md-3">
                                <input class="form-control" id="myInput" type="text" placeholder="Rechercher nom">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-responsive table-striped mb-none mt-5"
                                id="datatable-default">
                                <thead>
                                    <tr>
                                        <th>#</th>


                                        <th>Libelle</th>

                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    @foreach ($all_types as $type)
                                        <tr>
                                            <td>{{ $loop->iteration }} </td>

                                            <td id="clientName">{{ $type->name }}</td>

                                            <td>
                                                <a href="{{route('type-bien.edit',$type->token)}}" class="btn btn-sm btn-success"> Modifier</a>
                                                <a href="{{route('type-bien.destroy',$type->token)}}" class="btn btn-sm btn-danger"> supprimer</a>
                                            </td>


                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="my-2">{{ $all_types->links() }}</div>
                    </div>
                </div>
            </div>
            <!-- Justified Tabs ends -->
        </div>
    </section>
@endsection



@section('js')
    <script src="{{ asset('app-assets/js/scripts/components/components-navs.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable #clientName").filter(function() {
                    // $(this).parent().toggle($(this).text().toLowerCase().startsWith(value))
                    $(this).parent().toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection
