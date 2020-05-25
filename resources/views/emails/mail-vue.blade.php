<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Titre du site -->
    <title>
      CONTACT
    </title>


    <!-- Icon de logo du Site -->
      <link rel="shortcut icon" href="{{asset('')}}" type="image/x-icon">

      {{-- fichiers css --}}
        @include('includeCss')
  </head>
  <body>

<section class="bg-cloud padding-10em">
  <div class="container">
      <div class="row">

          <div class="col-12">
              <div class="card">
                  <div class="card-body">

                    <div class="d-flex align-items-center">
                        <a class="navbar-brand text-center" href='{{url('')}}'>
                            <img id="img-color-logo" src="{{asset('images/logo/ac-group.jpg')}}" 
                            alt="Logo AC GROUP" width="180px">
                        </a><br>
                    </div>

                      <b><u>Nom et prénom</u> :</b> {{$name}} <br><br>
                      <b><u>Société</u> :</b> {{$societe}} <br><br>
                      <b><u>Beoins</u> :</b>
                        <ul>
                          @foreach ($besoins as $besoin)
                              <li>{{$besoin}}</li>
                          @endforeach
                        </ul>
                      <b><u>Budget</u> :</b> {{$budget}} <br><br>
                      <b><u>Délai</u> :</b> {{$delai}} <br><br>


                      {{$contenu}}
                  </div>
              </div>
          </div>

      </div>
  </div>
</section>
  


  {{-- fin footer --}}

    {{-- fichiers js --}}
    @include('includeJs')

  </body>
</html>
