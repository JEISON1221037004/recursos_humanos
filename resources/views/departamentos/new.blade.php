{{-- resources/views/departamentos/new.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Nuevo Departamento</h1>
    <form action="{{ route('departamentos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="ubicación" class="form-label">Ubicación</label>
            <input type="text" class="form-control" id="ubicación" name="ubicación" required>
        </div>
        <div class="mb-3">
            <label for="número_telefono" class="form-label">Número de Teléfono</label>
            <input type="text" class="form-control" id="número_telefono" name="número_telefono" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>
@endsection