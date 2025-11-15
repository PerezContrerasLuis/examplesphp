<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
<h1>Lista de usuarios registrados</h1>
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Activo</th>
    </tr>
    </thead>
    <tbody>
    <?php if (!empty($usuarios)): ?>
        <?php foreach ($usuarios as $u): ?>
            <tr>
                <td><?= $u['id'] ?></td>
                <td><?= $u['nombre'] ?></td>
                <td><?= $u['apellido'] ?></td>
                <td><?= $u['email'] ?></td>
                <td><?= $u['activo'] ? 'Sí' : 'No' ?></td>
                <td>
                    <?php if (!empty($u['direcciones'])): ?>
                        <ul>
                            <?php foreach ($u['direcciones'] as $dir): ?>
                                <li>
                                    <?= $dir['calle'] . " # " . $dir['numero'] . ", " . $dir['ciudad'] ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        Sin dirección
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="5">No hay usuarios registrados.</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>
<form action="index.php?controller=UsuarioController&action=store" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit">Agregar Usuario</button>
</form>
</body>
</html>


