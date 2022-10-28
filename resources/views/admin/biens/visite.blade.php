@extends('admin.biens.layouts')

@section('main')
<div class="col-lg-12 col-12 order-2 order-lg-1">
    <div class="card">
        <div class="card-header">
            <h5>
            Liste des visites pour ce bien
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
                            <th>Date</th>
                            <th>Message</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">

                        @foreach ($visites as $visite)
                            <tr>
                                <td>{{ $loop->iteration }} </td>

                                <td id="clientName">{{ $visite->name ?? '' }}</td>
                                <td>{{ $visite->phone }}</td>
                                <td>{{ $visite->date }}</td>
                                <td>{{$visite->message}} </td>
                                <td>
                                    @if ($visite->status == "Pending")
                                        En attente
                                    @else
                                    {{$visite->status }}
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
