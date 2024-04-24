{{-- resources/views/asistencias/new.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Nueva Asistencia</h1>
    <form action="{{ route('asistencias.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="empleado_id" class="form-label">Empleado</label>
            <select class="form-select" id="empleado_id" name="empleado_id" required>
                @foreach(App\Models\Empleado::all() as $empleado)
                <option value="{{ $empleado->id }}">
                    {{ $empleado->nombre }} {{ $empleado->apellido }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
        </div>
        <div class="mb-3">
            <label for="hora_entrada" class="form-label">Hora de Entrada</label>
            <input type="time" class="form-control" id="hora_entrada" name="hora_entrada" required>
        </div>
        <div class="mb-3">
            <label for="hora_salida" class="form-label">Hora de Salida</label>
            <input type="time" class="form-control" id="hora_salida" name="hora_salida" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>
@endsection
