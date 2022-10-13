@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>fotos de galeria</h1>
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
                <a href="{{ route('admin.fotos.create') }}" class="btn btn-secondary">Agregar nueva imagen</a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fotos as $foto)
                        <tr>
                            <td>{{ $foto->id }}</td>
                            <td>
                                <img width="400px" src="/img/gallery/{{ $foto->image }}">
                            </td>
                            <td width="10px">
                                <a href="{{ route('admin.fotos.edit', $foto) }}"
                                    class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.fotos.destroy', $foto) }}" method="POST">
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
