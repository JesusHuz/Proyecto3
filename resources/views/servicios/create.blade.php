@extends('layouts.app')

@section('content')

    <h1>Adquirir Servicio</h1>

    {!! Form::model(
        $servicio = new \App\Servicio,
        [
            'route' => 'servicios.store',
        ]
    ) !!}

        @include('servicios.form')

    {!! Form::close() !!}

@endsection
