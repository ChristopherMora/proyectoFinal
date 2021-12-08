@extends('layout')
@section('title', 'CONTACTO')
@section('main')
<main class="margen1">
    <div class="container">
      
        <center><h2>Formulario de contacto</h2></center>
          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere magni autem fugiat distinctio explicabo pariatur asperiores illum deserunt ea! Eaque dolore molestiae a aliquid nam voluptas libero maxime, soluta blanditiis? Ipsam unde sequi maiores beatae? Dolores dolorum aperiam voluptatum corporis laborum?
          </p>
      <form>
        <div class="form-group">
                <div class="form-group">
                  <label for="formGroupExampleInput">Nombre(s)</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Escribe tus nombres" required>
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Apellido(s)</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Escribe tus apellidos" required>
                </div>
          <label for="exampleInputEmail1">Correo Electronico</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
          <small id="emailHelp" class="form-text text-muted">Escribe tu correo electronico personal</small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">¿Por Qué Deseas contactarnos?</label>
            <select class="form-control" id="exampleFormControlSelect1" required>
              <option>Queja</option>
              <option>Trabajo</option>
              <option>Crítica Constructiva</option>
              <option>Reembolso</option>
              <option>Publicidad</option>
              <option>Otro</option>
            </select>
          </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Describe tu cuestión</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
          </div>
          
            <div class="form-group">
              <label for="exampleFormControlFile1">Si es necesario coloca un archivo</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
          
            <button type="submit" class="btn btn-dark btn-lg">Enviar</button>
            <button type="reset" class="btn btn-danger btn-lg">Cancelar</button>
      </form>
    </div>
</main>
@endsection
