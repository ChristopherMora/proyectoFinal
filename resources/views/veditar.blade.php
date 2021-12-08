@extends('layout')
@section('title', 'CREAR USUARIO')
@section('main')
    <main class="container">
        <h4>Editar cliente</h4>
        <div class="row">
            <div class="col xl 12 m-3">
                <form action="{{route('vcrear.update',$ventas1->id)}}" method="POST" >
                    @csrf
                    @method('PUT')
                    <div class="form-group"> 
                        <label for="nombresV">Nombre</label>
                        <input type="text" class="form-control" name="nombresV" placeholder="solo el primer nombre"  required   pattern="[a-zA-Z]{1,50}" title="solo carácteres de letra" value="{{$ventas1->nombresV}}">
                    </div>
                    <div class="form-group">
                        <label for="apellidosV">Apellido</label>
                        <input type="text" class="form-control" name="apellidosV" placeholder="solo el primer apellido" required   pattern="[a-zA-Z]{1,15}" title="solo carácteres de letra" value="{{$ventas1->apellidosV}}">
                    </div>
                    <div class="form-group">
                        <label for="telefonoV">telefono</label>
                        <input type="tel" class="form-control" name="telefonoV"  placeholder="numero de 9 digitos"  minlength="9" maxlength="9"  pattern="[0-9]{9-9}" title="solo carácteres de números" required onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" value="{{$ventas1->telefonoV}}">
                    </div>
                    <div class="form-group">
                        <label for="productosT">Total de Productos</label>
                        <input type="tel" class="form-control" name="productosT"   minlength="1" maxlength="3" pattern="[0-9]{9-9}" title="solo carácteres de números" required  onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" value="{{$ventas1->productosT}}">
                    </div>
                    <div class="form-group">
                        <label for="precioT">Precio Total</label>
                        <input type="tel" class="form-control" name="precioT"   minlength="1" maxlength="5" pattern="[0-9]{9-9}" title="solo carácteres de números" required  onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" value="{{$ventas1->precioT}}">
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