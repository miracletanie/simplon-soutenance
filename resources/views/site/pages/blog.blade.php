@extends('site.layouts.main')

@section('content')


  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Tous les articles du blog</h1>
            <span class="color-text-a">Les derniers artcles</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{route('home')}}">Accueil</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Les articles du blog
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ News Grid Star /-->
  <section class="news-grid grid">
    <div class="container">
      <div class="row">
        @foreach ($articles as $item)
        <div class="col-md-4">
            <div class="card-box-b card-shadow news-box">
              <div class="img-box-b">
                <img src="{{asset($item->path ?? 'site/img/post-1.jpg')}}" alt="" class="img-b img-fluid" style="width: 500px; height:500px" width="500px" height="500px">
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  <div class="card-category-b">
                    <a href="#" class="category-b">{{$item->type->name ?? ""}}</a>
                  </div>
                  <div class="card-title-b">
                    <h2 class="title-2">
                      <a href="{{route('detail_article',$item->token)}}">{{$item->title}}
                        {{-- <br> new --}}
                    </a>
                    </h2>
                  </div>
                  <div class="card-date">
                    <span class="date-b">{{$item->created_at->format('d M Y')}}</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach


      </div>
         @if ($articles->isEmpty())
            <p class="alert alert-primary">
                Aucun article de disponible
            </p>
        @endif
    </div>
  </section>
  <!--/ News Grid End /-->

@endsection
