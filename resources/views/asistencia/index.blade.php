{{-- resources/views/asistencias/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Asistencias</h1>
    <a href="{{ route('asistencias.create') }}" class="btn btn-primary">Agregar Asistencia</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Empleado ID</th>
                <th>Fecha</th>
                <th>Hora Entrada</th>
                <th>Hora Salida</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($asistencias as $asistencia)
            <tr>
                <td>{{ $asistencia->id }}</td>
                <td>{{ $asistencia->empleado->nombre }} {{ $asistencia->empleado->apellido }}</td>
                <td>{{ $asistencia->fecha }}</td>
                <td>{{ $asistencia->hora_entrada }}</td>
                <td>{{ $asistencia->hora_salida }}</td>
                <td>
                    <a href="{{ route('asistencias.edit', $asistencia->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('asistencias.destroy', $asistencia->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
