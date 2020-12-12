<!-- Isbn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ISBN', 'Isbn:') !!}
    {!! Form::number('ISBN', null, ['class' => 'form-control']) !!}
</div>

<!-- Editoriales Id Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('editoriales_id', 'Editoriales Id:') !!}
    {!! Form::number('editoriales_id', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Sinopsis Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('sinopsis', 'Sinopsis:') !!}
    {!! Form::textarea('sinopsis', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>

<!-- N Paginas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('n_paginas', 'N Paginas:') !!}
    {!! Form::text('n_paginas', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('books.index') }}" class="btn btn-default">Cancelar</a>
</div>
