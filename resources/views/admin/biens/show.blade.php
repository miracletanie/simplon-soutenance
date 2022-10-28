@extends('admin.biens.layouts')

@section('main')

    <div class="col-lg-12 col-12 order-2 order-lg-1">
        <div class="card">
            <div class="card-header">
                <h5>
                Information sur le bien
                </h5>
            </div>
            <div class="card-body">

                <div class="m-5">

                    <div class="row g-3">
                        <div class="col-lg-4 col-md-4">
                            <div class="mt-2">
                                <h5 class="mb-75">Localisation : </h5>
                                <p class="card-text">{{ $bien->location }}</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="mt-2">
                                <h5 class="mb-75">Superficie : </h5>
                                <p class="card-text">{{ $bien->area }}</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="mt-2">
                                <h5 class="mb-75">Loyer : </h5>
                                <p class="card-text">{{ $bien->price }}</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="mt-2">
                                <h5 class="mb-75">Nombre de pieces : </h5>
                                <p class="card-text">{{ $bien->beds }}</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="mt-2">
                                <h5 class="mb-75">Nombre de douche : </h5>
                                <p class="card-text">{{ $bien->baths }}</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="mt-2">
                                <h5 class="mb-75">Nombre de garage : </h5>
                                <p class="card-text">{{ $bien->garage }}</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="mt-2">Description: </h5>
                                <p class="card-text">{{ $bien->description }}</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


@endsection
