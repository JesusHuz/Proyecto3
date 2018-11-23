@extends('layouts.app')

@section('content')

        <h1> Modificacion de Servicios</h1>

    {!! Form::model(
        $servicios,
        [
            'route' => ['servicios.update', $servicios],
            'method' => 'PUT' //y metodo put crea un campo oculto apra el put pero seta post
        ]
    ) !!}

        @include('servicios.form')

    {!! Form::close() !!}

    

@endsection