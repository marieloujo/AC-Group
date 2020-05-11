
@extends('template')

@section('titre')
    Nous Contacter
@endsection


@section('other-css')

	<link href="{{asset('bootstrap-wizard/css/material-bootstrap-wizard.css')}}" rel="stylesheet" />
    
@endsection


@section('contenu')

{{--
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

  
</div>--}}


<div class="container-fluid pt-5 animate" data-animate="zoomIn" data-duration="1.0s" data-delay="0.1s" id="presentation">

    <section class="dark-grey-text container pt-3">

        <div class="row pr-lg-5">
            
            <div class="col-md-8 d-flex align-items-center" id="presentation-texte">
                <div>
                    <h2 class="info-text text-center font-weight-bold">N'hésitez pas à nous solliciter</h2>
                    <p class="text-center lead">
                        Vous souhaitez des renseignements sur nos offres? 
                        Vous avez besoin de conseils sur une expertise? 
                        Nous sommes à votre écoute pour répondre à vos 
                        problématiques sans aucun engagement de votre part.
                    </p>
                </div>
            </div>

            <div class="col-md-4 animated " id="presentation-illustration">
                <div class="">
                    <img src="https://mdbootstrap.com/img/illustrations/graphics(4).png" class="img-fluid" alt="smaple image">
                </div>
            </div>

        </div>

    </section>

</div>


<div class="container pt-2 d-flex justify-content-center">

    

    <div class="row col-md-12 pt-5 d-flex align-items-center">
        <div class="col-md-4 text-center ">
            <a class="btn-link" href="https://wa.me/+0123456789">
                <button class="btn btn-orange btn-fab  btn-round">
                    <i class="fab fa-whatsapp text-white"></i>
                </button>

                <p class="mt-3">WHATSAPP</p>
            </a>

        </div>
        <div class="col-md-4 text-center ">
            <a class="btn-link" href="tel:+ 01 234 567 89">
                <button class="btn btn-orange btn-fab  btn-round">
                    <i class="fas fa-phone text-white"></i>
                </button>

                <p class="mt-3">TÉLÉPHONE</p>
            </a>
        </div>
        <div class="col-md-4 text-center ">
            <a class="btn-link" href="mailto:contact.ac-group.com">
                <button class="btn btn-orange btn-fab  btn-round">
                    <i class="fas fa-envelope text-white"></i>
                </button>
                <p class="mt-3">EMAIL</p>
            </a>
        </div>
    </div>

</div>


<!--   Big container   -->
<div class="container-fluid pb-5">
    <div class="wizard-container">
        <div class="card wizard-card" data-color="orange" id="wizard">
            <div class="wizard-navigation">
                <ul>
                    <li class="py-2 "><a href="#details" data-toggle="tab">Lancer votre projet</a></li>
                    <li class="py-2"><a href="#captain" data-toggle="tab">Autres</a></li>
                </ul>
            </div>

            <div class="tab-content">

                <div class="tab-pane" id="details">
                    <form action="" method="POST" id="form-lancer-projet" enctype="multipart/form-data" >

                        <div class="row">

                            <div class="col-md-6">
                                <h5 class="info-text font-weight-bold">Informations générales</h5>

                                <div class="form-group label-floating col-md-12">
                                    <label class="control-label">Nom et prénoms</label>
                                    <input name="name" type="text" class="form-control col-md-12" 
                                        id="name">
                                </div>


                                <div class="form-group label-floating col-md-12">
                                    <label class="control-label">Adresse email</label>
                                    <input name="name" type="email" class="form-control col-md-12">
                                </div>


                                <div class="form-group label-floating col-md-12">
                                    <label class="control-label">Société</label>
                                    <input name="name" type="text" class="form-control col-md-12">
                                </div>


                                <h5 class="info-text font-weight-bold pt-5">Message</h5>


                                <div class="form-group label-floating col-md-12">
                                    <label class="control-label">Message</label>
                                    <textarea class="form-control" placeholder="" rows="5"></textarea>
                                </div>

                                <div class="input-group col-md-12 pt-5">
                                    <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                        aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choisir un  fichier</label>
                                    </div>
                                </div>


                            </div>

                            <div class="col-md-6">
                                <h5 class="info-text font-weight-bold">Vos besoin</h5>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="col-sm-12 pb-5">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes">
                                                </label>
                                                <span class="font-montserrart">Data Analytics & web marketing</span>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 pb-5">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes">
                                                </label>
                                                <span class="font-montserrart">Référencement & SEO</span>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 pb-5">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes">
                                                </label>
                                                <span class="font-montserrart">Politique de gestion financière</span>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 pb-5">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes">
                                                </label>
                                                <span class="font-montserrart">Expertise et audit technique</span>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 pb-5">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes">
                                                </label>
                                                <span class="font-montserrart">
                                                    Étude éclairage extérieur, intérieur et architectural
                                                </span>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="col-md-6">

                                        <div class="col-sm-12 pb-5">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes">
                                                </label>
                                                <span class="font-montserrart">Assistance à maîtrise d’ouvrage
                                                    ou maîtrise d’œuvre</span>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 pb-5">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes">
                                                </label>
                                                <span class="font-montserrart">Étude statique et dynamique des
                                                    réseaux Haute Tension</span>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 pb-5">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes">
                                                </label>
                                                <span class="font-montserrart">
                                                    Plan de protection et note de calculs des réseaux
                                                    Haute Tension et Basse Tension
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 pb-5">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes">
                                                </label>
                                                <span class="font-montserrart">
                                                    Rétrofit des équipements électriques Haute et Basse Tension
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 pb-5">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes">
                                                </label>
                                                <span class="font-montserrart">
                                                    Étude d’exécution des installations électriques
                                                </span>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>


                            <!--div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">email</i>
                                    </span>
                                    <div class="form-group label-floating">
                                            <label class="control-label">Your Email</label>
                                            <input name="name" type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                    <div class="form-group label-floating">
                                            <label class="control-label">Your Password</label>
                                            <input name="name2" type="password" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Country</label>
                                    <select class="form-control">
                                        <option disabled="" selected=""></option>
                                        <option value="Afghanistan"> Afghanistan </option>
                                        <option value="Albania"> Albania </option>
                                        <option value="Algeria"> Algeria </option>
                                        <option value="American Samoa"> American Samoa </option>
                                        <option value="Andorra"> Andorra </option>
                                        <option value="Angola"> Angola </option>
                                        <option value="Anguilla"> Anguilla </option>
                                        <option value="Antarctica"> Antarctica </option>
                                        <option value="...">...</option>
                                    </select>
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Daily Budget</label>
                                    <select class="form-control">
                                        <option disabled="" selected=""></option>
                                        <option value="Afghanistan"> < $100 </option>
                                        <option value="Albania"> $100 - $499 </option>
                                        <option value="Algeria"> $499 - $999 </option>
                                        <option value="American Samoa"> $999+ </option>
                                    </select>
                                </div>
                            </div-->
                        </div>

                        <button type='submit' class='btn btn-orange float-right btn-wd font-weight-bold' 
                            name='envoyer'>Envoyer</button>

                    </form>
                </div>

                <div class="tab-pane" id="captain">
                    <form action="{{route('sendSimpleMail')}}" method="POST" enctype="multipart/form-data"  
                        id="form-autre">

                        {{ csrf_field() }}

                        <div class="row">

                            <div class="col-md-12">

                                <div class="row col-md-12">

                                    <div class="form-group label-floating col-md-6">
                                        <label class="control-label">Nom et prénoms</label>
                                        <input name="name" type="text" class="form-control col-md-12">
                                    </div>


                                    <div class="form-group label-floating col-md-6">
                                        <label class="control-label">Adresse email</label>
                                        <input name="email" type="email" class="form-control col-md-12">
                                    </div>

                                </div>

                                <h5 class="info-text col-md-12 font-weight-bold pt-5">Message</h5>


                                <div class="form-group label-floating col-md-12">
                                    <label class="control-label">Message</label>
                                    <textarea class="form-control" name="message" placeholder="" rows="5"></textarea>
                                </div>

                                <div class="input-group col-md-12 pt-5">
                                    <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                        aria-describedby="inputGroupFileAddon01" name="file">
                                    <label class="custom-file-label" for="inputGroupFile01">Choisir un  fichier</label>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <button type='submit' class='btn btn-orange float-right btn-wd font-weight-bold'
                            name='envoyer'>Envoyer</button>

                    </form>
                </div>


            </div>
        </div>
    </div> <!-- row -->
</div> <!--  big container -->



@section('other-js')

    <script src="{{asset('bootstrap-wizard/js/jquery.bootstrap.js')}}" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="{{asset('bootstrap-wizard/js/material-bootstrap-wizard.js')}}"></script>
    
    
@endsection


 
@endsection