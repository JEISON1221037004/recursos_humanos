{{-- resources/views/departamentos/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Departamento</h1>
    <form action="{{ route('departamentos.update', $departamento->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $departamento->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="ubicación" class="form-label">Ubicación</label>
            <input type="text" class="form-control" id="ubicación" name="ubicación" value="{{ $departamento->ubicación }}" required>
        </div>
        <div class="mb-3">
            <label for="número_telefono" class="form-label">Número de Teléfono</label>
            <input type="text" class="form-control" id="número_telefono" name="número_telefono" value="{{ $departamento->número_telefono }}" required>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
