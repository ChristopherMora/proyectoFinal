@extends('layout')
@section('title', 'REGRISTO USUARIOS')
@section('main')

<main class="container">
    <h4>Registro usuarios</h4>
    <div class="col xl 12 m-3">
        <form action="{{route('usuarios.index')}}" method="GET">
            <div class="form-row">
                <div class="col-sm-4">
                    <input name="texto" type="text" class="form-control" value="{{$texto}}">
                </div>
                <div class="col-auto">
                    <input  type="submit" class="btn btn-success" value="Buscar">
                </div>
                <div class="col-auto">
                    <a href="{{route('crear.create')}}" class="btn btn-primary">Nuevo</a>
                </div>
            </div>
        </form>
    </div>
    <section class="row">
        <div class="col-xl-12">
            <div class="table-responsive">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>Opciones</th>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Correo E</th>
                            <th>Contraseña</th>
                            <th>Telefono</th>
                            <th>Edad</th>
                            <th>Dirección</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        @foreach ($listusuarios as $usuario)
                    
                        
                        <tr>
                            <td>
                            <a href="{{route('editar.edit',$usuario->id)}}" class="btn btn-warning btn-sm"> Editar </a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{$usuario->id}}">
                                    Eliminar
                            </button>
                            </td>
                            <td>{{$usuario->id}}</td>
                            <td>{{$usuario->nombres}}</td>
                            <td>{{$usuario->apellidos}}</td>
                            <td>{{$usuario->correoE}}</td>
                            <td>{{$usuario->contrasena}}</td>
                            <td>{{$usuario->telefono}}</td>
                            <td>{{$usuario->edad}}</td>
                            <td>{{$usuario->direccion}}</td>
                        </tr>
                        @include('borrar')
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
        
    </section>
</main>
    
@endsection