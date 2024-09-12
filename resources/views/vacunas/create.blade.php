<!-- resources/views/vacunas/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Crear Vacuna</title>
</head>
<body>
    <h1>Crear Nueva Vacuna</h1>
    <form method="POST" action="/vacunas">
        @csrf
        <label>Lote:</label>
        <input type="number" name="Lote" required>
        <br>
        <label>Fecha de Vencimiento:</label>
        <input type="date" name="fecha_vencimiento" required>
        <br>
        <label>Nombre de la Vacuna:</label>
        <input type="text" name="nombre_vacuna" required>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
