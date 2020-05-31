

@extends('template')

@section('titre')
    {{ trans('sentences.pages.faq.titre')}}
@endsection


@section('contenu')




    <!--Section: FAQ-->
    <div class="container-fluid pt-5 pb-4 my-5 animate" data-animate="zoomIn" data-duration="1.0s" data-delay="0.1s">


        <!--Section: Content-->
        <section class="pt-5">

            <h6 class="font-weight-normal text-center text-uppercase font-small grey-text mb-4">FAQ</h6>

            <h3 class="font-weight-bold black-text mb-4 pb-2 text-center">
                {{ trans('sentences.pages.faq.faq.titre')}}</h3>
            <hr class="w-header">
            <!-- Section description -->
            <section class="dark-grey-text container mb-5 mt-5">

                <div class="row pr-lg-5 pb-3">
                    
                    <div class="col-md-8 d-flex align-items-center">
                        <div>
                            <p class="text-center mx-auto lead">
                                {{ trans('sentences.pages.faq.faq.description')}}
                            </p>
                        </div>
                    </div>
        
                    <div class="col-md-4 animated d-flex justify-content-center">
                        <img src="{{asset('images/illustrations/faq.svg')}}" style="height: 200px;"
                            class="img-fluid" alt="smaple image">
                    </div>
        
                </div>
        
            </section>
    

        
            <div class="container mx-auto mb-5">
            
                <!--Accordion wrapper-->
                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
        
                    <!-- Accordion card -->
                    <div class="card border-top border-bottom-0 border-left border-right border-light">
        
                        <!-- Card header -->
                        <div class="card-header border-bottom border-light" role="tab" id="headingOne1">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                                aria-controls="collapseOne1">
                                <h5 class="black-text font-weight-normal mb-0">
                                    Is this a secure site for purchases? <i class="fas fa-angle-down float-right rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
            
                        <!-- Card body -->
                        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                            data-parent="#accordionEx">
                            <div class="card-body">
                            Absolutely! We work with top payment companies which guarantees your safety and security. All billing information is stored on our payment processing partner which has the most stringent level of certification available in the payments industry.
                            </div>
                        </div>
        
                    </div>
                    <!-- Accordion card -->
        
                    <!-- Accordion card -->
                    <div class="card border-bottom-0 border-left border-right border-light">
        
                        <!-- Card header -->
                        <div class="card-header border-bottom border-light" role="tab" id="headingTwo2">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                                aria-expanded="false" aria-controls="collapseTwo2">
                                <h5 class="black-text font-weight-normal mb-0">
                                    How long are your contracts? <i class="fas float-right fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
            
                        <!-- Card body -->
                        <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                            data-parent="#accordionEx">
                            <div class="card-body">
                                Currently, we only offer monthly subscription. You can upgrade or cancel your monthly account at any time with no further obligation.
                            </div>
                        </div>
        
                    </div>
                    <!-- Accordion card -->
        
                    <!-- Accordion card -->
                    <div class="card border-bottom-0 border-left border-right border-light">
        
                        <!-- Card header -->
                        <div class="card-header border-bottom border-light" role="tab" id="headingThree3">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                                aria-expanded="false" aria-controls="collapseThree3">
                                <h5 class="black-text font-weight-normal mb-0">
                                    Can I cancel my subscription? <i class="fas float-right fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
            
                        <!-- Card body -->
                        <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                            data-parent="#accordionEx">
                            <div class="card-body">
                                You can cancel your subscription anytime in your account. Once the subscription is cancelled, you will not be charged next month. You will continue to have access to your account until your current subscription expires.
                            </div>
                        </div>
        
                    </div>
                    <!-- Accordion card -->
                    
                    <!-- Accordion card -->
                    <div class="card border-left border-right border-light">
        
                        <!-- Card header -->
                        <div class="card-header border-bottom border-light" role="tab" id="headingThree4">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4"
                                aria-expanded="false" aria-controls="collapseThree4">
                                <h5 class="black-text font-weight-normal mb-0">
                                    Can I request refund? <i class="fas float-right fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
            
                        <!-- Card body -->
                        <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree4"
                            data-parent="#accordionEx">
                            <div class="card-body">
                                Unfortunately, not. We do not issue full or partial refunds for any reason.    
                            </div>
                        </div>
        
                    </div>
                    <!-- Accordion card -->
        
                </div>
                <!-- Accordion wrapper -->
            
            </div>
      
        </section>
        
        
    </div>
    <!--Section: FAQ-->

    

@endsection
