<table class="table table-bordered table-striped table-responsive table-hover" id="subestacions-table">
    <thead>
        <th>Código</th>
        <th>Nombre</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($subestacions as $subestacion)
        <tr>
            <td>{!! $subestacion->codigo !!}</td>
            <td>{!! $subestacion->nombre !!}</td>
            <td style="width: inherit;">
                {!! Form::open(['route' => ['subestacions.destroy', $subestacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('subestacions.show', [$subestacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('subestacions.edit', [$subestacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estás seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>