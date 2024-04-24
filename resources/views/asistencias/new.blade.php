<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">

    <title>Agregar Nueva Asistencia</title>
</head>
<body>
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
        <a href="{{ route('asistencias.index') }}" class="btn btn-warning">Cancelar</a>
    </form>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
