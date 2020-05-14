



@extends('template')

@section('titre')
    {{ trans('sentences.pages.accueil.titre')}}
@endsection


@section('contenu')


    @section('intro-title')
        AC GROUP
    @endsection

    @section('intro-description')
        {{ trans('sentences.pages.accueil.intro.description')}}
    @endsection


    @section('button-title')
        {{ trans('sentences.pages.accueil.intro.button')}}
    @endsection

    <!--Section: Présentation-->
    <div class="container-fluid mb-5 animate" data-animate="zoomIn"
        data-duration="1.0s" data-delay="0.1s"  id="presentation" >

        <!--Section: Content-->
        <section class="dark-grey-text">
    
            <div class="row pr-lg-5">
                
                <div class="col-md-5 animated " id="presentation-illustration">
                    <div class="">
                        <img src="{{asset('images/logo/ac-group.jpg')}}" class="img-fluid" alt="smaple image">
                    </div>
                </div>

                <div class="col-md-7 d-flex align-items-center" id="presentation-texte">
                    <div>
                        
                        <h3 class="font-weight-bold mb-4">{{ trans('sentences.pages.accueil.presentation.title')}}</h3>
            
                        <p class="text-justify">
                            {{ trans('sentences.pages.accueil.presentation.description')}}
                        </p>
            
                    </div>
                </div>

            </div>
    
        </section>
        <!--Section: Content-->
    
    </div>
    <!-- End Section-->



    <!--Section: Expertises-->
    <div class="container-fluid mt-5 animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s">

        <h3 class="font-weight-bold text-center">{{ trans('sentences.pages.accueil.expertises.presentation.title')}}</h3>
        <hr class="w-header my-4">
        <p class="text-muted lead mx-auto mb-5 col-lg-12 text-center">
            {{ trans('sentences.pages.accueil.expertises.presentation.description')}}
        </p>

    </div>


    <div class="container-fluid mb-5 pt-3  my-5 px-4 px-lg-0" >

        <section class="p-md-3 mx-md-5 mb-4" id="expertises-communication">

            <div class="container  pb-4 animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s">
                <h5 class="font-weight-bold mb-2 text-center">{{ trans('sentences.pages.accueil.expertises.poles.1.title')}}</h5>
                <hr class="w-header my-4">

                <div class="row d-flex justify-content-between align-items-center" >
                    <div class="col-md-8 mb-4">
                        <p class="text-muted pt-3">
                            {{ trans('sentences.pages.accueil.expertises.poles.1.description')}}
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed 
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-4 d-flex justify-content-center mb-md-0 mb-5">
                        <img src="{{asset('images/logo/AC-Communication.jpg')}}" class="img-fluid" style="height: 200px;" alt="">
                    </div>
                </div>

            </div>



            <div class="row pt-5 pb-5">
                <div class="col-lg-10 mx-auto">
        
                    <ol class="timeline">

                        <li class="timeline-element">
                            <div class="row mb-5 d-flex align-items-center">

                                <div class="col-lg-6 col-md-6 animate" data-animate="slideInLeft" 
                                    data-duration="1.0s" data-delay="0.1s">
                                    <div class="card">
                                        <div class="card-header white">
                                            <h5 class="font-weight-bold mb-0 py-2 ">
                                                {{ trans('sentences.pages.accueil.expertises.poles.1.list.1.title')}}
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text text-justify">
                                                {{ trans('sentences.pages.accueil.expertises.poles.1.list.1.description')}}
                                            </p>
                                            <a class="blue-text font-weight-bold" href="/expertises#first-section">
                                                {{ trans('sentences.pages.accueil.expertises.button')}}
                                                <i class="fas fa-plus-circle"></i>
                                            </a> 
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-md-6 col-lg-4 animate">
                                    <div class="overlay">
                                        <img src="{{asset('images/illustrations/Data_Analytics_web marketing.svg')}}"
                                         class="img-fluid"
                                        alt="Sample project image" />
                                        <a href="#">
                                        </a>
                                    </div>
                                </div>
            
                            </div>
                        </li>
            
                        <li class="timeline-element">
                            <div class="row mb-5 d-flex align-items-center justify-content-end">
                            
                                <div class="col-md-6 col-lg-4 animate">
                                    <div class="overlay rounded z-depth-1">
                                        <img src="{{asset('images/illustrations/seo.svg')}}" class="img-fluid"
                                        alt="Sample project image" />
                                        <a href="#">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 animate" data-animate="slideInRight" data-duration="1.0s" data-delay="0.1s">
                                    <div class="card">
                                        <div class="card-header white">
                                            <h5 class="font-weight-bold mb-0 py-2">
                                                {{ trans('sentences.pages.accueil.expertises.poles.1.list.2.title')}}
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text text-justify">
                                                {{ trans('sentences.pages.accueil.expertises.poles.1.list.2.description')}}
                                            </p>
                                            <a class="blue-text font-weight-bold" href="/expertises#second-section">
                                                {{ trans('sentences.pages.accueil.expertises.button')}}
                                                <i class="fas fa-plus-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
            
                            </div>
                        </li>
            
                        <li class="timeline-element">
                            <div class="row d-flex mb-5 align-items-center">
                        
                                <div class="col-lg-6 col-md-6 animate" data-animate="slideInLeft" data-duration="1.0s" data-delay="0.1s">
                                    <div class="card">
                                        <div class="card-header white">
                                            <h5 class="font-weight-bold mb-0 py-2">
                                                {{ trans('sentences.pages.accueil.expertises.poles.1.list.3.title')}}
                                            </h5>
                                        </div>
                                        <div class="card-body ">
                                            <p class="card-text text-justify">
                                                {{ trans('sentences.pages.accueil.expertises.poles.1.list.3.description')}}
                                            </p>
                                            <a class="blue-text font-weight-bold" href="/expertises#thrid-section">
                                                {{ trans('sentences.pages.accueil.expertises.button')}}
                                                <i class="fas fa-plus-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-md-6 col-lg-4 animate">
                                    <div class="overlay">
                                        <img src="{{asset('images/illustrations/gestion_financiere.svg')}}" class="img-fluid"
                                        alt="Sample project image" />
                                        <a href="/expertises#first-section">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>
            
                            </div>
                        </li>

                        
                    </ol>
        
                </div>
            </div>

            <div class="text-center pb-5">
                <a href="{{url('/expertises#ac-communication')}}">
                    <button type="button" class="btn btn-outline-warning waves-effect">
                        {{ trans('sentences.pages.accueil.expertises.poles.1.button')}}
                    </button>
                </a>
            </div>

        </section>


        <section class="p-md-3 mx-md-5 mt-5" id="expertises-services">

            <div class="container  pb-4 animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s">
                <h5 class="font-weight-bold text-center mb-2">
                    {{ trans('sentences.pages.accueil.expertises.poles.2.title')}}</h5>

                <hr class="w-header my-4">

                <div class="row d-flex justify-content-between align-items-center" >
                    <div class="col-md-8 mb-4">
                        <p class="text-muted pt-3">
                            {{ trans('sentences.pages.accueil.expertises.poles.2.description')}}
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed 
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-4 d-flex justify-content-center mb-md-0 mb-5">
                        <img src="{{asset('images/logo/AC-Service.jpg')}}" class="img-fluid" style="height: 200px;" alt="">
                    </div>
                </div>
    
            </div>

            <div class="row pt-5 pb-5">
                <div class="col-lg-10 mx-auto">
        
                    <ol class="timeline">

                        <li class="timeline-element">
                            <div class="row mb-5 d-flex align-items-center">

                                <div class="col-lg-6 col-md-6 animate" data-animate="slideInLeft" data-duration="1.0s" data-delay="0.1s">
                                    <div class="card">
                                        <div class="card-header white">
                                            <h5 class="font-weight-bold mb-0 py-2 ">
                                                {{ trans('sentences.pages.accueil.expertises.poles.2.list.1.title')}}
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text text-justify">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>
                                            <a class="blue-text font-weight-bold" href="/expertises#first-section">
                                                {{ trans('sentences.pages.accueil.expertises.button')}}
                                                <i class="fas fa-plus-circle"></i>
                                            </a> 
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-md-6 col-lg-4 animate">
                                    <div class="overlay rounded z-depth-1">
                                        <img src="https://mdbootstrap.com/img/Photos/Others/images/58.jpg" class="img-fluid"
                                        alt="Sample project image" />
                                        <a href="#">
                                        </a>
                                    </div>
                                </div>
            
                            </div>
                        </li>
            
                        <li class="timeline-element">
                            <div class="row mb-5 d-flex align-items-center justify-content-end">
                            
                                <div class="col-md-6 col-lg-4 animate">
                                    <div class="overlay rounded z-depth-1">
                                        <img src="https://mdbootstrap.com/img/Photos/Others/project4.jpg" class="img-fluid"
                                        alt="Sample project image" />
                                        <a href="#">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 animate" data-animate="slideInRight" data-duration="1.0s" data-delay="0.1s">
                                    <div class="card">
                                        <div class="card-header white">
                                            <h5 class="font-weight-bold mb-0 py-2">
                                                {{ trans('sentences.pages.accueil.expertises.poles.2.list.2.title')}}
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text text-justify">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>
                                            <a class="blue-text font-weight-bold" href="/expertises#second-section">
                                                {{ trans('sentences.pages.accueil.expertises.button')}}
                                                <i class="fas fa-plus-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
            
                            </div>
                        </li>
            
                        <li class="timeline-element">
                            <div class="row d-flex mb-5 align-items-center">
                        
                                <div class="col-lg-6 col-md-6 animate" data-animate="slideInLeft" data-duration="1.0s" data-delay="0.1s">
                                    <div class="card">
                                        <div class="card-header white">
                                            <h5 class="font-weight-bold mb-0 py-2">
                                                {{ trans('sentences.pages.accueil.expertises.poles.2.list.3.title')}}
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text text-justify">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>
                                            <a class="blue-text font-weight-bold" href="/expertises#thrid-section">
                                                {{ trans('sentences.pages.accueil.expertises.button')}}
                                                <i class="fas fa-plus-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-md-6 col-lg-4 animate">
                                    <div class="overlay rounded z-depth-1">
                                        <img src="https://mdbootstrap.com/img/Photos/Others/images/88.jpg" class="img-fluid"
                                        alt="Sample project image" />
                                        <a href="/expertises#first-section">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>
            
                            </div>
                        </li>
            
                    </ol>
        
                </div>
            </div>


            <div class="text-center pb-5">
                <a href="{{url('/expertises#ac-services')}}">
                    <button type="button" class="btn btn-outline-warning waves-effect">
                        {{ trans('sentences.pages.accueil.expertises.poles.1.button')}}</button>
                </a>
            </div>

        </section>

    </div>
    <!-- End Section-->



    <!--Section: Technologies-->
    <div class="container-fluid mt-5  my-5">

        

        <section class="p-md-3 mx-md-5">

            <div class="animate" data-animate="zoomIn" data-duration="1.0s" data-delay="0.1s">
                <h3 class="font-weight-bold mt-5 text-center">{{ trans('sentences.pages.accueil.technologies​.titre')}}​</h3>
                <hr class="w-header my-4">
                
                <div class="row d-flex justify-content-between align-items-center" >
                    <div class="col-md-6 mb-4">
                        <p class="text-muted pt-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-4 d-flex justify-content-center mb-md-0 mb-5">
                        <i class="fa fa-layer-group indigo-text fa-10x"></i>
                    </div>
                </div>
            </div>

            <div class="row pt-3">

                <div class="col-lg-3 col-md-6 mb-5 animate" data-animate="rubberBand" data-duration="1.0s" data-delay="0.1s">
                    <h4 class="font-weight-bold mb-3">
                        <!--i class="far fa-paper-plane indigo-text pr-2"></i-->
                        <img src="{{asset('images/technologie/laravel.svg')}}"/> <span> Laravel </span>
                    </h4>
                    <p class="text-muted mb-lg-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 mb-5 animate" data-animate="rubberBand" data-duration="1.0s" data-delay="0.1s">
                    <h4 class="font-weight-bold mb-3">
                        <img src="{{asset('images/technologie/angular.svg')}}"/> <span> Angular </span>
                    </h4>
                    <p class="text-muted mb-lg-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 mb-5 animate" data-animate="rubberBand" data-duration="1.0s" data-delay="0.1s">
                    <h4 class="font-weight-bold mb-3">
                        <img src="{{asset('images/technologie/Vue.js.svg')}}"/> <span> Vue Js </span>
                    </h4>
                    <p class="text-muted mb-md-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 mb-5 animate" data-animate="rubberBand" data-duration="1.0s" data-delay="0.1s">
                    <h4 class="font-weight-bold mb-3">
                        <img src="{{asset('images/technologie/Vue.js.svg')}}"/> <span> Flutter </span>
                    </h4>
                    <p class="text-muted mb-md-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>

            </div>

        </section>
    </div>
    <!-- End Section-->




    <!--Section: Témoignages-->
    <div class="container-fluid mt-5 animate" data-animate="zoomIn" data-duration="1.0s" data-delay="0.1s">

        <h3 class="font-weight-bold mt-5 text-center">{{ trans('sentences.pages.accueil.temoignages​.titre')}}</h3>
        <hr class="w-header my-4">

        <div class="container-fluid my-3 px-5 pb-3">
        
            <!--Section: Content-->
            <section class="text-center dark-grey-text">
        
                <!-- Grid row -->
                <div class="row">
            
                    <!-- Grid column -->
                    <div class="col-md-12 mb-4">
            
                        <div class="wrapper-carousel-fix">
                    
                            <!-- Carousel Wrapper -->
                            <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide" data-ride="carousel"
                                data-interval="false">
                            
                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <p class="lead font-italic">
                                            "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Fugit, error amet numquam iure provident voluptate esse quasi,
                                            voluptas nostrum quisquam!"
                                        </p>

                                        <div class=" card-img-64 mx-auto mt-5 mb-4">
                                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(2).jpg"
                                            class="rounded-circle img-fluid" alt="smaple image">
                                        </div>

                                        <p class="text-muted">- Anna Morian</p>
                                    </div>
                                    <!--First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <p class="lead font-italic">
                                            "Neque cupiditate assumenda in maiores repudiandae mollitia
                                            adipisci maiores repudiandae mollitia consectetur adipisicing
                                            architecto elit sed adipiscing elit."
                                        </p>
                                        
                                        <div class=" card-img-64 mx-auto mt-5 mb-4">
                                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg"
                                            class="rounded-circle img-fluid" alt="smaple image">
                                        </div>

                                        <p class="text-muted">- Teresa May</p>
                                    </div>
                                    <!--Second slide-->

                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        <p class="lead font-italic">
                                            "Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur est laborum neque cupiditate
                                            assumenda in maiores."
                                        </p>

                                        <div class=" card-img-64 mx-auto mt-5 mb-4">
                                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg"
                                            class="rounded-circle img-fluid" alt="smaple image">
                                        </div>

                                        <p class="text-muted">- Kate Allise</p>
                                    </div>
                                    <!--Third slide-->

                                </div>
                                <!--Slides-->

                                <!--Controls-->
                                <a class="carousel-control-prev left carousel-control" href="#carousel-example-1"
                                    role="button" data-slide="prev">

                                    <i class="fas fa-chevron-left"></i>

                                </a>
                                
                                <a class="carousel-control-next right carousel-control" href="#carousel-example-1"
                                    role="button" data-slide="next">

                                    <i class="fas fa-chevron-left"></i>

                                </a>
                                <!--Controls-->

                            </div>
                            <!-- Carousel Wrapper -->
                            
                        </div>
                    
                    </div>
                    <!-- Grid column -->
            
                </div>
                <!-- Grid row -->
                
            </section>
            <!--Section: Content-->
        
        </div>   
        
    </div>
    <!-- End Section-->

 
@endsection