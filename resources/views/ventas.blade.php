@extends('layout')
@section('title', 'REGRISTO VENTAS')
@section('main')

<main class="container">
    <h4>Registro ventas</h4>
    <div class="col xl 12 m-3">
        <form action="{{route('ventas.index')}}" method="GET">
            <div class="form-row">
                <div class="col-sm-4">
                    <input name="texto2" type="text" class="form-control" value="{{$texto2}}">
                </div>
                <div class="col-auto">
                    <input  type="submit" class="btn btn-success" value="Buscar">
                </div>
                <div class="col-auto">
                    <a href="{{route('ventas.create')}}" class="btn btn-primary">Nuevo</a>
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
                            <th>Telefono</th>
                            <th>ProductosT</th>
                            <th>PrecioT</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        @foreach ($ventas1 as $ventas)
                    
                        
                        <tr>
                            <td>
                            <a href="{{route('ventas.edit', $ventas->id)}}" class="btn btn-warning btn-sm"> Editar </a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{$ventas->id}}">
                                    Eliminar
                            </button>
                            </td>
                            <td>{{$ventas->id}}</td>
                            <td>{{$ventas->nombresV}}</td>
                            <td>{{$ventas->apellidosV}}</td>
                            <td>{{$ventas->telefonoV}}</td>
                            <td>{{$ventas->productosT}}</td>
                            <td>{{$ventas->precioT}}</td>
                        </tr>
                        @include('vborrar')
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
        
    </section>
</main>
    
@endsection