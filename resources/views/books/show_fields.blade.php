<!-- Isbn Field -->
<div class="form-group">
    {!! Form::label('ISBN', 'Isbn:') !!}
    <p>{{ $books->ISBN }}</p>
</div>

<!-- Editoriales Id Field -->
<!-- <div class="form-group">
    {!! Form::label('editoriales_id', 'Editoriales Id:') !!}
    <p>{{ $books->editoriales_id }}</p>
</div> -->

<!-- Titulo Field -->
<div class="form-group">
    {!! Form::label('titulo', 'Titulo:') !!}
    <p>{{ $books->titulo }}</p>
</div>

<!-- Sinopsis Field -->
<div class="form-group">
    {!! Form::label('sinopsis', 'Sinopsis:') !!}
    <p>{{ $books->sinopsis }}</p>
</div>

<!-- N Paginas Field -->
<div class="form-group">
    {!! Form::label('n_paginas', 'N Paginas:') !!}
    <p>{{ $books->n_paginas }}</p>
</div>

