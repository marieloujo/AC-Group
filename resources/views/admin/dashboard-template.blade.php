

<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- Icon de logo du Site -->
    <link rel="shortcut icon" href="{{asset('')}}" type="image/x-icon">

    <!-- Titre du site -->
    <title>
        @yield('titre')
    </title>

    {{-- fichiers css --}}
    @include('admin.admin-includeCss')

</head>
<body>


<div class="wrapper ">

    <div class="sidebar" data-color="rose" data-background-color="black" 
        data-image="{{asset('create-tim/img/sidebar-1.jpg')}}">
      <!--Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag-->

        <div class="logo">
            <a href="{{url('')}}" class="simple-text logo-mini">CA</a>
            <a href="{{url('')}}" class="simple-text logo-normal">Creative Agency</a>
        </div>
      
        <div class="sidebar-wrapper">

            <div class="user">
                <div class="photo">
                    <img src="{{asset('create-tim/img/faces/avatar.jpg')}}" />
                </div>
                <div class="user-info">
                    <a data-toggle="collapse" href="#collapseExample" class="username">
                        <span>
                            {{Auth::user()->name}} <br/> {{Auth::user()->email}}
                            <b class="caret"></b>
                        </span>
                    </a>
                    <!--div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> MP </span>
                                    <span class="sidebar-normal"> Mon Profile </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> EP </span>
                                    <span class="sidebar-normal"> Modifier mon Profile </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> P </span>
                                    <span class="sidebar-normal"> Paramètre </span>
                                </a>
                            </li>
                        </ul>
                    </div-->
                </div>
            </div>

            <ul class="nav">

                <li class="nav-item @if($namePage == 'dashboard' ) active @endif ">
                    <a class="nav-link" href="{{url('admin/dashboard')}}">
                        <i class="material-icons">dashboard</i>
                        <p> Dashboard </p>
                    </a>
                </li>

                <li class="nav-item @if($namePage == 'expertises' ) active @endif ">
                    <a class="nav-link" href="{{url('admin/expertises')}}">
                        <i class="material-icons">widgets</i>
                        <p> Expertises </p>
                    </a>
                </li>

                <li class="nav-item @if($namePage == 'formations' ) active @endif ">
                    <a class="nav-link" href="{{url('admin/formations')}}">
                        <i class="material-icons">timeline</i>
                        <p> Formations </p>
                    </a>
                </li>

                <li class="nav-item @if($namePage == 'realisations' ) active @endif ">
                    <a class="nav-link" href="{{url('admin/realisations')}}">
                        <i class="material-icons">date_range</i>
                        <p> Réalisations </p>
                    </a>
                </li>


                <li class="nav-item @if($namePage == 'technologies' ) active @endif ">
                    <a class="nav-link" href="{{url('admin/technologies')}}">
                        <i class="material-icons">date_range</i>
                        <p> Technologies </p>
                    </a>
                </li>


                <li class="nav-item @if($namePage == 'temoignages' ) active @endif ">
                    <a class="nav-link" href="{{url('admin/temoignages')}}">
                        <i class="material-icons">date_range</i>
                        <p> Témoignages </p>
                    </a>
                </li>


            </ul>

        </div>

    </div>

    <div class="main-panel">
      
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">

                <div class="navbar-wrapper">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                            <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <a class="navbar-brand" href="javascript:;">Administration du site </a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" 
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>

            </div>
        </nav>
        <!-- End Navbar -->
        

        
        <div class="content">

            @yield('contenu')

        </div>



        <footer class="footer">
                <div class="container-fluid">
                    <nav class="float-left">
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com/">
                                Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/presentation">
                                About Us
                                </a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/blog">
                                Blog
                                </a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/license">
                                Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright float-right">
                        &copy;
                        <script>
                        document.write(new Date().getFullYear())
                        </script>, made with <i class="material-icons">favorite</i> by
                        <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a> for a better web.
                    </div>
                </div>
        </footer>

    </div>

</div>



{{-- fichiers js --}}
@include('admin.admin-includeJs')








</body>
</html>