<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      {{-- <a class="navbar-brand text-brand" href="#">Estate<span class="color-b">Agency</span></a> --}}
      <img src="{{asset('site/img/logo.jpg')}}" alt="" class="img-d img-fluid" style="width: 50px; height:50px" width="50px" height="50px">
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName()=='home') active @endif" href="{{route('home')}}">Accueil</a>
            {{-- <a class="nav-link active" href="{{route('home')}}">Accueil</a> --}}
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName()=='about') active @endif" href="{{route('about')}}">A propos</a>
            {{-- <a class="nav-link" href="{{route('about')}}">A propos</a> --}}
          </li>

          <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName()=='blog') active @endif" href="{{route('blog')}}">Blog</a>
            {{-- <a class="nav-link" href="{{route('blog')}}">Blog</a> --}}
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link @if(Route::currentRouteName()=='bien') active @endif" href="{{route('bien')}}" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Biens Immobiliers</a>
            {{-- <a class="nav-link dropdown-toggle" href="{{route('bien')}}" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false"> --}}


            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach (\App\Models\TypeBien::all() as $item)
                    <a class="dropdown-item" href="{{route('type-bien',$item->token)}}">{{$item->name}}</a>
                @endforeach

            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName()=='contact') active @endif" href="{{route('contact')}}">Contact</a>
          </li>
        </ul>
      </div>
      {{-- <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button> --}}
    </div>
  </nav>
