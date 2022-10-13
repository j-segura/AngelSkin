@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agregar una imagen</h1>
@stop

@section('content')
    <div class="card">

        <div class="image_banner">
            <strong class="form-label ">Imagen actual:</strong>
            <img src="/img/gallery/{{ $foto->image }}" class="banner_admin_edit">
        </div>

        <div class="card-body">
            {!! Form::model($foto, [
                'route' => ['admin.fotos.update', $foto],
                'method' => 'put',
                'enctype' => 'multipart/form-data',
            ]) !!}

            @include('admin.fotos.partials.form')

            {!! Form::submit('Actualizar imagen', [
                'class' => 'btn btn-primary',
            ]) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop


<style>
    .image_banner {
        display: flex;
        flex-direction: column;
        padding: 20px;
    }

    .image_banner strong {
        margin-bottom: 15px;
    }

    .banner_admin_edit {
        width: 70%;
        height: 400px;
        object-fit: cover;
        margin-bottom: 15px;
    }
</style>