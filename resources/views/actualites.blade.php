
@extends('template')

@section('titre')
    {{$titlePage}}
@endsection


@section('contenu')


<!--Section: Formations-->
<div class="container-fluid my-5 py-5 px-4 px-lg-0">

    <!-- Section -->
    <section>
      
        <!-- Style à ne pas déplacer  -->
        <style>
            .timeline {
            position: relative;
            list-style: none;
            padding: 1rem 0;
            margin: 0;
            }
    
            .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            margin-left: -1px;
            background-color: #50a1ff;
            }
    
            .timeline-element {
            position: relative;
            width: 50%;
            padding: 1rem 0;
            padding-right: 2.5rem;
            text-align: right;
            }
    
            .timeline-element::before {
            content: '';
            position: absolute;
            right: -8px;
            top: 1.35rem;
            display: inline-block;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            border: 2px solid #50a1ff;
            background-color: #fff;
            }
    
            .timeline-element:nth-child(even)::before {
            right: auto;
            left: -8px;
            }
    
            .timeline-element:nth-child(even) {
            margin-left: 50%;
            padding-left: 2.5rem;
            padding-right: 0;
            text-align: left;
            }
    
            @media (max-width: 767.98px) {
            .timeline::before {
                left: 8px;
            }
            }
    
            @media (max-width: 767.98px) {
            .timeline-element {
                width: 100%;
                text-align: left;
                padding-left: 2.5rem;
                padding-right: 0;
            }
            }
    
            @media (max-width: 767.98px) {
            .timeline-element::before {
                top: 1.25rem;
                left: 1px;
            }
            }
    
            @media (max-width: 767.98px) {
            .timeline-element:nth-child(even) {
                margin-left: 0rem;
            }
            }
    
            @media (max-width: 767.98px) {
            .timeline-element {
                width: 100%;
                text-align: left;
                padding-left: 2.5rem;
                padding-right: 0;
            }
            }
    
            @media (max-width: 767.98px) {
            .timeline-element:nth-child(even)::before {
                left: 1px;
            }
            }
    
            @media (max-width: 767.98px) {
            .timeline-element::before {
                top: 1.25rem;
            }
            }
        </style>
        <!-- Style -->

        <div class="container-fluid" data-animate-scroll='{"y":"50", "duration": "0.75","scaleX": "0","scaleY": "0"}'>

            <h3 class="font-weight-bold mt-5 text-center">Nos formations</h3>
            <hr class="w-header my-4">
            <p class="lead text-muted mx-auto mb-5 col-md-11 text-center">
                Nous formons aux différentes technologies web. <br>  Vous êtes motivé(e), 
                passionné(e) des TIC et souhaitez apprendre à créer une application
                / un site web en partant de zéro ?        
            </p>

    
        </div>
    
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <ol class="timeline">
                    
                    <li class="timeline-element" data-animate-scroll='{"x": "-100","y": "0", "alpha": "0", "duration": "1.0"}'>
                        <h5 class="font-weight-bold dark-grey-text mb-3">HTML5-CSS3 & SASS</h5>
                        <p class="grey-text font-small"><time datetime="2017-02-08">08 Feb 2017</time></p>
                        <p><img class="img-fluid z-depth-1-half rounded" 
                                src="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(6).jpg"
                                 alt="...">
                        </p>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Assumenda ullam adipisci reiciendis porro natus laudantium similique. 
                            Explicabo amet ipsum fugiat aliquam alias.</p>
                    </li>
        
                    <li class="timeline-element" data-animate-scroll='{"x": "300","y": "0", "alpha": "0", "duration": "1.0"}'>
                        <h5 class="font-weight-bold dark-grey-text mb-3">JAVASCRIPT-JQUERY</h5>
                        <p class="grey-text font-small"><time datetime="2017-08-17">17 Aug 2017</time></p>
                        <p>
                            <img class="img-fluid z-depth-1-half rounded" 
                            src="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(6).jpg" alt="...">
                        </p>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Assumenda ullam adipisci reiciendis porro natus laudantium similique. 
                            Explicabo amet ipsum fugiat aliquam alias.</p>
                    </li>
        
                    <li class="timeline-element" data-animate-scroll='{"x": "-100","y": "0", "alpha": "0", "duration": "1.0"}'>
                        <h5 class="font-weight-bold dark-grey-text mb-3">Bootstrap4</h5>
                        <p class="grey-text font-small"><time datetime="2018-03-26">26 Mar 2019</time></p>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Assumenda ullam adipisci reiciendis porro natus laudantium similique. 
                            Explicabo amet ipsum fugiat aliquam alias.</p>
                    </li>
        
                    <li class="timeline-element" data-animate-scroll='{"x": "300","y": "0", "alpha": "0", "duration": "1.0"}'>
                        <h5 class="font-weight-bold dark-grey-text mb-3">PHP & POO</h5>
                        <p class="grey-text font-small"><time datetime="2018-04-14">14 Apr 2019</time></p>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Assumenda ullam adipisci reiciendis porro natus laudantium similique. 
                            Explicabo amet ipsum fugiat aliquam alias.</p>
                    </li>

                </ol>
            </div>
        </div>
      
    </section>
    <!-- Section -->
    
</div>
<!-- End Section-->



<!--Section: Réalisations-->
<div class="container my-5">

    <!-- Section -->
    <section>
      
        <!-- Modal -->
        <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        
                        <!-- Grid row -->
                        <div class="row">
                        
                            <!-- Grid column -->
                            <div class="col-md-6 py-5 pl-5">
                                
                                <h5 class="font-weight-normal mb-3">Paper cup mockup</h5>

                                <p class="text-muted">Key letters, explain which writing we he carpeting or fame, the itch expand medical amped through constructing time. And scarfs, gain, get showed accounts decades.</p>

                                <ul class="list-unstyled font-small mt-5">
                                    <li>
                                        <p class="text-uppercase mb-2"><strong>Client</strong></p>
                                        <p class="text-muted mb-4">Envato Inc.</p>
                                    </li>

                                    <li>
                                        <p class="text-uppercase mb-2"><strong>Date</strong></p>
                                        <p class="text-muted mb-4">June 27, 2019</p>
                                    </li>

                                    <li>
                                        <p class="text-uppercase mb-2"><strong>Skills</strong></p>
                                        <p class="text-muted mb-4">Design, HTML, CSS, Javascript</p>
                                    </li>

                                    <li>
                                        <p class="text-uppercase mb-2"><strong>Address</strong></p>
                                        <a href="https://mdbootstrap.com/docs/jquery/design-blocks/">MDBootstrap</a>
                                    </li>
                                </ul>
                                
                            </div>
                            <!-- Grid column -->
                        
                            <!-- Grid column -->
                            <div class="col-md-6">
                                
                                <div class="view rounded-right">
                                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/5.jpg" alt="Sample image">
                                </div>

                            </div>
                            <!-- Grid column -->
                        
                        </div>
                        <!-- Grid row -->
                        
                    </div>
                </div>
            </div>
        </div>
  
        <div data-animate-scroll='{"y":"50", "duration": "0.75","scaleX": "0","scaleY": "0"}'>
            <h3 class="font-weight-bold text-center dark-grey-text pb-2">Nos réalisations</h3>
            <hr class="w-header my-4">
            <p class="lead text-center text-muted pt-2 mb-5">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit deleniti consequuntur nihil.
            </p>
        </div>
  
        <!-- Grid row -->
        <div class="row">
    
            <!-- Grid column -->
            <div class="col-md-12 dark-grey-text d-flex justify-content-center mb-5">
    
                <button type="button" class="btn btn-flat btn-lg m-0 px-3 py-1 filter" data-rel="all">All</button>
                <p class="font-weight-bold mb-0 px-1 py-1">/</p>
                <button type="button" class="btn btn-flat btn-lg m-0 px-3 py-1 filter" data-rel="1">Design</button>
                <p class="font-weight-bold mb-0 px-1 py-1">/</p>
                <button type="button" class="btn btn-flat btn-lg m-0 px-3 py-1 filter" data-rel="2">Mockup</button>
    
            </div>
            <!-- Grid column -->
    
        </div>
        <!-- Grid row -->
    
        <!-- Grid row -->
        <div class="gallery mb-5" id="gallery">
    
            <!-- Grid column -->
            <div class="mb-3 pics all 2 animation">
                <a data-toggle="modal" data-target="#basicExampleModal">
                    <img class="img-fluid z-depth-1 rounded" 
                        src="https://mdbootstrap.com/img/Photos/Others/images/58.jpg" alt="Card image cap">
                </a>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="mb-3 pics animation all 1">
                <a data-toggle="modal" data-target="#basicExampleModal">
                    <img class="img-fluid z-depth-1 rounded" 
                        src="https://mdbootstrap.com/img/Photos/Vertical/7.jpg" alt="Card image cap">
                </a>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="mb-3 pics animation all 1">
                <a data-toggle="modal" data-target="#basicExampleModal">
                    <img class="img-fluid z-depth-1 rounded" 
                        src="https://mdbootstrap.com/img/Photos/Vertical/4.jpg" alt="Card image cap">
                </a>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="mb-3 pics all 2 animation">
                <a data-toggle="modal" data-target="#basicExampleModal">
                    <img class="img-fluid z-depth-1 rounded" 
                        src="https://mdbootstrap.com/img/Photos/Others/images/63.jpg" alt="Card image cap">
                </a>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="mb-3 pics all 2 animation">
                <a data-toggle="modal" data-target="#basicExampleModal">
                    <img class="img-fluid z-depth-1 rounded" 
                        src="https://mdbootstrap.com/img/Photos/Others/images/64.jpg" alt="Card image cap">
                </a>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="mb-3 pics animation all 1">
                <a data-toggle="modal" data-target="#basicExampleModal">
                    <img class="img-fluid z-depth-1 rounded" 
                        src="https://mdbootstrap.com/img/Photos/Vertical/5.jpg" alt="Card image cap">
                </a>
            </div>
            <!-- Grid column -->
    
        </div>
        <!-- Grid row -->
  
    </section>
    <!-- Section -->
  
</div>
<!-- End Section-->



 
@endsection