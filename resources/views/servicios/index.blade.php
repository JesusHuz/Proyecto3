@extends('layouts.app')

@section('content')


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
            <th>Correo electronico</th>
            <td>{{ Auth::user()->email }}</td>
        </tr>
        <tr>
            <th>Plan telefonico: </th>
            <td>{{ $servicios->telefono }}</td>
        </tr>
        <tr>
            <th>Plan internet: </th>
            <td>{{ $servicios->internet }}</td>
        </tr>
        <tr>
            <th>Plan cable: </th>
            <td>{{ $servicios->cable }}</td>
        </tr>
        <tr>
            <td>
                <a href="{{ route ('servicios.show',$servicios) }}">
                    Factura
                </a>
            </td>
            <td>
                <a href="{{ route ('servicios.edit',$servicios) }}">
                    Modificar Servicio
                </a>
            </td>
        </tr>

    </table>
@endsection