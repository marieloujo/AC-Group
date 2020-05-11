
@extends('template')

@section('titre')
    Accueil | AC GROUP
@endsection


@section('contenu')


    @section('intro-title')
        AC GROUP
    @endsection

    @section('intro-description')
        Nous accompagnons nos clients dans la création de leur identité numérique
        et également la gestion financière.
    @endsection


    <!--Section: Présentation-->
    <div class="container-fluid mb-5 animate" data-animate="zoomIn" data-duration="1.0s" data-delay="0.1s"  id="presentation" >

        <!--Section: Content-->
        <section class="dark-grey-text">
    
            <div class="row pr-lg-5">
                
                <div class="col-md-7 animated " id="presentation-illustration">
                    <div class="">
                        <img src="https://mdbootstrap.com/img/illustrations/graphics(4).png" class="img-fluid" alt="smaple image">
                    </div>
                </div>

                <div class="col-md-5 d-flex align-items-center" id="presentation-texte">
                    <div>
                        
                        <h3 class="font-weight-bold mb-4">INNOVATION ET UTILITÉ</h3>
            
                        <p class="text-justify">
                            Nous accompagnons nos clients dans la création de leur identité numérique
                            et également la gestion financière. AC Communication répond à tous vos
                            besoins et est en mesure d'élaborer une véritable stratégie de communication
                            digitale. Notre pôle d’ingénierie électrique AC Services intervient dans 
                            l’installation, la maintenance, la rénovation et l’extension de votre réseau
                            électrique. Nous œuvrons aussi dans le domaine des énergies renouvelables à
                            travers la mise en place des installations solaires photovoltaïques.
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

        <h3 class="font-weight-bold text-center">Nos services</h3>
        <hr class="w-header my-4">
        <p class="text-muted lead mx-auto mb-5 col-lg-12 text-center">
            Nous sommes une structure organisée en deux pôles: AC Communication intervenant dans le
            webmarketing, les stratégies de communication, de gestion financière et AC Services spécialisé
            dans l’ingénierie électrique.
        </p>

    </div>


    <div class="container-fluid mb-5 pt-3  my-5 px-4 px-lg-0" >

        <section class="p-md-3 mx-md-5 mb-4" id="expertises-communication">

            <div class="container text-center pb-4 animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s">
                <h5 class="font-weight-bold mb-2">AC Communication</h5>
    
                <p class="text-muted text-center pt-2">
                    Construisons ensemble les solutions de demain. Apportons une visibilité accrue à vos idées, projets 
                    grâce aux meilleures stratégies de communication créatives, éprouvées sur des projets ambitieux.
                </p>
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
                                                Data Analytics & web marketing
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text text-justify">
                                                Connaître votre marché et les tendances du moment. Être conseillé par des
                                                experts en communication web et être épaulé par des graphistes dédiés pour
                                                votre projet. De l'expression de vos besoins aux conseils permettant de mieux
                                                exprimer votre identité visuelle, GROUP vous accompagne et vous conseille
                                                sur la base d’un audit préalablement réalisé.
                                            </p>
                                            <a class="blue-text font-weight-bold" href="/expertises#first-section">En savoir plus
                                                <i class="fas fa-plus-circle"></i>
                                            </a> 
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-md-6 col-lg-4 animate">
                                    <div class="overlay">
                                        <img src="{{asset('images/illustrations/Data_Analytics_web marketing.svg')}}" class="img-fluid"
                                        alt="Sample project image" />
                                        <a href="#">
                                        </a>
                                    </div>
                                </div>
            
                            </div>
                        </li>
            
                        <li class="timeline-element">
                            <div class="row mb-5 d-flex align-items-center contenjustify-t-end">
                            
                                <div class="col-md-6 col-lg-4 animate">
                                    <div class="overlay">
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
                                                Référencement & SEO
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text text-justify">
                                                Le référencement a pour objectif d'intégrer, de positionner et de maintenir
                                                votre site internet en tête des classements des moteurs de recherche afin de
                                                générer le plus fort trafic.
                                            </p>
                                            <a class="blue-text font-weight-bold" href="/expertises#second-section">En savoir plus
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
                                                Politique de gestion financière
                                            </h5>
                                        </div>
                                        <div class="card-body ">
                                            <p class="card-text text-justify">
                                                Un accompagnement sur-mesure et intensif pour prendre du recul sur vos
                                                finances et augmenter votre rentabilité. Nous réaliserons un diagnostic
                                                financier complet de vos activités, l’édition d’un plan d’action adapté pour
                                                améliorer vos performances économiques.
                                            </p>
                                            <a class="blue-text font-weight-bold" href="/expertises#thrid-section">En savoir plus
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
                    <button type="button" class="btn btn-outline-warning waves-effect">Lire plus ...</button>
                </a>
            </div>

        </section>


        <section class="p-md-3 mx-md-5 mt-5" id="expertises-services">

            <div class="container text-center pb-4 animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s">
                <h5 class="font-weight-bold mb-2">AC Services</h5>
    
                <p class="text-muted text-center pt-2">
                    Modernisons vos installations électriques. Notre expertise se concentre sur
                    l’électricité simple et complexe. L’installation, le suivi, des réseaux haute et
                    basse tension en fonction de l’usager et de l’usage prévu.
                </p>
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
                                                Expertise et audit technique
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text text-justify">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>
                                            <a class="blue-text font-weight-bold" href="/expertises#first-section">En savoir plus
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
                                                Assistance à maîtrise d’ouvrage ou maîtrise d’œuvre
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text text-justify">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>
                                            <a class="blue-text font-weight-bold" href="/expertises#second-section">En savoir plus
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
                                                Étude statique et dynamique des réseaux Haute Tension
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text text-justify">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>
                                            <a class="blue-text font-weight-bold" href="/expertises#thrid-section">En savoir plus
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
                    <button type="button" class="btn btn-outline-warning waves-effect">Lire plus ...</button>
                </a>
            </div>

        </section>

    </div>
    <!-- End Section-->



    <!--Section: Technologies-->
    <div class="container-fluid mt-5  my-5">

        

        <section class="p-md-3 mx-md-5">

            <div class="animate" data-animate="zoomIn" data-duration="1.0s" data-delay="0.1s">
                <h3 class="font-weight-bold mt-5 text-center">Nos Technologies​</h3>
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

        <h3 class="font-weight-bold mt-5 text-center">Témoignage</h3>
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