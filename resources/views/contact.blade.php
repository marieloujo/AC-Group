
@extends('template')

@section('titre')
{{ trans('sentences.pages.contact.titre')}}
@endsection


@section('other-css')

    <link href="{{asset('bootstrap-wizard/css/material-bootstrap-wizard.css')}}" rel="stylesheet" />
    
@endsection



@section('contenu')


<div class="container-fluid pt-5 animate" data-animate="zoomIn" data-duration="1.0s" data-delay="0.1s">

    <section class="dark-grey-text container pt-5">

        <div class="row pr-lg-5 pt-5">
            
            <div class="col-md-8 d-flex align-items-center" id="presentation-texte">
                <div>
                    <h2 class="info-text text-center font-weight-bold">
                        {{ trans('sentences.pages.contact.presentation.titre')}}</h2>
                    <p class="text-center lead">
                        {{ trans('sentences.pages.contact.presentation.description')}}
                    </p>
                </div>
            </div>

            <div class="col-md-4 animated " id="presentation-illustration">
                <div class="">
                    <img src="{{asset('images/illustrations/contact_us.svg')}}"
                        class="img-fluid" alt="smaple image">
                </div>
            </div>

        </div>

    </section>

</div>



<div class="container pt-2 d-flex justify-content-center">

    

    <div class="row col-md-12 pt-5 d-flex align-items-center">
        <div class="col-md-4 text-center animate-web-only" data-animate="fadeInUp" data-duration=".7s" data-delay="0.1s">
            <a class="btn-link" href="https://wa.me/+0123456789">
                <button class="btn btn-indigo  btn-fab  btn-round">
                    <i class="fab fa-whatsapp text-white"></i>
                </button>

                <p class="mt-3">{{ trans('sentences.pages.contact.contact.whatsapp')}}</p>
            </a>

        </div>
        <div class="col-md-4 text-center animate-web-only" data-animate="fadeInUp" data-duration=".7s" data-delay="0.5s">
            <a class="btn-link" href="tel:+ 01 234 567 89">
                <button class="btn btn-indigo btn-fab  btn-round">
                    <i class="fas fa-phone text-white"></i>
                </button>

                <p class="mt-3">{{ trans('sentences.pages.contact.contact.tel')}}</p>
            </a>
        </div>
        <div class="col-md-4 text-center animate-web-only" data-animate="fadeInUp" data-duration=".7s" data-delay="1.0s">
            <a class="btn-link" href="mailto:contact.ac-group.com">
                <button class="btn btn-indigo btn-fab  btn-round">
                    <i class="fas fa-envelope text-white"></i>
                </button>
                <p class="mt-3">{{ trans('sentences.pages.contact.contact.email')}}</p>
            </a>
        </div>
    </div>

</div>





<!--   Big container   -->
<div class="container-fluid pb-5" id="form">
    <div class="wizard-container">
        <div class="card wizard-card" data-color="orange" id="wizard">
            <div class="wizard-navigation">
                <ul>
                    <li class="py-2 "><a href="#send-mail" data-toggle="tab">
                        {{ trans('sentences.pages.contact.formulaire.form-1.navigation-titre')}}</a></li>
                    <li class="py-2"><a href="#send-simple-mail" data-toggle="tab">
                        {{ trans('sentences.pages.contact.formulaire.form-2.navigation-titre')}}</a></li>
                </ul>
            </div>

            <div class="tab-content">

                <div class="tab-pane" id="send-mail">
                    <form action="{{route('sendMail')}}" method="POST" id="form-lancer-projet" enctype="multipart/form-data" >

                        {{ csrf_field() }}

                        <div class="row">

                            <div class="col-md-6">
                                <h5 class="info-text font-weight-bold">
                                    {{ trans('sentences.pages.contact.formulaire.form-1.sections.1.titre')}}
                                </h5>

                                <div class="form-group label-floating col-md-12">
                                    <label class="control-label">
                                        {{ trans('sentences.pages.contact.formulaire.form-1.sections.1.inputs.1.label')}}
                                    </label>
                                    <input name="name" type="text" class="form-control col-md-12" 
                                        id="name">

                                    @if ($errors->has('name')) 
                                        <span class="bmd-help text-muted text-danger float-left">
                                        {{ $errors->first('name') }}</span> 
                                    @endif

                                </div>


                                <div class="form-group label-floating col-md-12">
                                    <label class="control-label">
                                        {{ trans('sentences.pages.contact.formulaire.form-1.sections.1.inputs.2.label')}}</label>
                                    <input name="mail" type="email" class="form-control col-md-12">

                                    @if ($errors->has('mail')) 
                                        <span class="bmd-help text-muted text-danger float-left">
                                        {{ $errors->first('mail') }}</span> 
                                    @endif

                                </div>


                                <div class="form-group label-floating col-md-12">
                                    <label class="control-label">
                                        {{ trans('sentences.pages.contact.formulaire.form-1.sections.1.inputs.3.label')}}</label>
                                    <input name="societe" type="text" class="form-control col-md-12">
                                </div>


                                <h5 class="info-text font-weight-bold pt-5">
                                    {{ trans('sentences.pages.contact.formulaire.form-1.sections.2.titre')}}
                                </h5>


                                <div class="form-group label-floating col-md-12">
                                    <label class="control-label">
                                        {{ trans('sentences.pages.contact.formulaire.form-1.sections.2.inputs.1.label')}}
                                    </label>
                                    <textarea name="message" class="form-control" placeholder="" rows="5"></textarea>

                                    @if ($errors->has('message')) 
                                        <span class="bmd-help text-muted text-danger float-left">
                                        {{ $errors->first('message') }}</span> 
                                    @endif

                                </div>


                                <div class="my-5 container-fluid pb-3">

                                    <h5 class="font-weight-bold text-capitalize">
                                        Votre budget (€)
                                    </h5>

                                    <div class="row">
                                        <div class="col-md-1 mr-5">
                                            <input type="number" class="input text-center" id="min" value="2000">
                                        </div>
                                        <div class="col-md-8 mt-2 multi-range-field ">
                                            <input id="budjet" class="multi-range range" name="budget"  type="range" />
                                        </div>
                                        <div class="col-md-1 ml-3">
                                            <input type="number" class="input text-center" id="max" value="20000">
                                        </div>
                                    </div>

                                    <div class="checkbox col-sm-12 mt-5">
                                        <label> 
                                            <input type="checkbox" id="undefined" name="undefined"
                                                value="Budjet indéterminé">
                                            <span class="font-montserrart text-muted">
                                                Indéterminé
                                            </span> 
                                        </label>
                                    </div>

                                </div>   


                                <div class="multi-range-field my-5 col-md-12 pb-5">
                                    <h5 class="font-weight-bold text-capitalize">
                                        Votre deadline (mois)
                                    </h5>

                                    <div class="row">
                                        <div class="col-md-10 mt-2 multi-range-field ">
                                            <input id="delai" class="multi-range delai" name="delai"  type="range" />
                                        </div>
                                        <div class="col-md-1 ml-3">
                                            <input type="number" class="input text-center" id="mois" value="12">
                                        </div>
                                    </div>

                                    <div class="checkbox col-sm-12 mt-3">
                                        <label> 
                                            <input type="checkbox" id="undefined-date" name="undefined-date"
                                                value="Durée indéterminé">
                                            <span class="font-montserrart text-muted">
                                                Indéterminé
                                            </span> 
                                        </label>
                                    </div>

                                </div>   

                            </div>

                            <div class="col-md-6">
                                <h5 class="info-text font-weight-bold">
                                    {{ trans('sentences.pages.contact.formulaire.form-1.sections.3.titre')}}</h5>

                                <div class="row pb-5">

                                    <div class="col-md-6">

                                        <div class="col-sm-12 pb-5">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="besoins[]" 
                                                        value="Data Analytics & web marketing">
                                                    <span class="font-montserrart dark-grey-text">
                                                        {{ trans('sentences.pages.accueil.expertises.poles.1.list.1.title')}}
                                                    </span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 pb-5">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="besoins[]" value="Référencement & SEO">
                                                    <span class="font-montserrart dark-grey-text">
                                                        {{ trans('sentences.pages.accueil.expertises.poles.1.list.2.title')}}
                                                    </span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 pb-5">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="besoins[]" value="Politique de gestion financière">
                                                    <span class="font-montserrart dark-grey-text">
                                                        {{ trans('sentences.pages.accueil.expertises.poles.1.list.3.title')}}
                                                    </span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 pb-5">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="besoins[]" 
                                                        value="Expertise et audit technique">
                                                    <span class="font-montserrart dark-grey-text">
                                                        {{ trans('sentences.pages.accueil.expertises.poles.2.list.1.title')}}
                                                    </span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 pb-5">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="besoins[]"
                                                        value="Étude éclairage extérieur, intérieur et architectural">
                                                    <span class="font-montserrart dark-grey-text">
                                                        {{ trans('sentences.pages.accueil.expertises.poles.2.list.2.title')}}
                                                    </span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="col-sm-12 pb-5">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="besoins[]"
                                                        value="Assistance à maîtrise d’ouvrage ou maîtrise d’œuvre">
                                                    <span class="font-montserrart dark-grey-text">
                                                        {{ trans('sentences.pages.accueil.expertises.poles.2.list.3.title')}}
                                                    </span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 pb-5">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="besoins[]" 
                                                        value="Étude statique et dynamique des réseaux Haute Tension">
                                                    <span class="font-montserrart dark-grey-text">
                                                        {{ trans('sentences.pages.accueil.expertises.poles.2.list.4.title')}}</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 pb-5">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="besoins[]" 
                                                        value="Plan de protection et note de calculs des
                                                         réseaux Haute Tension et Basse Tension">
                                                    <span class="font-montserrart dark-grey-text">
                                                        {{ trans('sentences.pages.accueil.expertises.poles.2.list.5.title')}}
                                                    </span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 pb-5">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="besoins[]"
                                                        value="Rétrofit des équipements électriques Haute et Basse Tension">
                                                    <span class="font-montserrart dark-grey-text">
                                                        {{ trans('sentences.pages.accueil.expertises.poles.2.list.6.title')}}
                                                    </span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 pb-5">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="besoins[]" 
                                                        value="Étude d’exécution des installations électriques">
                                                    <span class="font-montserrart dark-grey-text">
                                                        {{ trans('sentences.pages.accueil.expertises.poles.2.list.7.title')}}
                                                    </span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                </div>


                                <div class="input-group col-md-12 mt-5">
                                    <div class="custom-file mt-5">
                                        <input type="file" name="file" class="custom-file-input mt-5" 
                                            id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">
                                            {{ trans('sentences.pages.contact.formulaire.form-1.sections.2.inputs.2.label')}}</label>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <button type='submit' class='btn btn-indigo float-right btn-wd font-weight-bold' 
                            name='envoyer'>{{ trans('sentences.pages.contact.formulaire.button')}}</button>

                    </form>
                </div>

                <div class="tab-pane active" id="send-simple-mail">
                    <form action="{{route('sendSimpleMail')}}" method="POST" enctype="multipart/form-data"  
                        id="form-autre">

                        {{ csrf_field() }}

                        <div class="row">

                            <div class="col-md-12">

                                <div class="row col-md-12">

                                    <div class="form-group label-floating col-md-6">
                                        <label class="control-label">
                                            {{ trans('sentences.pages.contact.formulaire.form-1.sections.1.inputs.1.label')}}
                                        </label>
                                        <input name="name-simple" type="text" class="form-control col-md-12" required=true>

                                        @if ($errors->has('name-simple')) 
                                            <span class="bmd-help text-muted text-danger float-left">
                                            {{ $errors->first('name-simple') }}</span> 
                                        @endif
                                    </div>


                                    <div class="form-group label-floating col-md-6">
                                        <label class="control-label">
                                            {{trans('sentences.pages.contact.formulaire.form-1.sections.1.inputs.2.label')}}
                                        </label>
                                        <input name="mail-simple" type="email" class="form-control col-md-12" required=true>

                                        @if ($errors->has('mail-simple')) 
                                            <span class="bmd-help text-muted text-danger float-left">
                                            {{ $errors->first('mail-simple') }}</span> 
                                        @endif
                                    </div>

                                </div>

                                <h5 class="info-text col-md-12 font-weight-bold pt-5">
                                    {{ trans('sentences.pages.contact.formulaire.form-1.sections.2.titre')}}
                                </h5>


                                <div class="form-group label-floating col-md-12">
                                    <label class="control-label">
                                        {{ trans('sentences.pages.contact.formulaire.form-1.sections.2.inputs.1.label')}}
                                    </label>
                                    <textarea class="form-control" required=true name="message-simple" placeholder="" rows="5"></textarea>
                                
                                    @if ($errors->has('mesage-simple')) 
                                        <span class="bmd-help text-muted text-danger float-left">
                                        {{ $errors->first('message-simple') }}</span> 
                                    @endif
                                </div>


                                <div class="input-group col-md-12 pt-5">
                                    <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                        aria-describedby="inputGroupFileAddon01" name="file">
                                    <label class="custom-file-label" for="inputGroupFile01">
                                        {{ trans('sentences.pages.contact.formulaire.form-1.sections.2.inputs.2.label')}}
                                    </label>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <button type='submit' class='btn btn-indigo float-right btn-wd font-weight-bold'
                            name='envoyer'>{{ trans('sentences.pages.contact.formulaire.button')}}</button>

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