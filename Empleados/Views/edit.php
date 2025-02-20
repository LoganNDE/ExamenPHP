<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<h1>Editar Empleado</h1>
    <form method="POST" action="index.php?action=edit&id=<?= $empleado['id'] ?>">
<label for="nombre">Nombre:</label>
<input type="text" name="nombre" value="<?= $empleado['nombre'] ?>"
required>
<br>
<label for="edad">Edad:</label>
<input type="text" name="edad" value="<?= $empleado['edad'] ?>"
required>
<br>
<label for="telefono">Telefono:</label>
<input type="text" name="telefono" value="<?= $empleado['telefono'] ?>" required>
<br>
<label for="cargo">Cargo:</label>
<input type="text" name="cargo" value="<?= $empleado['cargo'] ?>" required>
<button type="submit">Actualizar</button>
</form>