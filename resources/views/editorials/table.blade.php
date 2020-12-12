<div class="table-responsive">
    <table class="table" id="editorials-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Sede</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($editorials as $editorial)
            <tr>
                <td>{{ $editorial->nombre }}</td>
                <td>{{ $editorial->sede }}</td>
                <td>
                    {!! Form::open(['route' => ['editorials.destroy', $editorial->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('editorials.show', [$editorial->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('editorials.edit', [$editorial->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Está seguro que desea eliminar la editorial?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
