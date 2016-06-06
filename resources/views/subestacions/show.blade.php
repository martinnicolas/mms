@extends('layouts.app')

@section('content')
    @include('subestacions.show_fields')

    <div class="form-group">
           <a href="{!! route('subestacions.index') !!}" class="btn btn-default">Volver</a>
    </div>
@endsection
