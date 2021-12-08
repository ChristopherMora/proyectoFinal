@extends('layout')
@section('title', 'INICIO')
@section('main')
<main class="margen1">
  <div class="container-fluid">
      <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-interval="3000">
              <img src="./img/carrusel/3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="3000">
              <img src="./img/carrusel/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/carrusel/1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/carrusel/4.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
  </div>

  <div class="container px-lg-5">
    <div class="row mx-lg-n5">
      <div class="col py-3 px-lg-5 border bg-light margen2">
        <h2>Nuevas novedades</h2>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere magni autem fugiat distinctio explicabo pariatur asperiores illum deserunt ea! Eaque dolore molestiae a aliquid nam voluptas libero maxime, soluta blanditiis? Ipsam unde sequi maiores beatae? Dolores dolorum aperiam voluptatum corporis laborum?
        </p>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere magni autem fugiat distinctio explicabo pariatur asperiores illum deserunt ea! Eaque dolore molestiae a aliquid nam voluptas libero maxime, soluta blanditiis? Ipsam unde sequi maiores beatae? Dolores dolorum aperiam voluptatum corporis laborum?
        </p>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere magni autem fugiat distinctio explicabo pariatur asperiores illum deserunt ea! Eaque dolore molestiae a aliquid nam voluptas libero maxime, soluta blanditiis? Ipsam unde sequi maiores beatae? Dolores dolorum aperiam voluptatum corporis laborum?
        </p>
        
        <p>
          <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Leer más
          </button>
        </p>
        <div class="collapse" id="collapseExample">
          <div class="card card-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, pariatur quo optio aliquid ad obcaecati harum illum? Quas amet maxime nemo, numquam architecto ut, a, cum provident quo corrupti nam eum. Corporis, odit adipisci?
          </div>
        </div>


      </div>
      <div class="col py-3 px-lg-5 border bg-light margen2">
        <h2>Colaboraciones</h2>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere magni autem fugiat distinctio explicabo pariatur asperiores illum deserunt ea! Eaque dolore molestiae a aliquid nam voluptas libero maxime, soluta blanditiis? Ipsam unde sequi maiores beatae? Dolores dolorum aperiam voluptatum corporis laborum?
        </p>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere magni autem fugiat distinctio explicabo pariatur asperiores illum deserunt ea! Eaque dolore molestiae a aliquid nam voluptas libero maxime, soluta blanditiis? Ipsam unde sequi maiores beatae? Dolores dolorum aperiam voluptatum corporis laborum?
        </p>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere magni autem fugiat distinctio explicabo pariatur asperiores illum deserunt ea! Eaque dolore molestiae a aliquid nam voluptas libero maxime, soluta blanditiis? Ipsam unde sequi maiores beatae? Dolores dolorum aperiam voluptatum corporis laborum?
        </p>
      
        <p>
          <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
            Leer más
          </button>
        </p>
        <div class="collapse" id="collapseExample1">
          <div class="card card-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, pariatur quo optio aliquid ad obcaecati harum illum? Quas amet maxime nemo, numquam architecto ut, a, cum provident quo corrupti nam eum. Corporis, odit adipisci?
          </div>
      
      </div>
    </div>
  </div>

  
</main>
@endsection
