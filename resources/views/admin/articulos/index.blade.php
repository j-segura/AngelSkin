@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de articulos</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="card-header pl-0">
                <a href="{{ route('admin.articulos.create') }}" class="btn btn-secondary">Agregar nuevo articulo</a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articulos as $articulo)
                        <tr>
                            <td>{{ $articulo->id }}</td>
                            <td>
                                <img src="/img/articulos/{{ $articulo->image }}" class="img_foto_admin">
                            </td>
                            <td>{{ $articulo->name }}</td>
                            <td width="10px">
                                <a href="{{ route('admin.articulos.edit', $articulo) }}"
                                    class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.articulos.destroy', $articulo) }}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Eliminar
                                    </button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

<style>
    .img_foto_admin {
        width: 150px;
        height: 190px;
        object-fit: cover;
    }
</style>