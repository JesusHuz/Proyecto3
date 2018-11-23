@extends('layouts.app')

@section('content')
    <h1>Factura {{ $servicio->id }}</h1>

    <table class="table table-bordered">
        <tr>
            <th>Nombre</th>
            <td>{{  Auth::user()->nombre }}</td>
        </tr>
        <tr>
            <th>Apellido</th>
            <td>{{ Auth::user()->apellido }}</td>
        </tr>
        <tr>
            <th>Cedula</th>
            <td>{{ Auth::user()->cedula }}</td>
        </tr>
        <tr>
            <th>Plan telefonico: </th>
            <td>{{ $servicio->telefono }}</td>
            <td>{{ $servicio->ctelefono }} bss</td>
        </tr>
        <tr>
            <th>Plan internet: </th>
            <td>{{ $servicio->internet }}</td>
            <td>{{ $servicio->cinternet }} bss</td>
        </tr>
        <tr>
            <th>Plan cable: </th>
            <td>{{ $servicio->cable }}</td>
            <td>{{ $servicio->ccable }} bss</td>
        </tr>
        <tr>
            <th>Total a pagar: </th>
            <td>{{ $servicio->total }}</td>
        </tr>
    </table>
@endsection