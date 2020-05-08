



@extends('admin.dashboard-template')

@section('titre')
    Réalisation | Administration Creative Agency
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
                    <h4 class="card-title">Liste des realisations</h4>
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
                                    <th class="col-2">libelle</th>
                                    <th class="col-3">Description</th>
                                    <th class="col-2">Adresse</th>
                                    <th class="col-3 disabled-sorting text-center">Actions</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr class="d-flex">
                                    <th class="col-2"></th>
                                    <th class="col-2">libelle</th>
                                    <th class="col-3">Description</th>
                                    <th class="col-2">Adresse</th>
                                    <th class="col-3 text-center">Actions</th>
                                </tr>
                            </tfoot>
                            
                            <tbody>

                                @foreach($realisations as $realisation)
                                <tr class="d-flex">
                                
                                <td class="col-2">
                                    <img class="img-container" src="{{asset('images/realisations')}}/{{$realisation->image}}">
                                </td>
                                <td class="col-2">{{$realisation->libelle}} </td>
                                <td class="col-3">{{$realisation->description}}</td>
                                <td class="col-2">{{$realisation->adresse}}</td>


                                <td class="col-3 text-center">

                                    <a class="btn btn-link btn-info btn-just-icon like" data-toggle="modal" rel="tooltip" 
                                        data-placement="top" title="Visualiser" data-target="{{"#modal-preview".$realisation->id}}"> 
                                        <i class="material-icons">visibility</i> 
                                    </a>

                                    <a class="btn btn-link btn-warning btn-just-icon edit" data-toggle="modal" rel="tooltip"
                                        data-placement="top" title="Modifier" data-target="{{"#modal-edit-".$realisation->id}}">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    
                                    <a class="btn btn-link btn-danger btn-just-icon remove" rel="tooltip" data-toggle="modal"
                                        data-placement="top" title="Supprimer" data-target="{{"#modal-delete-".$realisation->id}}">
                                        <i class="material-icons">close</i>
                                    </a>

                                    <div class="modal fade" tabindex="-1" role="dialog" id="{{"modal-edit-".$realisation->id}}">
                                        <div class="modal-dialog " role="document">
                                            <div class="modal-content">
                                                <div class="card ">
                                    
                                                    <div class="card-header card-header-rose">
                                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="card-title">Modification</h4>
                                                    </div>
                                    
                                                    <form action="{{route('admin_ajouter_realisation')}}" method="POST" enctype="multipart/form-data">
                                                        
                                                        <div class="card-body ">
                                                            {{ csrf_field() }}
                                    
                                                            <div class="form-group mb-3 mt-3">
                                                                <input type="hidden" class="form-control" name="id" value="{{$realisation->id}}">
                                                                <input type="hidden" class="form-control" name="image" value="{{$realisation->image}}">
                                                            </div>
                                    
                                                            <div class="form-group mb-3 mt-3">
                                                                <label for="libelle-{{$realisation->id}}" class="bmd-label-floating">libelle</label>
                                                                <input type="text" class="form-control" name="libelle" id="libelle-{{$realisation->id}}" value="{{$realisation->libelle}}" >
                                                            </div>
                                    
                                                            <div class="form-group mb-3">
                                                                <label for="description-{{$realisation->id}}" class="bmd-label-floating">Description</label>
                                                                <textarea class="form-control" name="description" id="description--{{$realisation->id}}" rows="3">{{$realisation->description}}</textarea>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="datepicker" class="bmd-label-floating">Date</label>
                                                                <input type="text" class="form-control datetimepicker" name="date" id="datepicker" value="{{$realisation->date}}">
                                                            </div>


                                                            <div class="form-group mb-3 mt-3">
                                                                <label for="adresse-{{$realisation->id}}" class="bmd-label-floating">Adresse</label>
                                                                <input type="text" class="form-control" name="adresse" id="adresse-{{$realisation->id}}" value="{{$realisation->adresse}}" >
                                                            </div>
                                    
                                    
                                                            <div class="form-group">
                                                                <label for="image-{{$realisation->id}}">Choisir une image</label>
                                                                <input type="file" name="fichier_image" accept="image/*" class="form-control-file" id="image-{{$realisation->id}}">
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
                                    <div class="modal fade modal-mini modal-primary" id="{{"modal-delete-".$realisation->id}}" tabindex="-1"
                                        role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-small">
                                            <div class="modal-content">
                                    
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                        <i class="material-icons">clear</i>
                                                    </button>
                                                </div>
                                    
                                                <form action="{{route('admin_delete_realisation', $realisation->id)}}" method="post">
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
                    <h4 class="card-title">Ajouter une réalisation</h4>
                </div>

                <form action="{{route('admin_ajouter_realisation')}}" method="POST" enctype="multipart/form-data">
                    
                    <div class="card-body ">
                        {{ csrf_field() }}
                        <div class="form-group mb-3 mt-3">
                            <label for="exampleEmail" class="bmd-label-floating">libelle</label>
                            <input type="text" class="form-control" name="libelle" id="exampleEmail">
                        </div>

                        <div class="form-group mb-3">
                            <label for="examplePass" class="bmd-label-floating">Description</label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>


                        <div class="form-group mt-4">
                            <label for="datepicker" class="bmd-label-floating">Date</label>
                            <input type="text" class="form-control datetimepicker" name="date" id="datepicker" value="11/06/2020">
                        </div>


                        <div class="form-group mb-3 mt-3">
                            <label for="adresse"class="bmd-label-floating">Adresse</label>
                            <input type="text" class="form-control" name="adresse" id="adresse">
                        </div>


                        <div class="form-group">
                            <label for="exampleFormControlFile1">Choisir une image</label>
                            <input type="file" name="fichier_image" accept="image/*" class="form-control-file" id="exampleFormControlFile1">
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








@endsection
