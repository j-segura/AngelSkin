<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese el nombre del nuevo articulo ...',
    ]) !!}

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese el slug del nuevo articulo ...',
        'readonly',
    ]) !!}

    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('image', 'Imagen:') !!}
    {!! Form::file('image', [
        'class' => 'form-control',
    ]) !!}

    @error('image')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese una descripcion del nuevo articulo ...',
    ]) !!}

    @error('descripcion')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>


<div class="form-group">
    {!! Form::label('precio', 'Precio:') !!}
    {!! Form::number('precio', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese el precio del nuevo articulo ...',
    ]) !!}

    @error('precio')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('categoria_id', 'Categoria:') !!}
    {!! Form::select('categoria_id', $categorias, null, [
        'class' => 'form-control',
    ]) !!}

    @error('categoria_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>


<div class="form-group">
    {!! Form::label('marca_id', 'Marca:') !!}
    {!! Form::select('marca_id', $marcas, null, [
        'class' => 'form-control',
    ]) !!}

    @error('marca_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

