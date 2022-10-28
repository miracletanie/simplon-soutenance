@extends('admin.layouts.main')


@section('breacrumd')
    <h2 class="content-header-title float-start mb-0">Tableau de bord</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tableau de bord</a>
            </li>
            <li class="breadcrumb-item active">Liste des visites
            </li>
        </ol>
    </div>
@endsection


@section('content')

<div class="col-lg-12 col-12 order-2 order-lg-1">
    <div class="card">
        <div class="card-header">
            <h5>
            Liste des visites
            </h5>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-md-6">

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
                            <th>Nom</th>
                            <th>Contact</th>
                            <th>Bien</th>
                            <th>Date</th>
                            {{-- <th>Message</th> --}}
                            <th>Statut</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">

                        @foreach ($visites as $visite)
                            <tr>
                                <td>{{ $loop->iteration }} </td>

                                <td id="clientName">{{ $visite->name ?? '' }}</td>
                                <td>{{ $visite->phone }}</td>
                                <td> <a href="{{route('bien.show',$visite->bien->token)}}">  {{ $visite->bien->name }}</a></td>
                                <td>{{ $visite->date }}</td>
                                {{-- <td>{{$visite->message}} </td> --}}
                                <td>
                                    @if ($visite->status == "Pending")
                                        En attente
                                    @else
                                    {{$visite->status }}
                                    @endif

                                </td>
                                <td>
                                    @if ($visite->status == 'Pending')
                                    <a href="{{route('visite.valider',$visite->token)}}" class="btn btn-sm btn-success">Approuver</a>
                                    <a href="{{route('visite.refuser',$visite->token)}}" class="btn btn-sm btn-warning">Rejeter</a>
                                    @endif

                                </td>

                            </tr>
                        @endforeach
                        @if ($visites->isEmpty())
                            <tr>
                                <td colspan="7" style="text-align: center">
                                    Aucune donnees de disponibles
                                </td>
                            </tr>
                        @endif

                    </tbody>
                </table>
            </div>
            <div class="my-2">{{ $visites->links() }}</div>
        </div>
    </div>
</div>

@endsection
