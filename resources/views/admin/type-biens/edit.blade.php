@extends('admin.layouts.main')

@section('breacrumd')
    <h2 class="content-header-title float-start mb-0">Tableau de bord</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tableau de bord</a>
            </li>
            <li class="breadcrumb-item active">Formulaire de creation de type de bien
            </li>
        </ol>
    </div>
@endsection



@section('content')
    <div class="col-lg-12 col-12">
        <div class="card card-user-timeline">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-list user-timeline-title-icon">
                        <line x1="8" y1="6" x2="21" y2="6"></line>
                        <line x1="8" y1="12" x2="21" y2="12"></line>
                        <line x1="8" y1="18" x2="21" y2="18"></line>
                        <line x1="3" y1="6" x2="3.01" y2="6"></line>
                        <line x1="3" y1="12" x2="3.01" y2="12"></line>
                        <line x1="3" y1="18" x2="3.01" y2="18"></line>
                    </svg>
                    <h4 class="card-title">Formulaire de modification de type de bien </h4>
                </div>
            </div>
            <form action="{{ route('type-bien.update',$type->token) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label for="last_name">Libelle du type de bien <span style="color: red">*</span></label>
                                <input type="text" name="name" id="last_name" class="form-control" required
                                    value="{{ old('name', $type->name ?? '') }}">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <input type="submit" value="Modifier" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
