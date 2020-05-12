

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- Icon de logo du Site -->
    <link rel="shortcut icon" href="{{asset('')}}" type="image/x-icon">

    <!-- Titre du site -->
    <title>
        @yield('titre')
    </title>

    {{-- fichiers css --}}
    @include('includeCss')

</head>


<body>


<!-- Main navigation -->
@if (!$isContact)
<header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  
      <div class="container">
  
        <a class="navbar-brand font-montserrart" href="#">AC GROUP</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto smooth-scroll">

            <li class="nav-item @if($namePage=='accueil') active-nav @endif">
                <a class="nav-link text-uppercase" href="{{ url('')}}"> {{ trans('sentences.nav.accueil')}}
                    <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item @if($namePage=='vision') active-nav @endif">
              <a class="nav-link text-uppercase" href="{{ url('/vision')}}">
                {{ trans('sentences.nav.vision')}}
                  <span class="sr-only">(current)</span>
              </a>
            </li>

            <li class="nav-item @if($namePage=='expertises') active-nav @endif">
              <a class="nav-link text-uppercase" href="{{ url('expertises') }}" data-offset="90">
                {{ trans('sentences.nav.expertise')}}</a>
            </li>

            <li class="nav-item @if($namePage=='faq') active-nav @endif">
              <a class="nav-link text-uppercase" href="{{ url('faq') }}" data-offset="90">
                {{ trans('sentences.nav.faq')}}</a>
            </li>

            <li class="nav-item @if($namePage=='contact') active-nav @endif">
              <a class="nav-link text-uppercase" href="{{ url('contact') }}" data-offset="90">
                {{ trans('sentences.nav.contact')}}</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('lang','fr') }}">
                  <img src="{{asset('images/fr.svg')}}" alt="">
              </a>
            </li>
    
            <li class="nav-item">
                <a class="nav-link" href="{{ url('lang','en') }}">
                  <img src="{{asset('images/en.svg')}}" alt="">
                </a>
            </li>

          </ul>
        </div>
  
      </div>
  
    </nav>
    <!-- Navbar -->
  
    <!-- Full Page Intro -->
    <div id="intro-section" class="view">

      <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row wow fadeIn">

            <div class="col-md-12 mb-4 white-text animated text-center wow flipInX">

              <h4 class="display-3 font-weight-bold white-text mb-0 pt-md-5 pt-5"> @yield('intro-title')</h4>
              <hr class="hr-light my-4 w-75">
              <h5 class="subtext-header mt-2 mb-4"> @yield('intro-description')</h5>
              
              
              <a href="#!" class="btn btn-rounded btn-outline-white">
                 <span class="font-weight-bold">@yield('button-title')</span>
              </a>
  
            </div>
  
          </div>
        </div>
      </div>

      {{--<img src="{{asset('images/ARC.png')}}" class="bottom-img fixed-bottom"/>--}}

    </div>


</header>


@else
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">

  <div class="container">
  
    <a class="navbar-brand font-montserrart" href="#">AC GROUP</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ml-auto smooth-scroll">

        <li class="nav-item @if($namePage=='accueil') active-nav @endif">
          <a class="nav-link text-uppercase" href="{{ url('')}}"> {{ trans('sentences.nav.accueil')}}
              <span class="sr-only">(current)</span>
          </a>
        </li>

        <li class="nav-item @if($namePage=='vision') active-nav @endif">
          <a class="nav-link text-uppercase" href="{{ url('/vision')}}">
            {{ trans('sentences.nav.vision')}}
              <span class="sr-only">(current)</span>
          </a>
        </li>

        <li class="nav-item @if($namePage=='expertises') active-nav @endif">
          <a class="nav-link text-uppercase" href="{{ url('expertises') }}" data-offset="90">
            {{ trans('sentences.nav.expertise')}}</a>
        </li>

        <li class="nav-item @if($namePage=='faq') active-nav @endif">
          <a class="nav-link text-uppercase" href="{{ url('faq') }}" data-offset="90">
            {{ trans('sentences.nav.faq')}}</a>
        </li>

        <li class="nav-item @if($namePage=='contact') active-nav @endif">
          <a class="nav-link text-uppercase" href="{{ url('contact') }}" data-offset="90">
            {{ trans('sentences.nav.contact')}}</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ url('lang','fr') }}">
              <img src="{{asset('images/fr.svg')}}" alt="">
          </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('lang','en') }}">
              <img src="{{asset('images/en.svg')}}" alt="">
            </a>
        </li>

      </ul>
    </div>

  </div>

</nav>
<!-- Navbar -->
@endif
<!-- Main navigation -->





{{-- Contenu du site --}}
<main>
    @yield('contenu')
</main>
{{-- Contenue du site --}}





<!--Footer-->
<footer class="page-footer text-center orange darken-1 font-small">

    <div class="mt-4">

        <div class="pt-5">
            <p class="h4 mb-4">{{ trans('sentences.footer.titre')}}</p>
            <a class="btn btn-outline-white animated zoomIn infinite"
              href="{{url('/contact')}}" target="_blank" role="button"> {{ trans('sentences.footer.button')}}
            </a>
        </div>

        <hr class="my-4">

        <!-- Social icons -->
        <div class="pb-4">
            <a href="https://www.facebook.com/mdbootstrap" target="_blank">
              <i class="fab fa-facebook-f mr-3"></i>
            </a>

            <a href="https://twitter.com/MDBootstrap" target="_blank">
              <i class="fab fa-twitter mr-3"></i>
            </a>

            <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
              <i class="fab fa-youtube mr-3"></i>
            </a>

            <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
              <i class="fab fa-google-plus-g mr-3"></i>
            </a>
        </div>
        <!-- Social icons -->

        <!--Copyright-->
        <div class="footer-copyright py-3">
          © 2020 Copyright:
          <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> Creative-Agency.com </a>
        </div>
        <!--/.Copyright-->

    </div>

</footer>
<!--Footer-->







{{-- fichiers js --}}
@include('includeJs')


</body>
</html>