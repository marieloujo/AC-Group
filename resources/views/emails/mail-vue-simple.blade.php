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
                  <div class="card-header">
                      Corps du message
                  </div>
                  <div class="card-body dff justify-content-center">

                      <a class="navbar-brand text-center" href='{{url('')}}'>
                          <img id="img-color-logo" src="{{asset('images/expertises/58.jpg')}}" 
                          alt="Logo Creative Agency" width="150px">
                      </a><br>

                      <b><u>Nom et prénom</u> :</b> {{$name}} <br><br>

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
