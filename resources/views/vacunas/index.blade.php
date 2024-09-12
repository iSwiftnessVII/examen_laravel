<!-- resources/views/vacunas/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Vacunas</title>
</head>
<body>
    <h1>Listado de Vacunas</h1>
    <ul>
        @foreach ($vacunas as $vacuna)
            <li>{{ $vacuna->nombre_vacuna }} - Lote: {{ $vacuna->Lote }}</li>
        @endforeach
    </ul>
</body>
</html>
