@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agregar una imagen</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open([
                'route' => 'admin.fotos.store',
                'enctype' => 'multipart/form-data'
            ]) !!}

            @include('admin.fotos.partials.form')

            {!! Form::submit('Agregar imagen', [
                'class' => 'btn btn-primary',
            ]) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop