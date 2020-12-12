<div class="table-responsive">
    <table class="table" id="books-table">
        <thead>
            <tr>
                <th>Isbn</th>
                <!-- <th>Editoriales Id</th> -->
                <th>Titulo</th>
                <th>Sinopsis</th>
                <th>N Paginas</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($books as $books)
            <tr>
                <td>{{ $books->ISBN }}</td>
            <!-- <td>{{ $books->editoriales_id }}</td> -->
                <td>{{ $books->titulo }}</td>
                <td>{{ $books->sinopsis }}</td>
                <td>{{ $books->n_paginas }}</td>
                <td>
                    {!! Form::open(['route' => ['books.destroy', $books->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('books.show', [$books->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('books.edit', [$books->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Está seguro que desea eliminar el libro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
