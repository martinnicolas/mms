@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h3 class="pull-left">Crear nueva subestación</h3>
        </div>
    </div>

    @include('core-templates::common.errors')

    <div class="row">
        {!! Form::open(['route' => 'subestacions.store']) !!}

            @include('subestacions.fields')

        {!! Form::close() !!}
    </div>
@endsection