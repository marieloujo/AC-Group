

@extends('template')

@section('titre')
    {{ trans('sentences.pages.vision.titre')}}
@endsection


@section('contenu')


    @section('intro-title')
        {{ trans('sentences.pages.vision.intro.title')}}
    @endsection

    @section('intro-description')
        {{ trans('sentences.pages.vision.intro.description')}}
    @endsection


    @section('button-title')
        {{ trans('sentences.pages.vision.intro.button')}}
    @endsection



    <div class="container-fluid mt-5 mb-5 animate" data-animate="zoomIn" data-duration="1.0s" data-delay="0.1s" id="presentation">

        <section class="dark-grey-text container mb-5">
    
            <div class="row pr-lg-5">
                
                <div class="col-md-8 d-flex align-items-center" id="presentation-texte">
                    <div>
                        <p class="text-center lead">
                            {{ trans('sentences.pages.vision.presentation.description')}}
                        </p>
                    </div>
                </div>

                <div class="col-md-4 animated " id="presentation-illustration">
                    <div class="">
                        <img src="{{asset('images/logo/ac-group.jpg')}}" class="img-fluid" alt="smaple image">
                    </div>
                </div>

            </div>
    
        </section>
    
    </div>



    <div class="container mt-5 mb-5">
        <section class="text-center mt-5">
          <div class="row">
      
            <div class="col-lg-3 col-md-4 mb-lg-0 mb-4 animate" data-animate="rotateInDownRight" data-duration="1.0s" data-delay="0.1s">
      
                <div class="card hoverable">
        
                    <!-- Card image -->
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/58.jpg" alt="Card image cap">
        
                    <!-- Card content -->
                    <div class="card-body">
        
                        <!-- Text -->
                        <p class="mb-2 text-justify">
                            Notre approche collaborative permet de délivrer rapidement un produit solide et scalable.</p>
        
                    </div>
        
                </div>
      
            </div>
      
            <div class="col-lg-3 col-md-4 mb-md-0 mb-4 animate" data-animate="rotateInDownLeft" data-duration="1.0s" data-delay="0.1s">
      
              <div class="card hoverable">
      
                    <!-- Card image -->
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/project4.jpg" alt="Card image cap">
        
                    <!-- Card content -->
                    <div class="card-body">
                    <!-- Text -->
                    <p class="mb-2 text-justify">
                        Notre approche collaborative permet de délivrer rapidement un produit solide et scalable.</p>
    
        
                    </div>
      
              </div>
      
            </div>
      
            <div class="col-lg-3 col-md-4 mb-0 animate" data-animate="rotateInUpLeft" data-duration="1.0s" data-delay="0.1s">
      
              <div class="card hoverable">
      
                <!-- Card image -->
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/88.jpg" alt="Card image cap">
      
                <!-- Card content -->
                <div class="card-body">
      
                  <!-- Text -->
                  <p class="mb-2 text-justify">
                    Notre approche collaborative permet de délivrer rapidement un produit solide et scalable.</p>

                </div>
      
              </div>
      
            </div>

            <div class="col-lg-3 col-md-4 mb-0 animate" data-animate="rotateInUpRight" data-duration="1.0s" data-delay="0.1s">
      
                <div class="card hoverable">
        
                  <!-- Card image -->
                  <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/88.jpg" alt="Card image cap">
        
                  <!-- Card content -->
                  <div class="card-body">
        
                    <!-- Text -->
                    <p class="mb-2 text-justify">
                        Notre approche collaborative permet de délivrer rapidement un produit solide et scalable.</p>
    
        
                  </div>
        
                </div>
        
            </div>
      
          </div>
        </section>
    </div>


 

@endsection