



@extends('admin.dashboard-template')


@section('titre')
    Expertise | Administration Creative Agency
@endsection


@section('contenu')

<div class="container-fluid">
    
    <div class="row">
        <div class="col-md-12">

            @if(Session::has('success'))
                <div class="alert alert-success alert-with-icon mt-3 mb-3" data-notify="container">
                    <i class="material-icons" data-notify="icon">notifications</i>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                    </button>
                    <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                    <span data-notify="message">{{ Session::get('success') }}</span>
                </div>
            @endif

            <button class="btn btn-primary btn-round mb-4 float-right" 
                data-toggle="modal" data-target="#modal-add">
                <i class="fas fa-plus"></i> Ajouter
            </button>

            <div class="card">

                <div class="card-header card-header-primary card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">assignment</i>
                    </div>
                    <h4 class="card-title">Liste des expertises</h4>
                </div>

                <div class="card-body">
                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <div class="material-datatables">
                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" 
                            width="100%" style="width:100%">
                            
                            <thead>
                                <tr class="d-flex">
                                    <th class="col-2"></th>
                                    <th class="col-3">Titre</th>
                                    <th class="col-4">Description</th>
                                    <th class="col-3 disabled-sorting text-center">Actions</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr class="d-flex">
                                    <th class="col-2"></th>
                                    <th class="col-3">Titre</th>
                                    <th class="col-4">Description</th>
                                    <th class="col-3 text-center">Actions</th>
                                </tr>
                            </tfoot>
                            
                            <tbody>

                                @foreach($expertises as $expertise)
                                <tr class="d-flex">
                                <td class="col-2">
                                    <img class="img-container" src="{{asset('images/expertises')}}/{{$expertise->image}}">
                                </td>
                                <td class="col-3">{{$expertise->titre}} </td>
                                <td class="col-4">{{$expertise->description}}</td>

                                <td class="col-3 text-center">

                                    <a class="btn btn-link btn-info btn-just-icon like" data-toggle="modal" rel="tooltip" 
                                        data-placement="top" title="Visualiser" data-target="{{"#modal-preview".$expertise->id}}"> 
                                        <i class="material-icons">visibility</i> 
                                    </a>

                                    <a class="btn btn-link btn-warning btn-just-icon edit" data-toggle="modal" rel="tooltip"
                                        data-placement="top" title="Modifier" data-target="{{"#modal-edit-".$expertise->id}}">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    
                                    <a class="btn btn-link btn-danger btn-just-icon remove" rel="tooltip" data-toggle="modal"
                                        data-placement="top" title="Supprimer" data-target="{{"#modal-delete-".$expertise->id}}">
                                        <i class="material-icons">close</i>
                                    </a>

                                    <div class="modal fade" tabindex="-1" role="dialog" id="{{"modal-edit-".$expertise->id}}">
                                        <div class="modal-dialog " role="document">
                                            <div class="modal-content">
                                                <div class="card ">
                                    
                                                    <div class="card-header card-header-rose">
                                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="card-title">Modification</h4>
                                                    </div>
                                    
                                                    <form action="{{route('admin_ajouter_expertise')}}" method="POST" enctype="multipart/form-data">
                                                        
                                                        <div class="card-body ">
                                                            {{ csrf_field() }}
                                    
                                                            <div class="form-group mb-3 mt-3">
                                                                <input type="hidden" class="form-control" name="id" value="{{$expertise->id}}">
                                                                <input type="hidden" class="form-control" name="image" value="{{$expertise->image}}">
                                                            </div>
                                    
                                                            <div class="form-group mb-3 mt-3">
                                                                <label for="titre-{{$expertise->id}}" class="bmd-label-floating">Titre</label>
                                                                <input type="text" class="form-control" name="titre" id="titre-{{$expertise->id}}" value="{{$expertise->titre}}" >
                                                            </div>
                                    
                                                            <div class="form-group mb-3">
                                                                <label for="description-{{$expertise->id}}" class="bmd-label-floating">Description</label>
                                                                <textarea class="form-control" name="description" id="description--{{$expertise->id}}" rows="3">{{$expertise->description}}</textarea>
                                                            </div>
                                    
                                    
                                                            <div class="form-group">
                                                                <label for="image-{{$expertise->id}}">Example file input</label>
                                                                <input type="file" name="fichier_image" accept="image/*" class="form-control-file" id="image-{{$expertise->id}}">
                                                            </div>
                                    
                                                        </div>
                                    
                                                        <div class="card-footer">
                                                            <button type="submit" class="btn btn-fill btn-rose">Valider</button>
                                                        </div>
                                    
                                                    </form>
                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <!-- delete modal -->
                                    <div class="modal fade modal-mini modal-primary" id="{{"modal-delete-".$expertise->id}}" tabindex="-1"
                                        role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-small">
                                            <div class="modal-content">
                                    
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                        <i class="material-icons">clear</i>
                                                    </button>
                                                </div>
                                    
                                                <form action="{{route('admin_delete_expertise', $expertise->id)}}" method="post">
                                                    {{ csrf_field() }}
                                    
                                                    <div class="modal-body">
                                                        <p>Etes vous sûre de vouloir supprimer? Vous ne pourrez plus restorer!</p>
                                                    </div>
                                    
                                                    <div class="modal-footer justify-content-center">
                                                        <button type="button" class="btn btn-link" data-dismiss="modal">Annuler</button>
                                                        <button type="submit" class="btn btn-danger btn-link">Oui, supprimer
                                                            <div class="ripple-container"></div>
                                                        </button>
                                                    </div>
                                    
                                                </form>
                                    
                                            </div>
                                        </div>
                                      </div>
                                    <!--    end delete modal -->
                                    
                                    
                                </td>

                                </tr>
                                @endforeach

                            </tbody>
                                
                        </table>
                    </div>
                </div>
                <!-- end content-->
            </div>
            <!--  end card  -->

        </div>
        <!-- end col-md-12 -->
    </div>

</div>



<div class="modal fade" tabindex="-1" role="dialog" id="modal-add">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="card ">

                <div class="card-header card-header-rose">
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="card-title">Ajouter une expertise</h4>
                </div>

                <form action="{{route('admin_ajouter_expertise')}}" method="POST" enctype="multipart/form-data" 
                    id="expertise-add">
                    
                    <div class="card-body ">
                        {{ csrf_field() }}
                        <div class="form-group mb-3 mt-3">
                            <label for="titre" class="bmd-label-floating">Titre</label>
                            <input type="text" class="form-control" name="titre" id="titre" required="true">
                        </div>

                        <div class="form-group mb-3">
                            <label for="description" class="bmd-label-floating">Description</label>
                            <textarea class="form-control" name="description" id="description" 
                                required="true" rows="3">
                            </textarea>
                        </div>


                        <div class="form-group">
                            <label for="image">Choisir une image</label>
                            <input type="file" name="fichier_image" accept="image/*" required="true" class="form-control-file" id="image">
                        </div>

                        

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-rose">Valider</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>





{{--
<div class="modal fade bd-example-modal-lg" id="{{"modal-preview".$expertise->id}}"
    tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            
            <div class="col-lg-12 mx-auto">
    
                <ol class="timeline">

                    <li class="timeline-element">
                        <div class="row mb-5 d-flex align-items-center">

                            <div class="col-lg-6 col-md-6  animated fadeInLeft">
                                <div class="card">
                                    <div class="card-header white">
                                        <h5 class="font-weight-bold mb-0 py-2 ">
                                            {{$expertise->titre}}
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text text-justify">
                                            {{$expertise->description}}
                                        </p>
                                        <a class="blue-text font-weight-bold" href="/expertises#first-section">En savoir plus
                                            <i class="fas fa-plus-circle"></i>
                                        </a> 
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-6 col-lg-4 animated fadeInRight">
                                <div class="overlay rounded z-depth-1">
                                    <img src="{{asset('images/expertises')}}/{{$expertise->image}}" class="img-fluid"
                                    alt="Sample project image" />
                                    <a href="#">
                                    </a>
                                </div>
                            </div>
        
                        </div>
                    </li>

                </ol>

            </div>
    
        </div>
    </div>
</div>--}}



@endsection
