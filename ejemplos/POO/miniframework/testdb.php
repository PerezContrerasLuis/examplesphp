<?php
try {
    // test http://localhost:8888/miniframework/testdb.php
    // Datos de conexión
    $dsn = 'mysql:host=localhost;dbname=mini_framework;charset=utf8';
    $username = 'root';
    $password = 'root';

    // Crear instancia PDO
    $db = new PDO($dsn, $username, $password);
    // Configurar PDO para que lance excepciones en caso de error
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Sentencia SQL para seleccionar todos los registros de la tabla usuarios
    $sql = 'SELECT * FROM usuarios';

    // Preparar la consulta
    $stmt = $db->prepare($sql);

    // Ejecutar la consulta
    $stmt->execute();

    // Obtener todos los resultados como un array asociativo
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Mostrar resultados
    foreach ($resultados as $fila) {
        // Supongamos que la tabla 'usuarios' tiene un campo 'nombre'
        echo 'ID: ' . $fila['id'] . ' | Nombre: ' . $fila['nombre'] . '<br>';
    }

} catch (PDOException $e) {
    // Manejo de errores
    echo 'Error al conectar o consultar: ' . $e->getMessage();
}

?>