
@extends('template')

@section('titre')
    {{ trans('sentences.pages.expertise.titre')}}
@endsection


@section('contenu')


    @section('intro-title')
        {{ trans('sentences.pages.expertise.intro.title')}}
    @endsection

    @section('intro-description')
        {{ trans('sentences.pages.expertise.intro.description')}}
    @endsection


    @section('button-title')
        {{ trans('sentences.pages.accueil.intro.button')}} 
    @endsection


    


<!--Section: Expertises AC Communication-->


    <div class="container-fluid pt-5 pb-4 animate" id="ac-communication" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s">

        <h3 class="font-weight-bold text-center pt-5">
            {{-- trans('sentences.pages.accueil.expertises.poles.1.title')--}}</h3>

        <div class="col-md-12 d-flex justify-content-center">
            <img src="{{asset('images/logo/AC-Communication.jpg')}}" 
                class="img-fluid" style="height: 130px;" alt="">
        </div>

        <hr class="w-header my-4">
        <p class="text-muted lead mx-auto mb-5 col-lg-12 text-center">
            {{ trans('sentences.pages.accueil.expertises.poles.1.description')}}
        </p>

    </div>


    <div class="container">

        <!--First Expertise-->
        <div class="mt-5 mb-4 animate" data-animate="slideInLeft" data-duration="1.3s"
            data-delay="0.1s" id="first-section">


            <!--Section: Content-->
            <section class="mt-5">

                <!-- Grid row -->
                <div class="row">
            
                    <!-- Grid column -->
                    <div class="col-lg-5 col-md-8 mb-lg-0 mb-4" id="timeline">
            
                        <!-- Featured image -->
                        <div class="overlay">
                            <img class="img-fluid" 
                                src="{{asset('images/illustrations/Data_Analytics_web marketing.svg')}}" 
                                alt="Sample image" />
                        </div>
            
                    </div>
                    <!-- Grid column -->
            
                    <!-- Grid column -->
                    <div class="col-lg-7 col-md-12 mb-md-0 mb-4 mt-xl-4">
            
                        <h3 class="font-weight-bold mb-2">
                            {{ trans('sentences.pages.accueil.expertises.poles.1.list.1.title')}}</h3>
                        <div class="ml-1 mb-3 barre"></div>
                        <p class="text-muted text-justify">
                            {{ trans('sentences.pages.accueil.expertises.poles.1.list.1.description')}}
                        </p>
                        
                    </div>
                    <!-- Grid column -->
            
                </div>
                <!-- Grid row -->
        
            </section>
            <!--Section: Content-->
        
        
        </div>
        <!--First Expertise-->


        <!--Second Expertise-->
        <div class="mt-5 mb-4 animate" data-animate="slideInRight" data-duration="1.3s" 
            data-delay="0.1s" id="second-section">


            <!--Section: Content-->
            <section class="">
        
                <!-- Grid row -->
                <div class="row">
            
                    
                    <!-- Grid column -->
                    <div class="col-lg-7 col-md-12 mb-md-0 mb-4 mt-xl-4">
            
                        <h3 class="font-weight-bold mb-2">
                            {{ trans('sentences.pages.accueil.expertises.poles.1.list.2.title')}}</h3>
                        <div class="ml-1 mb-3 barre"></div>
                        <p class="text-muted">
                            {{ trans('sentences.pages.accueil.expertises.poles.1.list.2.description')}}
                        </p>
                        
                
                    </div>
                    <!-- Grid column -->


                    <!-- Grid column -->
                    <div class="col-lg-5 col-md-12 mb-lg-0 mb-4" id="timeline">
            
                        <!-- Featured image -->
                        <div class=" overlay mb-lg-0 mb-4">
                            <img class="img-fluid" src="{{asset('images/illustrations/seo.svg')}}" alt="Sample image">
                            <a>
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
            
                    </div>
                    <!-- Grid column -->

            
                </div>
                <!-- Grid row -->
        
            </section>
            <!--Section: Content-->
        
        
        </div>
        <!--Second Expertise-->


        <!--Thrid Expertise-->
        <div class="mt-5 mb-4 animate" data-animate="fadeInLeft" data-duration="1.3s" 
            data-delay="0.1s" id="third-section">


            <!--Section: Content-->
            <section class="">
        
                <!-- Grid row -->
                <div class="row">
            
                    <!-- Grid column -->
                    <div class="col-lg-5  col-md-12 mb-lg-0 mb-4" id="timeline">
            
                        <!-- Featured image -->
                        <div class=" overlay mb-lg-0 mb-4">
                            <img class="img-fluid" src="{{asset('images/illustrations/gestion_financiere.svg')}}" alt="Sample image">
                            <a>
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
            
                    </div>
                    <!-- Grid column -->
            
                    <!-- Grid column -->
                    <div class="col-lg-7 col-md-12 mb-md-0 mb-4 mt-xl-4">
            
                        <h3 class="font-weight-bold mb-2">
                            {{ trans('sentences.pages.accueil.expertises.poles.1.list.3.title')}}</h3>
                        <div class="ml-1 mb-3 barre"></div>
                        <p class="text-muted">
                            {{ trans('sentences.pages.accueil.expertises.poles.1.list.3.description')}}
                        </p>
                        
                
                    </div>
                    <!-- Grid column -->
            
                </div>
                <!-- Grid row -->
        
            </section>
            <!--Section: Content-->
        
        
        </div>
        <!--Thrid Expertise-->

    </div>


<!--Section: Expertises AC Communication-->




<!--Section: Expertises AC Services-->


    <div class="pt-5 pb-4 animate" id="ac-services" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s">

        <h3 class="font-weight-bold text-center pt-5">
            {{-- trans('sentences.pages.accueil.expertises.poles.2.title')--}}</h3>

        <div class="col-md-12 d-flex justify-content-center">
            <img src="{{asset('images/logo/AC-Service.jpg')}}" 
                class="img-fluid" style="height: 130px;" alt="">
        </div>


        <hr class="w-header my-4">
        <p class="text-muted lead mx-auto mb-5 col-lg-12 text-center">
            {{ trans('sentences.pages.accueil.expertises.poles.2.description')}}
        </p>

    </div>


    <div class="container">


        <!--Five Expertise-->
        <div class="mt-5 mb-4 animate" data-animate="slideInLeft" data-duration="1.3s" data-delay="0.1s">


            <!--Section: Content-->
            <section class="">
        
                <!-- Grid row -->
                <div class="row">
            
                    <!-- Grid column -->
                    <div class="col-lg-5 col-md-12 mb-lg-0 mb-4" id="timeline">
            
                        <!-- Featured image -->
                        <div class=" overlay rounded z-depth-1 mb-lg-0 mb-4">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/88.jpg" alt="Sample image">
                            <a>
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
            
                    </div>
                    <!-- Grid column -->
            
                    <!-- Grid column -->
                    <div class="col-lg-7 col-md-12 mb-md-0 mb-4 mt-xl-4">
            
                        <h3 class="font-weight-bold mb-2">
                            {{ trans('sentences.pages.accueil.expertises.poles.2.list.1.title')}}</h3>
                        <div class="ml-1 mb-3 barre"></div>
                        <p class="text-muted">
                            Option as can distributors. And to suppliers, given a copy the horrible
                            arrange yes, we had hundreds leave was more which a I the king's had the
                            so soon throughout in necessary which at way did phase a young written,
                            descriptions, late uninspired, to times owner themselves them. Get sported
                            uninspired, the a box to an to but on been the succeed have couldn't set.
                        </p>
                        
                
                    </div>
                    <!-- Grid column -->
            
                </div>
                <!-- Grid row -->
        
            </section>
            <!--Section: Content-->
        
        
        </div>
        <!--Five Expertise-->


        <!--Four Expertise-->
        <div class="mt-5 mb-4 animate" data-animate="slideInRight" data-duration="1.3s" data-delay="0.1s">


            <!--Section: Content-->
            <section class="">
        
                <!-- Grid row -->
                <div class="row">
            
                    
                    <!-- Grid column -->
                    <div class="col-lg-7 col-md-12 mb-md-0 mb-4 mt-xl-4">
            
                        <h3 class="font-weight-bold mb-2">
                            {{ trans('sentences.pages.accueil.expertises.poles.2.list.2.title')}}</h3>
                        <div class="ml-1 mb-3 barre"></div>
                        <p class="text-muted">
                            Option as can distributors. And to suppliers, given a copy the horrible
                            arrange yes, we had hundreds leave was more which a I the king's had the
                            so soon throughout in necessary which at way did phase a young written,
                            descriptions, late uninspired, to times owner themselves them. Get sported
                            uninspired, the a box to an to but on been the succeed have couldn't set.
                        </p>
                        
                
                    </div>
                    <!-- Grid column -->


                    <!-- Grid column -->
                    <div class="col-lg-5  col-md-8 mb-lg-0 mb-4" id="timeline">
            
                        <!-- Featured image -->
                        <div class=" overlay rounded z-depth-1 mb-lg-0 mb-4">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/project4.jpg" alt="Sample image">
                            <a>
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
            
                    </div>
                    <!-- Grid column -->

            
                </div>
                <!-- Grid row -->
        
            </section>
            <!--Section: Content-->
        
        
        </div>
        <!--Four Expertise-->


        <!--Five Expertise-->
        <div class="mt-5 mb-4 animate" data-animate="slideInLeft" data-duration="1.3s" data-delay="0.1s">


            <!--Section: Content-->
            <section class="">
        
                <!-- Grid row -->
                <div class="row">
            
                    <!-- Grid column -->
                    <div class="col-lg-5  col-md-8 mb-lg-0 mb-4">
            
                        <!-- Featured image -->
                        <div class=" overlay mb-lg-0 mb-4" id="timeline">
                            <img class="img-fluid" src="{{asset('images/illustrations/maitrise_ouvrage_maitrise_œuvre.svg')}}" alt="Sample image">
                            <a>
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
            
                    </div>
                    <!-- Grid column -->
            
                    <!-- Grid column -->
                    <div class="col-lg-7 col-md-12 mb-md-0 mb-4 mt-xl-4">
            
                        <h3 class="font-weight-bold mb-2">
                            {{ trans('sentences.pages.accueil.expertises.poles.2.list.3.title')}}</h3>
                        <div class="ml-1 mb-3 barre"></div>
                        <p class="text-muted">
                            Option as can distributors. And to suppliers, given a copy the horrible
                            arrange yes, we had hundreds leave was more which a I the king's had the
                            so soon throughout in necessary which at way did phase a young written,
                            descriptions, late uninspired, to times owner themselves them. Get sported
                            uninspired, the a box to an to but on been the succeed have couldn't set.
                        </p>
                        
                
                    </div>
                    <!-- Grid column -->
            
                </div>
                <!-- Grid row -->
        
            </section>
            <!--Section: Content-->
        
        
        </div>
        <!--Five Expertise-->


        <!--Four Expertise-->
        <div class="mt-5 mb-4 animate" data-animate="slideInRight" data-duration="1.3s" data-delay="0.1s">


            <!--Section: Content-->
            <section class="">
        
                <!-- Grid row -->
                <div class="row">
            
                    
                    <!-- Grid column -->
                    <div class="col-lg-7 col-md-12 mb-md-0 mb-4 mt-xl-4">
            
                        <h3 class="font-weight-bold mb-2">
                            {{ trans('sentences.pages.accueil.expertises.poles.2.list.4.title')}}
                        </h3>
                        <div class="ml-1 mb-3 barre"></div>
                        <p class="text-muted">
                            Option as can distributors. And to suppliers, given a copy the horrible
                            arrange yes, we had hundreds leave was more which a I the king's had the
                            so soon throughout in necessary which at way did phase a young written,
                            descriptions, late uninspired, to times owner themselves them. Get sported
                            uninspired, the a box to an to but on been the succeed have couldn't set.
                        </p>
                        
                
                    </div>
                    <!-- Grid column -->


                    <!-- Grid column -->
                    <div class="col-lg-5  col-md-8 mb-lg-0 mb-4" id="timeline">
            
                        <!-- Featured image -->
                        <div class=" overlay rounded z-depth-1 mb-lg-0 mb-4">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/project4.jpg" alt="Sample image">
                            <a>
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
            
                    </div>
                    <!-- Grid column -->

            
                </div>
                <!-- Grid row -->
        
            </section>
            <!--Section: Content-->
        
        
        </div>
        <!--Four Expertise-->


        <!--Five Expertise-->
        <div class="mt-5 mb-4 animate" data-animate="slideInLeft" data-duration="1.3s" data-delay="0.1s">


            <!--Section: Content-->
            <section class="">
        
                <!-- Grid row -->
                <div class="row">
            
                    <!-- Grid column -->
                    <div class="col-lg-5  col-md-8 mb-lg-0 mb-4" id="timeline">
            
                        <!-- Featured image -->
                        <div class=" overlay rounded z-depth-1 mb-lg-0 mb-4">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/88.jpg" alt="Sample image">
                            <a>
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
            
                    </div>
                    <!-- Grid column -->
            
                    <!-- Grid column -->
                    <div class="col-lg-7 col-md-12 mb-md-0 mb-4 mt-xl-4">
            
                        <h3 class="font-weight-bold mb-2">
                            {{ trans('sentences.pages.accueil.expertises.poles.2.list.5.title')}}</h3>
                        <div class="ml-1 mb-3 barre"></div>
                        <p class="text-muted">
                            Option as can distributors. And to suppliers, given a copy the horrible
                            arrange yes, we had hundreds leave was more which a I the king's had the
                            so soon throughout in necessary which at way did phase a young written,
                            descriptions, late uninspired, to times owner themselves them. Get sported
                            uninspired, the a box to an to but on been the succeed have couldn't set.
                        </p>
                        
                
                    </div>
                    <!-- Grid column -->
            
                </div>
                <!-- Grid row -->
        
            </section>
            <!--Section: Content-->
        
        
        </div>
        <!--Five Expertise-->


        <!--Four Expertise-->
        <div class="mt-5 mb-4 animate" data-animate="slideInRight" data-duration="1.3s" data-delay="0.1s">


            <!--Section: Content-->
            <section class="">
        
                <!-- Grid row -->
                <div class="row">
            
                    
                    <!-- Grid column -->
                    <div class="col-lg-7 col-md-12 mb-md-0 mb-4 mt-xl-4">
            
                        <h3 class="font-weight-bold mb-2">
                            {{ trans('sentences.pages.accueil.expertises.poles.2.list.6.title')}}
                        </h3>
                        <div class="ml-1 mb-3 barre"></div>
                        <p class="text-muted">
                            Option as can distributors. And to suppliers, given a copy the horrible
                            arrange yes, we had hundreds leave was more which a I the king's had the
                            so soon throughout in necessary which at way did phase a young written,
                            descriptions, late uninspired, to times owner themselves them. Get sported
                            uninspired, the a box to an to but on been the succeed have couldn't set.
                        </p>
                        
                
                    </div>
                    <!-- Grid column -->


                    <!-- Grid column -->
                    <div class="col-lg-5  col-md-8 mb-lg-0 mb-4" id="timeline">
            
                        <!-- Featured image -->
                        <div class=" overlay rounded z-depth-1 mb-lg-0 mb-4">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/project4.jpg" alt="Sample image">
                            <a>
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
            
                    </div>
                    <!-- Grid column -->

            
                </div>
                <!-- Grid row -->
        
            </section>
            <!--Section: Content-->
        
        
        </div>
        <!--Four Expertise-->


        <!--Five Expertise-->
        <div class="mt-5 mb-5 animate" data-animate="slideInLeft" data-duration="1.3s" data-delay="0.1s">


            <!--Section: Content-->
            <section class="">
        
                <!-- Grid row -->
                <div class="row">
            
                    <!-- Grid column -->
                    <div class="col-lg-5  col-md-8 mb-lg-0 mb-4" id="timeline">
            
                        <!-- Featured image -->
                        <div class=" overlay mb-lg-0 mb-4">
                            <img class="img-fluid" src="{{asset('images/illustrations/etude_eclairage_extérieur_ intérieur_architectural.svg')}}" alt="Sample image">
                            <a>
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
            
                    </div>
                    <!-- Grid column -->
            
                    <!-- Grid column -->
                    <div class="col-lg-7 col-md-12 mb-md-0 mb-4 mt-xl-4">
            
                        <h3 class="font-weight-bold mb-2">
                            {{ trans('sentences.pages.accueil.expertises.poles.2.list.7.title')}}
                        </h3>
                        <div class="ml-1 mb-3 barre"></div>
                        <p class="text-muted">
                            Option as can distributors. And to suppliers, given a copy the horrible
                            arrange yes, we had hundreds leave was more which a I the king's had the
                            so soon throughout in necessary which at way did phase a young written,
                            descriptions, late uninspired, to times owner themselves them. Get sported
                            uninspired, the a box to an to but on been the succeed have couldn't set.
                        </p>
                        
                
                    </div>
                    <!-- Grid column -->
            
                </div>
                <!-- Grid row -->
        
            </section>
            <!--Section: Content-->
        
        
        </div>
        <!--Five Expertise-->

    </div>

<!--Section: Expertises AC Services-->


 
@endsection