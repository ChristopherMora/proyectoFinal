<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <title>Sitio NIKE  - @yield('title') </title>
</head>
<body>
        <header>
          <div class="jumbotron encabezado">
              <div class="container">
                <img src="{{ asset('img/iconos/nike-grande.png')}}" class="rounded mx-auto d-bloc" alt="">
                <h1 class="display-4">NIKE</h1>
                <p class="lead">Empresa multinacional estadounidense dedicada al diseño, desarrollo, fabricación y comercialización de equipamiento deportivo</p>
              </div>
            </div>
      </header>


      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="{{ asset('img/iconos/nike-peq.png')}}">
        <a class="navbar-brand" href="#">NIKE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('Inicio')}}">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('Productos')}}">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('Contacto')}}" tabindex="-1" aria-disabled="true">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('usuarios.index')}}" tabindex="-1" aria-disabled="true">Registros Usuarios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('rproducto.index')}}" tabindex="-1" aria-disabled="true">Registros productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('ventas.index')}}" tabindex="-1" aria-disabled="true">Registros Ventas</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark" type="submit">Search</button>
          </form>
        </div>
      </nav>  

        @yield('main')




  <footer>
      <div class="jumbotron pie_pagina bg-dark">
          <div class="container">
            <img src="{{ asset('img/icons-redesSociales/instagram.png')}}" class="iconsRedes" style="width: 2.5rem;" alt="">
            <img src="{{ asset('img/icons-redesSociales/facebook.png')}}" class="iconsRedes" style="width: 2.5rem;" alt="">
            <img src="{{ asset('img/icons-redesSociales/twitter.png')}}" class="iconsRedes" style="width: 2.5rem;" alt="">
            <img src="{{ asset('img/icons-redesSociales/pinterest.png')}}" class="iconsRedes" style="width: 2.5rem;" alt="">
            <img src="{{ asset('img/icons-redesSociales/github.png')}}" class="iconsRedes" style="width: 2.5rem;" alt="">
              <h1 class="display-4 text-light text-center"> Ibrain Martinez | Christopher Mora</h1>
              <p class="h5 text-light">© Corporation DTR 2021</p>
          </div>
      </div>
    </footer> 
  </body>
</html>
