<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="">

    <!--Materialize CSS Import Google Icon Font-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//storage.googleapis.com/code.getmdl.io/1.0.1/material.indigo-orange.min.css">
  <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="bib.ico">
   <!-- Scripts -->
   <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!-- Agregar Font -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons&display=block" rel="stylesheet">
  <link rel="stylesheet" href="{!! asset('css/style.css') !!}" />
  <title>{{ config('app.name', 'Biblioteca') }}</title>
  </head>
  <body> 
    <!--The content below is only a placeholder and can be replaced.-->
<div class=" mdl-js-layout conte-all">
  <header class="mdl-layout__header ">
 
 
    <div class="mdl-layout__header-row"> 
      <div class="nav-header-logo">
        <a class="nav-logo">
          <!-- Logo -->
          <img src="../img/unicaucalogoB.png" width="70" height="70" alt="?">
          <!-- {{ asset('img/unicaucalogoB.png') }}; -->
          <!-- Title -->
          <span class="nav-title">
            Universidad del Cauca
          </span>
        </a>
      </div>
 
 
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="navbar navbar-expand-md shadow-sm mdl-navigation mdl-layout--large-screen-only">
        <!-- <a class="mdl-navigation__link" href="https://unicauca.edu.co">UNICAUCA</a> -->

        <div >
         <!-- Right Side Of Navbar -->
         <ul class="navbar-nav ml-auto navbar navbar-expand-md ">
                        <!-- Authentication Links -->
                        @guest
                       
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link-re btn-regi" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            <li class="nav-item">
                        <a id="button-basic"  class="nav-link-re btn-login"  href="{{ route('login') }}">{{ __('Login') }}
                        <i class="fas fa-user-circle"></i>
                        </a> 
                        <!-- <button id="button-basic" href="{{ route('login') }}" type="button" class="btn mdl-button--raised mdl-button--colored btn-login">
                        {{ __('Login') }}<i class="fas fa-user-circle"></i>
                        </button> -->
                            </li>
                           
                        @else
                            <li nav-item>
                            <div class="dropdown">
                              <!-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> -->
                              <button type="button" class="btn btn-light btn-login dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              {{ Auth::user()->name }} 
                                </button>
                                <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> -->
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">  
                                <!-- <a class="dropdown-item"  >
                                    {{ Auth::user()->name }} 
                                </a> -->

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                              </div>
                                
                            </li>
                        @endguest
                    </ul>
        </div>
       
      <!-- <div class="btn-group" dropdown>       
          <button id="button-basic" dropdownToggle type="button" class="btn btn-primary dropdown-toggle  mdl-js-button mdl-button--raised mdl-button--colored btn-login"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Login <i class="fas fa-user-circle"></i>
          </button>
          <ul id="dropdown-basic" *dropdownMenu class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenuButton"git >
            <li role="menuitem"><a class="dropdown-item"  href="#">Iniciar Sesion</a></li>
            <li role="menuitem"><a class="dropdown-item" href="#">user</a></li>
            <li role="menuitem"><a class="dropdown-item" href="#">Informacion</a></li>
            <li class="divider dropdown-divider"></li>
            <li role="menuitem"><a class="dropdown-item" href="#">Cerrar Sesion</a>
            </li>
          </ul>
        </div> -->
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
    </nav>
  </div>
 
  <!-- No header, and the drawer stays open on larger screens (fixed drawer). -->
 <div class=" mdl-js-layout mdl-layout--fixed-drawer">
    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title">Menu</span>
      <nav class="mdl-navigation menu-navegation">
        <a class="mdl-navigation__link" href="{{ url('/') }}" >
            <i class="fas fa-book"></i>
            Biblioteca Virtual</a>
        <a class="mdl-navigation__link " href="{{ url('register') }}" >
            <i class="fas fa-user-plus"></i>
            Registrarse</a>
        <a class="mdl-navigation__link" href="{{ url('/reserves') }}" >
            <i class="fas fa-bookmark"></i>
            Reservas</a>
        <a class="mdl-navigation__link" href="{{ url('/users') }}">
            <i class="fas fa-info-circle"></i>
            Informacion</a>
        <a class="mdl-navigation__link">
            <!-- <i class="fas fa-hand-holding-usd"></i> -->
            <i class="fas fa-dollar-sign"></i>
            Multas</a>
        <a class="mdl-navigation__link" >
            <i class="fas fa-clock"></i>
            Horarios</a>
      </nav>
    </div>    
  
  </div>
  <main class="conte-pages" >
     <div class="container main-principal">

       @yield('content')
     </div>
    
 </main> 
  
    </div>
  

   



    <!-- Optional JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>