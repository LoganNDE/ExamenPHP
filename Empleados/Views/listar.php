<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<h1>Lista de Empleados</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Género</th>
        <th>Precio</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($empleados as $empleado): ?>
    <tr>
        <td><?= $empleado['nombre'] ?></td>
        <td><?= $empleado['edad'] ?></td>
        <td><?= $empleado['telefono'] ?></td>
        <td><?= $empleado['cargo'] ?></td>
    <td>
        <a href="index.php?action=edit&id=<?= $empleado['id'] ?>">Editar</a>
    </td>
</tr>
<?php endforeach; ?>
</table>