@extends('layout')
@section('title', 'REGRISTO PRODUCTOS')
@section('main')

<main class="container">
    <h4>Registro productos</h4>
    <div class="col xl 12 m-3">
        <form action="{{route('rproducto.index')}}" method="GET">
            <div class="form-row">
                <div class="col-sm-4">
                    <input name="texto1" type="text" class="form-control" value="{{$texto1}}">
                </div>
                <div class="col-auto">
                    <input  type="submit" class="btn btn-success" value="Buscar">
                </div>
                <div class="col-auto">
                    <a href="{{route('pcrear.create')}}" class="btn btn-primary">Nuevo</a>
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
                            <th>Producto</th>
                            <th>cantidad</th>
                            <th>talla</th>
                            <th>Precio</th>
                            <th>Color</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                    
                        
                        <tr>
                            <td>
                                <a href="{{route('rproducto.edit', $producto ->id)}}" class="btn btn-warning btn-sm"> Editar </a>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{$producto->id}}">
                                        Eliminar
                                </button>
                            </td>
                            <td>{{$producto->id}}</td>
                            <td>{{$producto->nombreP}}</td>
                            <td>{{$producto->cantidad}}</td>
                            <td>{{$producto->talla}}</td>
                            <td>{{$producto->precio}}</td>
                            <td>{{$producto->color}}</td>

                        </tr>
                        @include('pborrar')
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
        
    </section>
</main>
    
@endsection