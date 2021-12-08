@extends('layout')
@section('title', 'CREAR USUARIO')
@section('main')
    <main class="container">
        <h4>Editar cliente</h4>
        <div class="row">
            <div class="col xl 12 m-3">
                <form action="{{route('pcrear.update',$productos->id)}}" method="POST" >
                    @csrf
                    @method('PUT')
                    <div class="form-group"> 
                        <label for="nombreP">nombre del producto</label>
                        <input type="text" class="form-control" name="nombreP" placeholder="solo el modelo del producto"  required   pattern="[a-z]{1,50}" title="solo carácteres de letra" value="{{$productos->nombreP}}">
                    </div>
                    <div class="form-group">
                        <label for="cantidad">cantidad</label>
                        <input type="tel" class="form-control" name="cantidad"  placeholder=""  minlength="1" maxlength="3"  pattern="[0-9]{9-9}" title="solo carácteres de números" required onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" value="{{$productos->cantidad}}">
                    </div>
                    <div class="form-group">
                        <label for="talla">Talla</label>
                        <input type="tel" class="form-control" name="talla"  placeholder="numero de 9 digitos"  minlength="1" maxlength="2"  pattern="[0-9]{9-9}" title="solo carácteres de números" required onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" value="{{$productos->talla}}">
                    </div>
                    <div class="form-group">
                        <label for="precio">precio</label>
                        <input type="tel" class="form-control" name="precio"   minlength="1" maxlength="5" pattern="[0-9]{9-9}" title="solo carácteres de números" required  onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" value="{{$productos->precio}}">
                    </div>
                    <div class="form-group">
                        <label for="color">color</label>
                        <input type="text" class="form-control" name="color"   minlength="1" maxlength="15"  pattern="[a-z]{0-9}" >
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