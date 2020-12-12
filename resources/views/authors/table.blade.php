<div class="table-responsive">
    <table class="table" id="authors-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($authors as $author)
            <tr>
                <td>{{ $author->nombre }}</td>
                <td>{{ $author->apellidos }}</td>
                <td>
                    {!! Form::open(['route' => ['authors.destroy', $author->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('authors.show', [$author->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('authors.edit', [$author->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Está seguro que desea eliminar el autor?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
