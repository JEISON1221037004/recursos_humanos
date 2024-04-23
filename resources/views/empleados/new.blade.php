{{-- resources/views/empleados/new.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Nuevo Empleado</h1>
    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>
        <div class="mb-3">
            <label for="posición" class="form-label">Posición</label>
            <input type="text" class="form-control" id="posición" name="posición" required>
        </div>
        <div class="mb-3">
            <label for="departamento_id" class="form-label">Departamento</label>
            <select class="form-select" id="departamento_id" name="departamento_id" required>
                @foreach(App\Models\Departamento::all() as $departamento)
                <option value="{{ $departamento->id }}">
                    {{ $departamento->nombre }}
                </option>
                @endforeach
            </select
        </div>
        <div class="mb-3">
            <label for="fecha_contratación" class="form-label">Fecha de Contratación</label>
            <input type="date" class="form-control" id="fecha_contratación" name="fecha_contratación" required>
        </div>
        <div class="mb-3">
            <label for="salario" class="form-label">Salario</label>
            <input type="number" class="form-control" id="salario" name="salario" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>
@endsection
