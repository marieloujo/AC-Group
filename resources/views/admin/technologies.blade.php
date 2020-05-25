



@extends('admin.dashboard-template')

@section('titre')
    Technologie | Administration Creative Agency
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
                    <h4 class="card-title">Liste des technologies</h4>
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
                                    <th class="col-3">libelle</th>
                                    <th class="col-4">Description</th>
                                    <th class="col-3 disabled-sorting text-center">Actions</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr class="d-flex">
                                    <th class="col-2"></th>
                                    <th class="col-3">libelle</th>
                                    <th class="col-4">Description</th>
                                    <th class="col-3 text-center">Actions</th>
                                </tr>
                            </tfoot>
                            
                            <tbody>

                                @foreach($technologies as $technologie)
                                <tr class="d-flex">
                                <td class="col-2">
                                    <img class="img-container" src="{{asset('images/technologies')}}/{{$technologie->image}}">
                                </td>
                                <td class="col-3">{{$technologie->libelle}} </td>
                                <td class="col-4">{{$technologie->description}}</td>

                                <td class="col-3 text-center">

                                    <a class="btn btn-link btn-info btn-just-icon like" data-toggle="modal" rel="tooltip" 
                                        data-placement="top" title="Visualiser" data-target="{{"#modal-preview".$technologie->id}}"> 
                                        <i class="material-icons">visibility</i> 
                                    </a>

                                    <a class="btn btn-link btn-warning btn-just-icon edit" data-toggle="modal" rel="tooltip"
                                        data-placement="top" title="Modifier" data-target="{{"#modal-edit-".$technologie->id}}">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    
                                    <a class="btn btn-link btn-danger btn-just-icon remove" rel="tooltip" data-toggle="modal"
                                        data-placement="top" title="Supprimer" data-target="{{"#modal-delete-".$technologie->id}}">
                                        <i class="material-icons">close</i>
                                    </a>

                                    <div class="modal fade" tabindex="-1" role="dialog" id="{{"modal-edit-".$technologie->id}}">
                                        <div class="modal-dialog " role="document">
                                            <div class="modal-content">
                                                <div class="card ">
                                    
                                                    <div class="card-header card-header-rose">
                                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="card-title">Modification</h4>
                                                    </div>
                                    
                                                    <form action="{{route('admin_ajouter_technologie')}}" method="POST" enctype="multipart/form-data">
                                                        
                                                        <div class="card-body ">
                                                            {{ csrf_field() }}
                                    
                                                            <div class="form-group mb-3 mt-3">
                                                                <input type="hidden" class="form-control" name="id" value="{{$technologie->id}}">
                                                                <input type="hidden" class="form-control" name="image" value="{{$technologie->image}}">
                                                            </div>
                                    
                                                            <div class="form-group mb-3 mt-3">
                                                                <label for="libelle-{{$technologie->id}}" class="bmd-label-floating">libelle</label>
                                                                <input type="text" class="form-control" name="libelle" id="libelle-{{$technologie->id}}" value="{{$technologie->libelle}}" >
                                                            </div>
                                    
                                                            <div class="form-group mb-3">
                                                                <label for="description-{{$technologie->id}}" class="bmd-label-floating">Description</label>
                                                                <textarea class="form-control" name="description" id="description--{{$technologie->id}}" rows="3">{{$technologie->description}}</textarea>
                                                            </div>
                                    
                                    
                                                            <div class="form-group">
                                                                <label for="image-{{$technologie->id}}">Example file input</label>
                                                                <input type="file" name="fichier_image" accept="image/*" class="form-control-file" id="image-{{$technologie->id}}">
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
                                    <div class="modal fade modal-mini modal-primary" id="{{"modal-delete-".$technologie->id}}" tabindex="-1"
                                        role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-small">
                                            <div class="modal-content">
                                    
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                        <i class="material-icons">clear</i>
                                                    </button>
                                                </div>
                                    
                                                <form action="{{route('admin_delete_technologie', $technologie->id)}}" method="post">
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
                    <h4 class="card-title">Ajouter une technologie</h4>
                </div>

                <form action="{{route('admin_ajouter_technologie')}}" method="POST" enctype="multipart/form-data">
                    
                    <div class="card-body ">
                        {{ csrf_field() }}
                        <div class="form-group mb-3 mt-3">
                            <label for="exampleEmail" class="bmd-label-floating">libelle</label>
                            <input type="text" class="form-control" name="libelle" id="exampleEmail">
                            {!! $errors->first('nom_document',
                                '<span class="bmd-help text-danger">
                                    Le libelle est obligation.</span>') 
                            !!}
                            
                        </div>

                        <div class="form-group mb-3">
                            <label for="examplePass" class="bmd-label-floating">Description</label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>


                        <div class="form-group">
                            <label for="exampleFormControlFile1">Example file input</label>
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
