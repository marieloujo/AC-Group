
@extends('template')

@section('titre')
    Nous Contacter
@endsection


@section('contenu')


<div class="container-fluid my-5 py-5">


    <!--Section: Content-->
    <section class="text-center px-md-5 mx-md-5 dark-grey-text">
  
        <!-- Section heading -->
        <h3 class="font-weight-bold mb-4">Nous Contacter</h3>
        <!-- Section description -->
        <p class="text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
            eum porro a pariatur veniam.</p>
    
        <!-- Grid row -->
        <div class="row">
    
            <!-- Grid column -->
            <div class="col-md-9 mb-md-0 mb-5 ">
    
            <form action="{{route('sendMail')}}" method="POST">
                
                {{ csrf_field() }}

                <!-- Grid row -->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" name="name" id="contact-name" class="form-control">
                            <label for="contact-name" class="">Votre nom et prénoms</label>

                            @if ($errors->has('name')) <span class="bmd-help text-muted text-danger float-left">
                                {{ $errors->first('name') }}</span> @endif

                        </div>
                    </div>
                    <!-- Grid column -->
        
                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row">
        
                    <!-- Grid column -->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="number" name="telephone" id="contact-tel" class="form-control">
                            <label for="contact-tel" class="">Votre Téléphone</label>

                            @if ($errors->has('telephone')) <span class="bmd-help text-danger float-left">
                                {{ $errors->first('telephone') }}</span> @endif

                        </div>
                    </div>
                    <!-- Grid column -->
        
                    <!-- Grid column -->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" name="email" id="contact-email" class="form-control">
                            <label for="contact-email" class="">Votre email</label>

                            @if ($errors->has('email')) <span class="bmd-help text-danger float-left">
                                {{ $errors->first('email') }}</span> @endif

                        </div>
                    </div>
                    <!-- Grid column -->
        
                </div>
                <!-- Grid row -->
        
                <!-- Grid row -->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" name="object" id="contact-Subject" class="form-control">
                            <label for="contact-Subject" class="">Object du message</label>

                            @if ($errors->has('object')) <span class="bmd-help text-danger float-left">
                                {{ $errors->first('object') }}</span> @endif

                        </div>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
    
                <!-- Grid row -->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-12">
                        <div class="md-form">
                            <textarea id="contact-message" name="message" class="form-control md-textarea" rows="3"></textarea>
                            <label for="contact-message">Corps du message</label>

                            @if ($errors->has('message')) <span class="bmd-help text-danger float-left">
                                {{ $errors->first('message') }}</span> @endif

                        </div>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->

                <div class="text-center text-md-left">
                    <button type="submit" class="btn warning-color-dark font-weight-bold text-white btn-md btn-rounded">Envoyer</button>
                </div>
    
            </form>
        
                
    
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-3 text-center ">
                <ul class="list-unstyled mb-0">
                    <li>
                        <a type="button" class="btn btn-link" href="https://wa.me/+0123456789">
                            <i class="fas fa-map-marker-alt fa-2x text-warning"></i>
                            <p>WHATSAPP</p>
                        </a>
                    </li>
                    <li>
                        <a type="button" class="btn btn-link" href="tel:+ 01 234 567 89">
                            <i class="fas fa-phone fa-2x mt-4 text-warning"></i>
                            <p>TÉLÉPHONE</p>
                        </a>
                    </li>
                    <li>
                        <a type="button" class="btn btn-link" href="tel:+ 01 234 567 89">
                            <i class="fas fa-envelope fa-2x mt-4 text-warning"></i>
                            <p class="mb-0">EMAIL</p>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Grid column -->
    
        </div>
        <!-- Grid row -->
  
    </section>
    <!--Section: Content-->

  
  </div>


 
@endsection