@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h3 class="pull-left">Editar Subestación</h3>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($subestacion, ['route' => ['subestacions.update', $subestacion->id], 'method' => 'patch']) !!}

            @include('subestacions.fields')

            {!! Form::close() !!}
        </div>
@endsection