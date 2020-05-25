

@extends('admin.dashboard-template')

@section('titre')
    Accueil | Administration Creative Agency
@endsection


@section('contenu')

<div class="container-fluid">
    

    <div class="row">

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">weekend</i>
                    </div>
                    <p class="card-category">Expertises</p>
                    <h3 class="card-title">{{$expertises}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-danger"></i>
                        <a href="#pablo"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">equalizer</i>
                    </div>
                    <p class="card-category">Formations</p>
                    <h3 class="card-title">{{$formations}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">Réalisations</p>
                    <h3 class="card-title">{{$realisations}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <p class="card-category">Technologies</p>
                    <h3 class="card-title">{{$technologies}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <p class="card-category">Temoignages</p>
                    <h3 class="card-title">{{$temoignages}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                    </div>
                </div>
            </div>
        </div>

    </div>

    
  </div>

@endsection