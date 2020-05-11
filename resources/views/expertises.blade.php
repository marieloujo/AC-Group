
@extends('template')

@section('titre')
    Nos expertises | AC GROUP
@endsection


@section('contenu')


    @section('intro-title')
        Nos expertises
    @endsection

    @section('intro-description')
        Retrouvez l'ensemble des expertises et offres de services de notre agence.<br>
        Passionnés par les expériences utilisateurs et l’innovation, nous améliorons 
        sans cesse notre savoir-faire.
    @endsection


    


<!--Section: Expertises AC Communication-->


    <div class="container-fluid pt-5 pb-4 animate" id="ac-communication" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s">

        <h3 class="font-weight-bold text-center pt-5">AC Communication</h3>
        <hr class="w-header my-4">
        <p class="text-muted lead mx-auto mb-5 col-lg-12 text-center">
            Construisons ensemble les solutions de demain. 
            Apportons une visibilité accrue à vos idées, 
            projets grâce aux meilleures stratégies de 
            communication créatives, éprouvées sur des 
            projets ambitieux.
        </p>

    </div>


    <div class="container">

        <!--First Expertise-->
        <div class="mt-5 mb-4 animate" data-animate="slideInLeft" data-duration1s"
            data-delay="0.1s" id="first-section">


            <!--Section: Content-->
            <section class="mt-5">
        
                <!-- Grid row -->
                <div class="row">
            
                    <!-- Grid column -->
                    <div class="col-lg-5 col-md-12 mb-lg-0 mb-4">
            
                        <!-- Featured image -->
                        <div class="overlay mb-lg-0 mb-4">
                            <img class="img-fluid" src="{{asset('images/illustrations/Data_Analytics_web marketing.svg')}}" alt="Sample image">
                            <a>
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
            
                    </div>
                    <!-- Grid column -->
            
                    <!-- Grid column -->
                    <div class="col-lg-7 col-md-6 mb-md-0 mb-4 mt-xl-4">
            
                        <h3 class="font-weight-bold mb-2">Data Analytics & web marketing</h3>
                        <div class="ml-1 mb-3 barre"></div>
                        <p class="text-muted text-justify">
                            Connaître votre marché et les tendances du moment.
                            Être conseillé par des experts en communication web 
                            et être épaulé par des graphistes dédiés pour votre
                            projet. De l'expression de vos besoins aux conseils 
                            permettant de mieux exprimer votre identité visuelle, 
                            GROUP vous accompagne et vous conseille sur la base 
                            d’un audit préalablement réalisé.
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
                    <div class="col-lg-7 col-md-6 mb-md-0 mb-4 mt-xl-4">
            
                        <h3 class="font-weight-bold mb-2">Référencement & SEO</h3>
                        <div class="ml-1 mb-3 barre"></div>
                        <p class="text-muted">
                            Le référencement a pour objectif d'intégrer, de
                            positionner et de maintenir votre site internet 
                            en tête des classements des moteurs de recherche
                            afin de générer le plus fort trafic.
                        </p>
                        
                
                    </div>
                    <!-- Grid column -->


                    <!-- Grid column -->
                    <div class="col-lg-5 col-md-12 mb-lg-0 mb-4">
            
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
                    <div class="col-lg-5 col-md-12 mb-lg-0 mb-4">
            
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
                    <div class="col-lg-7 col-md-6 mb-md-0 mb-4 mt-xl-4">
            
                        <h3 class="font-weight-bold mb-2">Politique de gestion financière</h3>
                        <div class="ml-1 mb-3 barre"></div>
                        <p class="text-muted">
                            Un accompagnement sur-mesure et intensif pour
                            prendre du recul sur vos finances et augmenter 
                            votre rentabilité. Nous réaliserons un diagnostic
                            financier complet de vos activités, l’édition d’un
                            plan d’action adapté pour améliorer vos performances
                            économiques.
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

        <h3 class="font-weight-bold text-center pt-5">AC Services</h3>
        <hr class="w-header my-4">
        <p class="text-muted lead mx-auto mb-5 col-lg-12 text-center">
            Modernisons vos installations électriques. Notre 
            expertise se concentre sur l’électricité simple 
            et complexe. L’installation, le suivi, des réseaux
            haute et basse tension en fonction de l’usager et
            de l’usage prévu.
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
                    <div class="col-lg-5 col-md-12 mb-lg-0 mb-4">
            
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
                    <div class="col-lg-7 col-md-6 mb-md-0 mb-4 mt-xl-4">
            
                        <h3 class="font-weight-bold mb-2">Expertise et audit technique</h3>
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
                    <div class="col-lg-7 col-md-6 mb-md-0 mb-4 mt-xl-4">
            
                        <h3 class="font-weight-bold mb-2">Assistance à maîtrise d’ouvrage ou maîtrise d’œuvre</h3>
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
                    <div class="col-lg-5 col-md-12 mb-lg-0 mb-4">
            
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
                    <div class="col-lg-5 col-md-12 mb-lg-0 mb-4">
            
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
                    <div class="col-lg-7 col-md-6 mb-md-0 mb-4 mt-xl-4">
            
                        <h3 class="font-weight-bold mb-2">Étude statique et dynamique des réseaux Haute Tension</h3>
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
                    <div class="col-lg-7 col-md-6 mb-md-0 mb-4 mt-xl-4">
            
                        <h3 class="font-weight-bold mb-2">
                            Plan de protection et note de calculs des 
                            réseaux Haute Tension et Basse Tension
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
                    <div class="col-lg-5 col-md-12 mb-lg-0 mb-4">
            
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
                    <div class="col-lg-5 col-md-12 mb-lg-0 mb-4">
            
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
                    <div class="col-lg-7 col-md-6 mb-md-0 mb-4 mt-xl-4">
            
                        <h3 class="font-weight-bold mb-2">Rétrofit des équipements électriques Haute et Basse Tension</h3>
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
                    <div class="col-lg-7 col-md-6 mb-md-0 mb-4 mt-xl-4">
            
                        <h3 class="font-weight-bold mb-2">
                            Étude d’exécution des installations électriques
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
                    <div class="col-lg-5 col-md-12 mb-lg-0 mb-4">
            
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
                    <div class="col-lg-5 col-md-12 mb-lg-0 mb-4">
            
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
                    <div class="col-lg-7 col-md-6 mb-md-0 mb-4 mt-xl-4">
            
                        <h3 class="font-weight-bold mb-2">Étude éclairage extérieur, intérieur et architectural</h3>
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