{{-- resources/views/empleados/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Empleado</h1>
    <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $empleado->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $empleado->apellido }}" required>
        </div>
        <div class="mb-3">
            <label for="posición" class="form-label">Posición</label>
            <input type="text" class="form-control" id="posición" name="posición" value="{{ $empleado->posición }}" required>
        </div>
        <div class="mb-3">
            <label for="departamento_id" class="form-label">Departamento</label>
            <select class="form-select" id="departamento_id" name="departamento_id" required>
                @foreach(App\Models\Departamento::all() as $departamento)
                <option value="{{ $departamento->id }}" {{ $empleado->departamento_id == $departamento->id ? 'selected' : '' }}>
                    {{ $departamento->nombre }}
                </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
