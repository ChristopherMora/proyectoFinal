@extends('layout')
@section('title', 'CREAR USUARIO')
@section('main')
    <main class="container">
        <h4>Nuevo cliente</h4>
        <div class="row">
            <div class="col xl 12 m-3">
                <form action="{{route('crear.store')}}" method="POST" >
                    @csrf
                    <div class="form-group"> 
                        <label for="nombres">Nombre</label>
                        <input type="text" class="form-control" name="nombres" placeholder="solo el primer nombre"  required minlength="2" maxlength="15" pattern="[a-zA-Z]{1,50}" title="solo carácteres de letra">
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellido</label>
                        <input type="text" class="form-control" name="apellidos" placeholder="solo el primer apellido" required   pattern="[a-zA-Z]{1,15}" title="solo carácteres de letra">
                    </div>
                    <div class="form-group">
                        <label for="correoE">Correo Electrónico</label>
                        <input type="email" class="form-control" name="correoE"  placeholder="numero de 9 digitos"  minlength="5" maxlength="30"  pattern="[0-9]{9-9}" title="solo carácteres de números" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena">contraseña</label>
                        <input type="password" class="form-control" name="contrasena"   minlength="8" maxlength="15" title="" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">telefono</label>
                        <input type="tel" class="form-control" name="telefono"   minlength="1" maxlength="9" pattern="[0-9]{9-9}" title="solo carácteres de números" required  onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad</label>
                        <input type="tel" class="form-control" name="edad"   minlength="1" maxlength="2" pattern="[0-9]{9-9}" title="solo carácteres de números" required  onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control" name="direccion" placeholder="Calle y colonia" required minlength="10" maxlength="150" title="solo carácteres de letra">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <input type="reset" class="btn btn-danger" value="Cancelar">
                        <a href="javascript:history.back()">Ir al listado</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection


