@extends('site.layouts.main')

@section('content')

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Nos proprietes</h1>
            <span class="color-text-a">{{$libelle}}</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{route('home')}}">Accueil</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Proprietes - {{$libelle}}
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Grid Star /-->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">
        @if($all_types == true)
        <div class="col-sm-12">
          {{-- <div class="grid-option">
            <form>
              <select class="custom-select">
                <option selected>Tous</option>
                <option value="1">New to Old</option>
                <option value="2">For Rent</option>
                <option value="3">For Sale</option>
              </select>
            </form>
          </div> --}}
        </div>
        @endif
        @foreach ($biens as $item)
        <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
              <img src="{{asset($item->images->first()->path ?? 'site/img/property-6.jpg')}}" alt="" class="img-a img-fluid"   style="width: 500px; height:500px" width="500px" height="500px">
            </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="#">{{$item->location}}
                        {{-- <br /> Olive Road Two --}}
                    </a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">Prix | {{$item->price}} F CFA</span>
                    </div>
                    <a href="{{route('detail_bien',$item->token)}}" class="link-a">Cliquez ici pour les details
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Superficie</h4>
                        <span>{{$item->area}}m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Pieces</h4>
                        <span>{{$item->beds}}</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Douches</h4>
                        <span>{{$item->baths}}</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Garages</h4>
                        <span>{{$item->garage}}</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach

      </div>
      @if ($biens->isEmpty())
          <p class="alert alert-info">
            Aucun bien de disponible
          </p>
      @endif
    </div>
  </section>
  <!--/ Property Grid End /-->

@endsection
