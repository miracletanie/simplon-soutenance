@extends('site.layouts.main')

@section('content')


  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">KZ immobilier</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{route('home')}}">Accueil</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                A propos
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ About Star /-->
  <section class="section-about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="about-img-box">
            <img src="{{asset('site/img/slide-about-1.jpg')}}" alt="" class="img-fluid">
          </div>
          <div class="sinse-box">
            <h3 class="sinse-title">KZ immobilier
              <span></span>
              <br> Depuis 2022</h3>
            <p>Location & vente</p>
          </div>
        </div>
        <div class="col-md-12 section-t8">
          <div class="row">
            <div class="col-md-6 col-lg-5">
              <img src="{{asset('site/img/about-2.jpg')}}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-2  d-none d-lg-block">
              <div class="title-vertical d-flex justify-content-start">
                <span>A propos du groupe</span>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 section-md-t3">
              <div class="title-box-d">
                <h3 class="title-d">Qui
                  <span class="color-d">sommes-nous ?</span>
                  <br> </h3>
              </div>
              <p class="color-text-a">
                Créée en 2022, par Mme Mercure Kaunan, KZ Immobilier est spécialisée
                dans l’immobilier de petits, moyen et haut standing : appartements, villas (meublés ou non, à moyen ou long terme) et locaux professionnels (bureaux, entrepôts et espaces commerciaux) et cela, dans tout type de contrat partant de la location jusqu'a la vente.
                Nos nombreuses années d’expériences et la rigueur dans le travail,
                nous ont permis d’acquérir une notoriété sur le marché ivoirien ce qui fait de nous un groupe serieux et professionnel.
              </p>
              <div class="title-box-d">
                <h3 class="title-d">Quelle
                  <span class="color-d">est notre vision</span>?
                  <br>  </h3>
              </div>
              <p class="color-text-a">
                Nous nous sommes donnée pour mission de faire évoluer le volet immobilier en permettant à nos équipes
                de travailler dans un environnement et serein en leur offrant
                les moyens matériels et humain leur permettant d’être en perpétuelle évolution.Le but serait donc de
                placer l’humain (les propriétaires, locataires et memes les acquéreurs)
                au cœur de nos priorités en leurs offrants une solution sur mesure
                apportée par un accompagnement personnalisé.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ About End /-->

  <!--/ Team Star /-->
  <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Notre equipe</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="{{asset('site/img/agent-7.jpg')}}" alt="" class="img-d img-fluid" style="width: 300px; height:300px" width="300px" height="300px">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="agent-single.html" class="link-two">Anna AKA,
                      <br> Gerante</a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <p class="content-d color-text-a">
                    Directrice generale, elle s'occupe de toute l'entreprise.                </p>
                <div class="info-agents color-a">
                  <p>
                    <strong>Phone: </strong> +225 0708833084</p>
                  <p>
                    <strong>Email: </strong> anna@kz-immobilier.com
                </p>
                </div>
              </div>
              <div class="card-footer-d">
                <div class="socials-footer d-flex justify-content-center">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="{{asset('site/img/agent-6.jpg')}}" alt="" class="img-d img-fluid" style="width: 300px; height:300px" width="300px" height="300px">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="agent-single.html" class="link-two">Serge Nanand
                      <br> Chef du personnel</a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <p class="content-d color-text-a">
                    Veritable directeur des Ressources Humaines, il s'occupe de l'administration du personnels et du recrutement.                </p>
                <div class="info-agents color-a">
                  <p>
                    <strong>Phone: </strong> +225 0708833084</p>
                  <p>
                    <strong>Email: </strong> serge@kz-immobilier.com</p>
                </div>
              </div>
              <div class="card-footer-d">
                <div class="socials-footer d-flex justify-content-center">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="{{asset('site/img/agent-5.jpg')}}" alt="" class="img-d img-fluid" style="width: 300px; height:300px" width="300px" height="300px">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="agent-single.html" class="link-two">Emma Toure
                      <br> Responsable commerciale</a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <p class="content-d color-text-a">
                    Elle gere le service commerciale, s'occupe des ventes et des achats de biens immobiliers, etc.                </p>
                <div class="info-agents color-a">
                  <p>
                    <strong>Phone: </strong> +225 0708833084</p>
                  <p>
                    <strong>Email: </strong> emma@kz-immobilier.com</p>
                </div>
              </div>
              <div class="card-footer-d">
                <div class="socials-footer d-flex justify-content-center">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Team End /-->
@endsection
