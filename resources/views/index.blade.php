



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
                <h5 class="font-weight-bold mb-2 text-center">
                    {{ trans('sentences.pages.accueil.expertises.poles.1.title')}}
                </h5>
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


            <!-- Timeline -->
            <div class="row" id="timeline">
                <div class="col-md-12">
                    <div class="timeline-main">
                        <!-- Timeline Wrapper -->
                        <ul class="stepper stepper-vertical timeline colorful-timeline pl-0">
                    
                            <li>
                                <!--Section Title -->
                                <a href="#!" class="a">
                                    <span class="circle indigo darken-1 z-depth-1-half"><i class="fas fa-check"
                                        aria-hidden="true"></i></span>
                                </a>
                    
                                <!-- Section Description -->

                                <div class="row container-fluid mb-5">
                                    <div class="step-content ml-1 z-depth-1 p-0 mt-2 animate" data-animate="slideInLeft" 
                                        data-duration="1.0s" data-delay="0.1s">

                                        <h4 class="font-weight-bold timeline-header indigo darken-1 white-text p-3">
                                            {{ trans('sentences.pages.accueil.expertises.poles.1.list.1.title')}}
                                        </h4>

                                        <div class="card-body ">
                                            <h6 class="card-text font-montserrart text-justify">
                                                {{ trans('sentences.pages.accueil.expertises.poles.1.list.1.description')}}
                                            </h6>

                                            <button type="button" href="/expertises#first-section" 
                                                class="btn btn-md font-weight-bold btn-outline-primary waves-effect">
                                                {{ trans('sentences.pages.accueil.expertises.button')}}
                                                <i class="fas fa-plus-circle"></i>
                                            </button>
                                        </div>

                                    </div>

                                    <div class="col-md-1"></div>

                                    <div class=" img-content mt-2 col-md-5 d-flex align-items-center">
                                        <div class="row">
                                            <img src="{{asset('images/illustrations/Data_Analytics_web marketing.svg')}}"
                                            class="img-fluid col-md-6 expertie-illustration w-50 h-25"/>
                                            <div class="col-md-6"></div>
                                        </div>
                                    </div>
                                </div>

                            </li>


                            <li class="timeline-inverted">
                                <!--Section Title -->
                                <a href="#!" class="a">
                                    <span class="circle indigo darken-1 z-depth-1-half"><i class="fas fa-credit-card"
                                        aria-hidden="true"></i></span>
                                </a>
                    
                                <!-- Section Description -->

                                <div class="row container-fluid mb-5">

                                    <div class="img-content mt-2 col-md-5 d-flex align-items-center">
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <img src="{{asset('images/illustrations/Data_Analytics_web marketing.svg')}}"
                                            class="img-fluid col-md-6 expertie-illustration w-50 h-25"/>
                                        </div>
                                    </div>

                                    <div class="col-md-1"></div>

                                    <div class="step-content timeline-rigth z-depth-1 p-0 mt-2 animate" data-animate="slideInRight" 
                                        data-duration="1.0s" data-delay="0.1s">

                                        <h4 class="font-weight-bold timeline-header indigo darken-1 white-text p-3">
                                            {{ trans('sentences.pages.accueil.expertises.poles.1.list.2.title')}}
                                        </h4>

                                        <div class="card-body ">
                                            <h6 class="card-text text-justify">
                                                {{ trans('sentences.pages.accueil.expertises.poles.1.list.2.description')}}
                                            </h6>

                                            <button type="button" href="/expertises#first-section" 
                                                class="btn btn-md font-weight-bold btn-outline-primary waves-effect">
                                                {{ trans('sentences.pages.accueil.expertises.button')}}
                                                <i class="fas fa-plus-circle"></i>
                                            </button>
                                        </div>

                                    </div>

                                </div>

                            </li>

                            <li>
                                <!--Section Title -->
                                <a href="#!" class="a">
                                    <span class="circle indigo darken-1 z-depth-1-half"><i class="fas fa-credit-card"
                                        aria-hidden="true"></i></span>
                                </a>
                    
                                <!-- Section Description -->

                                <div class="row container-fluid mb-5">
                                    <div class="step-content ml-1 z-depth-1 p-0 mt-2 animate" data-animate="slideInLeft" 
                                        data-duration="1.0s" data-delay="0.1s">

                                        <h4 class="font-weight-bold timeline-header indigo darken-1 white-text p-3">
                                            {{ trans('sentences.pages.accueil.expertises.poles.1.list.3.title')}}
                                        </h4>

                                        <div class="card-body ">
                                            <h6 class="card-text text-justify">
                                                {{ trans('sentences.pages.accueil.expertises.poles.1.list.3.description')}}
                                            </h6>

                                            <button type="button" href="/expertises#first-section" 
                                                class="btn btn-md font-weight-bold btn-outline-primary waves-effect">
                                                {{ trans('sentences.pages.accueil.expertises.button')}}
                                                <i class="fas fa-plus-circle"></i>
                                            </button>
                                        </div>

                                    </div>

                                    <div class="col-md-1"></div>

                                    <div class=" img-content mt-2 col-md-5 d-flex align-items-center">
                                        <div class="row">
                                            <img src="{{asset('images/illustrations/Data_Analytics_web marketing.svg')}}"
                                            class="img-fluid col-md-6 expertie-illustration w-50 h-25"/>
                                            <div class="col-md-6"></div>
                                        </div>
                                    </div>
                                </div>

                            </li>

                        </ul>
                        <!-- Timeline Wrapper -->
                    </div>
                </div>
            </div>
            <!-- Timeline -->


            <!-- Timeline -->
            <div class="row" id="timeline-mobile">
                <div class="col-md-12">
                    <div class="timeline-main">
                        <!-- Timeline Wrapper -->
                        <ul class="stepper stepper-vertical timeline colorful-timeline pl-0">
                
                            <li>
                                <!--Section Title -->
                                <a href="#!" class="a">
                                    <span class="circle indigo darken-1 z-depth-1-half"><i class="fas fa-check"
                                        aria-hidden="true"></i></span>
                                </a>
                    
                                <!-- Section Description -->
                                <div class="step-content z-depth-1 ml-2 p-0 mt-2 animate" data-animate="slideInLeft" 
                                    data-duration="1.0s" data-delay="0.1s">
                                    <h4 class="font-weight-bold timeline-header indigo darken-1 white-text p-3">
                                        {{ trans('sentences.pages.accueil.expertises.poles.1.list.1.title')}}
                                    </h4>

                                    <div class="card-body ">
                                        <h6 class="card-text font-montserrart text-justify">
                                            {{ trans('sentences.pages.accueil.expertises.poles.1.list.1.description')}}
                                        </h6>

                                        <button type="button" href="/expertises#first-section" 
                                            class="btn btn-md font-weight-bold btn-outline-primary waves-effect">
                                            {{ trans('sentences.pages.accueil.expertises.button')}}
                                            <i class="fas fa-plus-circle"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-inverted">
                                <!--Section Title -->
                                <a href="#!" class="a">
                                    <span class="circle indigo darken-1 z-depth-1-half"><i class="fas fa-credit-card"
                                        aria-hidden="true"></i></span>
                                </a>
                    
                                <!-- Section Description -->
                                <div class="step-content z-depth-1 mr-xl-2 p-0 mt-2 animate" data-animate="slideInRight" 
                                    data-duration="1.0s" data-delay="0.1s">
                                    <h4 class="font-weight-bold timeline-header indigo darken-1 white-text p-3">
                                        {{ trans('sentences.pages.accueil.expertises.poles.1.list.2.title')}}
                                    </h4>

                                    <div class="card-body ">
                                        <h6 class="card-text text-justify">
                                            {{ trans('sentences.pages.accueil.expertises.poles.1.list.2.description')}}
                                        </h6>

                                        <button type="button" href="/expertises#first-section" 
                                            class="btn btn-md font-weight-bold btn-outline-primary waves-effect">
                                            {{ trans('sentences.pages.accueil.expertises.button')}}
                                            <i class="fas fa-plus-circle"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <!--Section Title -->
                                <a href="#!" class="a">
                                    <span class="circle indigo darken-1 z-depth-1-half"><i class="fas fa-credit-card"
                                        aria-hidden="true"></i></span>
                                </a>
                    
                                <!-- Section Description -->
                                <div class="step-content z-depth-1 ml-2 p-0 mt-2 animate" data-animate="slideInLeft" 
                                    data-duration="1.0s" data-delay="0.1s">
                                    <h4 class="font-weight-bold timeline-header indigo darken-1 white-text p-3">
                                        {{ trans('sentences.pages.accueil.expertises.poles.1.list.3.title')}}
                                    </h4>

                                    <div class="card-body ">
                                        <h6 class="card-text text-justify">
                                            {{ trans('sentences.pages.accueil.expertises.poles.1.list.3.description')}}
                                        </h6>

                                        <button type="button" href="/expertises#first-section" 
                                            class="btn btn-md font-weight-bold btn-outline-primary waves-effect">
                                            {{ trans('sentences.pages.accueil.expertises.button')}}
                                            <i class="fas fa-plus-circle"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>

                        </ul>
                        <!-- Timeline Wrapper -->
                    </div>
                </div>
            </div>
            <!-- Timeline -->


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

            <!-- Timeline -->
            <div class="row" id="timeline">
                <div class="col-md-12">
                    <div class="timeline-main">
                        <!-- Timeline Wrapper -->
                        <ul class="stepper stepper-vertical timeline colorful-timeline pl-0">
                    
                            <li>
                                <!--Section Title -->
                                <a href="#!" class="a">
                                    <span class="circle indigo darken-1 z-depth-1-half"><i class="fas fa-check"
                                        aria-hidden="true"></i></span>
                                </a>
                    
                                <!-- Section Description -->

                                <div class="row container-fluid mb-5">
                                    <div class="step-content ml-1 z-depth-1 p-0 mt-2 animate" data-animate="slideInLeft" 
                                        data-duration="1.0s" data-delay="0.1s">

                                        <h4 class="font-weight-bold timeline-header indigo darken-1 white-text p-3">
                                            {{ trans('sentences.pages.accueil.expertises.poles.2.list.1.title')}}
                                        </h4>

                                        <div class="card-body ">
                                            <h6 class="card-text font-montserrart text-justify">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed 
                                                do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                nisi ut aliquip ex ea commodo consequat.
                                            </h6>

                                            <button type="button" href="/expertises#first-section" 
                                                class="btn btn-md font-weight-bold btn-outline-primary waves-effect">
                                                {{ trans('sentences.pages.accueil.expertises.button')}}
                                                <i class="fas fa-plus-circle"></i>
                                            </button>
                                        </div>

                                    </div>

                                    <div class="col-md-1"></div>

                                    <div class=" img-content mt-2 col-md-5 d-flex align-items-center">
                                        <div class="row">
                                            <img src="{{asset('images/illustrations/Data_Analytics_web marketing.svg')}}"
                                            class="img-fluid col-md-6 expertie-illustration w-50 h-25"/>
                                            <div class="col-md-6"></div>
                                        </div>
                                    </div>
                                </div>

                            </li>

                            <li class="timeline-inverted">
                                <!--Section Title -->
                                <a href="#!" class="a">
                                    <span class="circle indigo darken-1 z-depth-1-half"><i class="fas fa-credit-card"
                                        aria-hidden="true"></i></span>
                                </a>
                    
                                <!-- Section Description -->

                                <div class="row container-fluid mb-5">

                                    <div class=" img-content mt-2 col-md-5 d-flex align-items-center">
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <img src="{{asset('images/illustrations/Data_Analytics_web marketing.svg')}}"
                                            class="img-fluid col-md-6 expertie-illustration w-50 h-25"/>
                                        </div>
                                    </div>

                                    <div class="col-md-1"></div>

                                    <div class="step-content z-depth-1 p-0 mt-2 animate" data-animate="slideInRight" 
                                        data-duration="1.0s" data-delay="0.1s">

                                        <h4 class="font-weight-bold timeline-header indigo darken-1 white-text p-3">
                                            {{ trans('sentences.pages.accueil.expertises.poles.2.list.2.title')}}
                                        </h4>

                                        <div class="card-body ">
                                            <h6 class="card-text text-justify">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed 
                                                do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                nisi ut aliquip ex ea commodo consequat.
                                            </h6>

                                            <button type="button" href="/expertises#first-section" 
                                                class="btn btn-md font-weight-bold btn-outline-primary waves-effect">
                                                {{ trans('sentences.pages.accueil.expertises.button')}}
                                                <i class="fas fa-plus-circle"></i>
                                            </button>
                                        </div>

                                    </div>

                                </div>

                            </li>

                            <li>
                                <!--Section Title -->
                                <a href="#!" class="a">
                                    <span class="circle indigo darken-1 z-depth-1-half"><i class="fas fa-credit-card"
                                        aria-hidden="true"></i></span>
                                </a>
                    
                                <!-- Section Description -->

                                <div class="row container-fluid mb-5">
                                    <div class="step-content  z-depth-1 p-0 ml-1 mt-2 animate" data-animate="slideInLeft" 
                                        data-duration="1.0s" data-delay="0.1s">

                                        <h4 class="font-weight-bold timeline-header indigo darken-1 white-text p-3">
                                            {{ trans('sentences.pages.accueil.expertises.poles.2.list.3.title')}}
                                        </h4>

                                        <div class="card-body ">
                                            <h6 class="card-text text-justify">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed 
                                                do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                nisi ut aliquip ex ea commodo consequat.
                                            </h6>

                                            <button type="button" href="/expertises#first-section" 
                                                class="btn btn-md font-weight-bold btn-outline-primary waves-effect">
                                                {{ trans('sentences.pages.accueil.expertises.button')}}
                                                <i class="fas fa-plus-circle"></i>
                                            </button>
                                        </div>

                                    </div>

                                    <div class="col-md-1"></div>

                                    <div class=" img-content mt-2 col-md-5 d-flex align-items-center">
                                        <div class="row">
                                            <img src="{{asset('images/illustrations/Data_Analytics_web marketing.svg')}}"
                                            class="img-fluid col-md-6 expertie-illustration w-50 h-25"/>
                                            <div class="col-md-6"></div>
                                        </div>
                                    </div>
                                </div>

                            </li>

                        </ul>
                        <!-- Timeline Wrapper -->
                    </div>
                </div>
            </div>
            <!-- Timeline -->

            <!-- Timeline -->
            <div class="row" id="timeline-mobile">
                <div class="col-md-12">
                    <div class="timeline-main">
                        <!-- Timeline Wrapper -->
                        <ul class="stepper stepper-vertical timeline colorful-timeline pl-0">
                
                            <li>
                                <!--Section Title -->
                                <a href="#!" class="a">
                                    <span class="circle indigo darken-1 z-depth-1-half"><i class="fas fa-check"
                                        aria-hidden="true"></i></span>
                                </a>
                    
                                <!-- Section Description -->
                                <div class="step-content z-depth-1 ml-2 p-0 mt-2 animate" data-animate="slideInLeft" 
                                    data-duration="1.0s" data-delay="0.1s">
                                    <h4 class="font-weight-bold timeline-header indigo darken-1 white-text p-3">
                                        {{ trans('sentences.pages.accueil.expertises.poles.2.list.1.title')}}
                                    </h4>

                                    <div class="card-body ">
                                        <h6 class="card-text font-montserrart text-justify">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                            sed do eiusmod tempor incididunt ut labore et dolore magna 
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </h6>

                                        <button type="button" href="/expertises#first-section" 
                                            class="btn btn-md font-weight-bold btn-outline-primary waves-effect">
                                            {{ trans('sentences.pages.accueil.expertises.button')}}
                                            <i class="fas fa-plus-circle"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-inverted">
                                <!--Section Title -->
                                <a href="#!" class="a">
                                    <span class="circle indigo darken-1 z-depth-1-half"><i class="fas fa-credit-card"
                                        aria-hidden="true"></i></span>
                                </a>
                    
                                <!-- Section Description -->
                                <div class="step-content z-depth-1 mr-xl-2 p-0 mt-2 animate" data-animate="slideInRight" 
                                    data-duration="1.0s" data-delay="0.1s">
                                    <h4 class="font-weight-bold timeline-header indigo darken-1 white-text p-3">
                                        {{ trans('sentences.pages.accueil.expertises.poles.2.list.2.title')}}
                                    </h4>

                                    <div class="card-body ">
                                        <h6 class="card-text text-justify">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                            sed do eiusmod tempor incididunt ut labore et dolore magna 
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </h6>

                                        <button type="button" href="/expertises#first-section" 
                                            class="btn btn-md font-weight-bold btn-outline-primary waves-effect">
                                            {{ trans('sentences.pages.accueil.expertises.button')}}
                                            <i class="fas fa-plus-circle"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <!--Section Title -->
                                <a href="#!" class="a">
                                    <span class="circle indigo darken-1 z-depth-1-half"><i class="fas fa-credit-card"
                                        aria-hidden="true"></i></span>
                                </a>
                    
                                <!-- Section Description -->
                                <div class="step-content z-depth-1 ml-2 p-0 mt-2 animate" data-animate="slideInLeft" 
                                    data-duration="1.0s" data-delay="0.1s">
                                    <h4 class="font-weight-bold timeline-header indigo darken-1 white-text p-3">
                                        {{ trans('sentences.pages.accueil.expertises.poles.2.list.3.title')}}
                                    </h4>

                                    <div class="card-body ">
                                        <h6 class="card-text text-justify">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                            sed do eiusmod tempor incididunt ut labore et dolore magna 
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </h6>

                                        <button type="button" href="/expertises#first-section" 
                                            class="btn btn-md font-weight-bold btn-outline-primary waves-effect">
                                            {{ trans('sentences.pages.accueil.expertises.button')}}
                                            <i class="fas fa-plus-circle"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>

                        </ul>
                        <!-- Timeline Wrapper -->
                    </div>
                </div>
            </div>
            <!-- Timeline -->


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
                <h3 class="font-weight-bold mt-5 text-center">
                    {{ trans('sentences.pages.accueil.technologies​.titre')}}​
                </h3>
                <hr class="w-header my-4">
                <p class="text-muted text-center lead pt-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>


            <!--Carousel Wrapper-->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                <!--Controls-->
                <div class="controls-top">
                    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                        class="fas fa-chevron-right"></i></a>
                </div>
                <!--/.Controls-->
            
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                    <li data-target="#multi-item-example" data-slide-to="1"></li>
                    <li data-target="#multi-item-example" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
            
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
            
                <!--First slide-->
                <div class="carousel-item active">

                    <div class="card-deck container-fluid">

                        <div class="card">
                
                            <div class="view overlay">
                                <img 
                                    src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(12).jpg" 
                                    class="card-img-top" alt="">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>

                            <div class="card-body">
                                <h4 class="card-title"><strong>Card title</strong></h4>
                                <hr>
                                <p class="card-text mb-3">
                                    Some quick example text to build on the card title
                                    and make up the bulk of the card's content.Some quick example text to build on the card title
                                    and make up the bulk of the card's content.
                                </p>
                            </div>
                            
                
                        </div>
            
                        <div class="card">
                
                            <div class="view overlay">
                                <img 
                                    src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20(3).jpg" 
                                    class="card-img-top" alt="">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            

                            <div class="card-body">
                                <h4 class="card-title"><strong>Card title</strong></h4>
                                <hr>
                                <p class="card-text mb-3">
                                    Some quick example text to build on the card title
                                    and make up the bulk of the card's content.
                                </p>
                            </div>
                
                        </div>

                        <div class="card">
                
                            <div class="view overlay">
                                <img 
                                    src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(12).jpg" 
                                    class="card-img-top" alt="">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>

                            <div class="card-body">
                                <h4 class="card-title"><strong>Card title</strong></h4>
                                <hr>
                                <p class="card-text mb-3">
                                    Some quick example text to build on the card title
                                    and make up the bulk of the card's content.
                                </p>
                            </div>
                            
                
                        </div>

                    </div>
            
                </div>
                <!--/.First slide-->
            
                <!--Second slide-->
                <div class="carousel-item">
            
                    <div class="card-deck container-fluid">

                        <div class="card">
                
                            <div class="view overlay">
                                <img 
                                    src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(12).jpg" 
                                    class="card-img-top" alt="">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>

                            <div class="card-body">
                                <h4 class="card-title"><strong>Card title</strong></h4>
                                <hr>
                                <p class="card-text mb-3">
                                    Some quick example text to build on the card title
                                    and make up the bulk of the card's content.Some quick example text to build on the card title
                                    and make up the bulk of the card's content.
                                </p>
                            </div>
                            
                
                        </div>
            
                        <div class="card">
                
                            <div class="view overlay">
                                <img 
                                    src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20(3).jpg" 
                                    class="card-img-top" alt="">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            

                            <div class="card-body">
                                <h4 class="card-title"><strong>Card title</strong></h4>
                                <hr>
                                <p class="card-text mb-3">
                                    Some quick example text to build on the card title
                                    and make up the bulk of the card's content.
                                </p>
                            </div>
                
                        </div>

                        <div class="card">
                
                            <div class="view overlay">
                                <img 
                                    src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(12).jpg" 
                                    class="card-img-top" alt="">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>

                            <div class="card-body">
                                <h4 class="card-title"><strong>Card title</strong></h4>
                                <hr>
                                <p class="card-text mb-3">
                                    Some quick example text to build on the card title
                                    and make up the bulk of the card's content.
                                </p>
                            </div>
                            
                
                        </div>

                    </div>

                </div>
                <!--/.Second slide-->
            
                <!--Third slide-->
                <div class="carousel-item">
            
                    <div class="card-deck container-fluid">

                        <div class="card">
                
                            <div class="view overlay">
                                <img 
                                    src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(12).jpg" 
                                    class="card-img-top" alt="">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>

                            <div class="card-body">
                                <h4 class="card-title"><strong>Card title</strong></h4>
                                <hr>
                                <p class="card-text mb-3">
                                    Some quick example text to build on the card title
                                    and make up the bulk of the card's content.Some quick example text to build on the card title
                                    and make up the bulk of the card's content.
                                </p>
                            </div>
                            
                
                        </div>
            
                        <div class="card">
                
                            <div class="view overlay">
                                <img 
                                    src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20(3).jpg" 
                                    class="card-img-top" alt="">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            

                            <div class="card-body">
                                <h4 class="card-title"><strong>Card title</strong></h4>
                                <hr>
                                <p class="card-text mb-3">
                                    Some quick example text to build on the card title
                                    and make up the bulk of the card's content.
                                </p>
                            </div>
                
                        </div>

                        <div class="card">
                
                            <div class="view overlay">
                                <img 
                                    src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(12).jpg" 
                                    class="card-img-top" alt="">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>

                            <div class="card-body">
                                <h4 class="card-title"><strong>Card title</strong></h4>
                                <hr>
                                <p class="card-text mb-3">
                                    Some quick example text to build on the card title
                                    and make up the bulk of the card's content.
                                </p>
                            </div>
                            
                
                        </div>

                    </div>
            
                </div>
                <!--/.Third slide-->
            
                </div>
                <!--/.Slides-->
            
            </div>
            <!--/.Carousel Wrapper-->


        </section>
    </div>
    <!-- End Section-->




    <!--Section: Témoignages-->
    <div class="container-fluid mt-5 animate" data-animate="zoomIn" data-duration="1.0s" data-delay="0.1s">

        <h3 class="font-weight-bold mt-5 text-center">{{ trans('sentences.pages.accueil.temoignages​.titre')}}</h3>
        <hr class="w-header my-4">

        <div class="container-fluid my-3 px-5 pb-3">
            <section class="text-center dark-grey-text">
                <div class="row">

                    <div class="col-md-12 mb-4">

                        <div class="wrapper-carousel-fix">

                            <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide" 
                                data-ride="carousel" data-interval="false">
                            
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
            </section>
        </div>   
        
    </div>
    <!-- End Section-->


    



 
@endsection