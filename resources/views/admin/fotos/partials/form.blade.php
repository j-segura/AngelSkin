<div class="form-group">
    {!! Form::label('image', 'Imagen:') !!}
    {!! Form::file('image', [
        'class' => 'form-control'
    ]) !!}

    @error('image')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>