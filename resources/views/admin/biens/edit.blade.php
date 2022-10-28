@extends('admin.layouts.main')

@section('breacrumd')
    <h2 class="content-header-title float-start mb-0">Tableau de bord</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tableau de bord</a>
            </li>
            <li class="breadcrumb-item active">Formulaire de creattion de bien
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
                    <h4 class="card-title">Formulaire de modification de bien </h4>
                </div>
            </div>
            <form action="{{ route('bien.update',$bien->token) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mt-1">
                            <div class="form-group">
                                <label for="last_name">Type de bien <span style="color: red">*</span></label>
                                <select name="type" id="type" required class="form-control">
                                    <option value="">Selectionnez le type de bien</option>
                                    @foreach ($types as $type)
                                        <option  value="{{ $type->id}}" @if($bien->type->id == $type->id) selected @endif>{{$type->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-1">
                            <div class="form-group">
                                <label for="name">Libelle du bien <span style="color: red">*</span></label>
                                <input type="text" class="form-control" name="name" value="{{ old('name', $bien->name ?? '') }}" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-1">
                            <div class="form-group">
                                <label for="location">Localisation du bien<span style="color: red">*</span></label>
                                <input type="text" class="form-control" name="location" value="{{ old('location', $bien->location ?? '') }}" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-1">
                            <div class="form-group">
                                <label for="area">Superficie <span style="color: red">*</span></label>
                                <input type="number" class="form-control" name="area" value="{{ old('area', $bien->area ?? '') }}" required min="0">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-1">
                            <div class="form-group">
                                <label for="price">Loyer <span style="color: red">*</span></label>
                                <input type="number" class="form-control" name="price" value="{{ old('price', $bien->price ?? '') }}" required min="0">
                            </div>
                        </div>
                        {{-- <div class="col-lg-4 col-md-6 mt-1">
                            <div class="form-group">
                                <label for="images">Images du bien <span style="color: red">*</span></label>
                                <input type="file" multiple class="form-control" name="images[]" required>
                            </div>
                        </div> --}}
                        <div class="col-lg-4 col-md-6 mt-1">
                            <div class="form-group">
                                <label for="beds">Nombre de pieces <span style="color: red">*</span></label>
                                <input type="number" class="form-control" name="beds" value="{{ old('beds', $bien->beds ?? '') }}" required min="0">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-1">
                            <div class="form-group">
                                <label for="baths">Nombre de salle de bain <span style="color: red">*</span></label>
                                <input type="number" class="form-control" name="baths" value="{{ old('baths', $bien->baths ?? '') }}" required min="0">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-1">
                            <div class="form-group">
                                <label for="garage">Nombre de garages <span style="color: red">*</span></label>
                                <input type="number" class="form-control" name="garage" value="{{ old('garage', $bien->garage ?? '') }}" required min="0">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-1">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" cols="30" rows="6" name="description" class="form-control">{{ old('description', $bien->description ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <input type="submit" value="modifier" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection


