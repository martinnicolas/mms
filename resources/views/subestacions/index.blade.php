@extends('layouts.app')

@section('content')
        <h3 class="pull-left">Subestaciones</h3>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('subestacions.create') !!}">Agregar nueva</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('subestacions.table')
        
@endsection