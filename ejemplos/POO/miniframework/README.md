

### 🧱 Mini Framework en PHP

Este es un mini framework hecho en PHP con enfoque en la orientación a objetos (POO). Su propósito es servir como base ligera y comprensible para desarrollar aplicaciones web pequeñas o medianas, aplicando el patrón MVC (Modelo - Vista - Controlador).

⸻

## ⚙️ Requisitos
	•	PHP: versión 7.4 o superior
	•	Servidor Web: Apache, Nginx o MAMP/XAMPP para desarrollo local
	•	Base de datos: MySQL (por ahora), pero preparado para agregar SQL Server o PostgreSQL más adelante

⸻

## 📁 Estructura del Proyecto

``` bash

├── config/
│   └── database.php        ← Configuración de las conexiones a base de datos
│
├── Controllers/
│   └── UsuarioController.php  ← Lógica de negocio para usuarios
│
├── Core/
│   ├── Connection.php      ← Conexión PDO dinámica (MySQL, SQLServer, PostgreSQL)
│   ├── EntidadBase.php     ← Clase base para modelos: getAll(), save(), etc.
│   └── Route.php           ← Sistema de ruteo básico (controlador + acción)
│
├── Models/
│   └── Usuario.php         ← Modelo de la tabla usuarios (hereda de EntidadBase)
│
├── Views/
│   └── usuarios/
│       └── index.php       ← Vista para mostrar usuarios
│
├── index.php               ← Punto de entrada, incluye autoload y ruta
└── testdb.php              ← Script para pruebas de conexión
```

⸻

💡 ¿Qué hace este mini framework?
	•	Usa autoloading para cargar clases automáticamente.
	•	Tiene un sistema de ruteo simple, basado en parámetros ?controller=X&action=Y.
	•	Permite conectarse a diferentes motores de base de datos mediante configuración.
	•	Facilita la creación de modelos personalizados a través de herencia de EntidadBase.
	•	Soporta operaciones básicas como listar, guardar y editar datos usando métodos reutilizables.
	•	Puedes crear controladores personalizados para manejar la lógica y enviar datos a las vistas.

⸻

# ✨ Posibles Mejoras Futuras

Aquí algunas ideas para seguir mejorando este framework:

#### 0. Mejorar la gestión de configuración

Hoy se carga la configuración desde un archivo PHP con un array. Esto podría evolucionar a usar:
	•	Archivos .env con vlucas/phpdotenv￼
	•	Separar mejor los entornos (dev, prod, test)
	•	No depender de un “driver por defecto”, sino de un sistema más flexible
✅ ¿Qué problemas resuelve esta mejora?

Hoy estás usando un archivo config/database.php que retorna un array como este:

``` php
return [
    'default' => 'mysql',
    'connections' => [...]
];

```
Esto tiene limitaciones:
	•	Está estático y acoplado.
	•	No permite entornos dinámicos (dev, prod, test).
	•	No permite que el usuario cambie de conexión fácilmente.
	•	No puedes usar variables de entorno ni proteger credenciales correctamente.

⸻

🧪 Solución profesional: .env + vlucas/phpdotenv

Usaremos la librería vlucas/phpdotenv￼, que permite cargar variables de entorno desde un archivo .env. Esta práctica es usada en Laravel, Symfony, WordPress (moderno), etc. 

Tienes TODA la razón, Luis.
La solución anterior sí requiere instalar y configurar vlucas/phpdotenv, pero omití detallarlo paso a paso porque tú ya habías usado .env antes. Aun así, debe explicarse claramente, incluyendo instalación, inicialización y carga del entorno.

Aquí tienes ahora la guía completa, desde cero, con todo lo necesario para que funcione correctamente.
Tómate tu tiempo, está escrito de forma clara y detallada.

⸻

✅ Guía completa y correcta para implementar .env + múltiples conexiones

📌 Paso 0 — Instalar vlucas/phpdotenv

En tu proyecto, abre la terminal dentro de la carpeta:

/miniframework/

y ejecuta:
```bash
composer require vlucas/phpdotenv
```

Esto instalará el cargador de variables de entorno.

⸻

📌 Paso 1 — Crear archivo .env

En la raíz del proyecto:

miniframework/.env

Contenido:
```php
APP_ENV=dev

# Conexión activa
DB_CONNECTION=mysql

# Configuración MySQL
DB_MYSQL_DRIVER=mysql
DB_MYSQL_HOST=localhost
DB_MYSQL_PORT=3306
DB_MYSQL_DATABASE=mini_framework
DB_MYSQL_USERNAME=root
DB_MYSQL_PASSWORD=root

# Configuración PostgreSQL
DB_PGSQL_DRIVER=pgsql
DB_PGSQL_HOST=localhost
DB_PGSQL_PORT=5432
DB_PGSQL_DATABASE=mini_pg
DB_PGSQL_USERNAME=pg_user
DB_PGSQL_PASSWORD=pg_pass

# Configuración SQL Server
DB_SQLSRV_DRIVER=sqlsrv
DB_SQLSRV_HOST=localhost
DB_SQLSRV_PORT=1433
DB_SQLSRV_DATABASE=mini_sqlsrv
DB_SQLSRV_USERNAME=sa
DB_SQLSRV_PASSWORD=sqlsrv_pass

```
⸻

📌 Paso 2 — Crear bootstrap/init.php para cargar el entorno

Crea:

/bootstrap/init.php

Contenido:
```php
<?php

use Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
```
Esto carga todas las variables de .env en $_ENV.

⸻

📌 Paso 3 — Modificar index.php para cargar el entorno antes de todo

Archivo:

index.php

Contenido actualizado:
```php
<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/bootstrap/init.php';

spl_autoload_register(function ($class) {
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($classPath)) {
        require_once $classPath;
    }
});

\Core\Route::handleRequest();
```
✔ Aquí aseguramos que .env se cargue antes de usar Connection o cualquier modelo.

⸻

📌 Paso 4 — Crear clase DatabaseConfig

🗂 Core/DatabaseConfig.php
```php
<?php

namespace Core;

class DatabaseConfig
{
    public static function getActiveConnectionConfig(): array
    {
        $driver = $_ENV['DB_CONNECTION']; // mysql | pgsql | sqlsrv
        $prefix = strtoupper($driver);

        return [
            'driver'   => $_ENV["DB_{$prefix}_DRIVER"] ?? '',
            'host'     => $_ENV["DB_{$prefix}_HOST"] ?? '',
            'port'     => $_ENV["DB_{$prefix}_PORT"] ?? '',
            'database' => $_ENV["DB_{$prefix}_DATABASE"] ?? '',
            'username' => $_ENV["DB_{$prefix}_USERNAME"] ?? '',
            'password' => $_ENV["DB_{$prefix}_PASSWORD"] ?? '',
        ];
    }
}

```
⸻

📌 Paso 5 — Modificar Connection.php para soportar múltiples motores

🗂 Core/Connection.php
```php
<?php

namespace Core;

use PDO;
use PDOException;

class Connection
{
    private $connection;

    public function __construct()
    {
        $config = DatabaseConfig::getActiveConnectionConfig();

        $driver = $config['driver'];
        $host   = $config['host'];
        $port   = $config['port'];
        $db     = $config['database'];
        $user   = $config['username'];
        $pass   = $config['password'];

        if ($driver === 'mysql') {
            $dsn = "mysql:host={$host};port={$port};dbname={$db};charset=utf8mb4";
        } elseif ($driver === 'pgsql') {
            $dsn = "pgsql:host={$host};port={$port};dbname={$db}";
        } elseif ($driver === 'sqlsrv') {
            $dsn = "sqlsrv:Server={$host},{$port};Database={$db}";
        } else {
            throw new \Exception("Driver no soportado: {$driver}");
        }

        try {
            $this->connection = new PDO($dsn, $user, $pass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function getConnection(): PDO
    {
        return $this->connection;
    }
}
```

⸻

🎉 Resultado final

Ahora tu framework:

✔ Carga el entorno desde .env
✔ Soporta múltiples conexiones con prefijos (DB_MYSQL_, DB_PGSQL_, …)
✔ No usa arrays PHP estáticos
✔ No necesita definir un “default” dentro del código
✔ Selecciona la conexión según:

```php
DB_CONNECTION=mysql
```
✔ Cambias de motor sin tocar código → igual que Laravel

⸻




#### 1. Agregar paginación y validaciones

Funciones comunes como paginación, validación de formularios, middleware o manejo de errores pueden añadirse poco a poco.

#### 2. Cargar controladores automáticamente desde el nombre de clase

El ruteo puede mejorar soportando rutas “limpias” tipo /usuarios/crear, y dejando de usar $_GET.

#### 3. Usar un ORM o Active Record propio

Actualmente, el sistema de acceso a datos se basa en métodos genéricos. Se podría desarrollar un mini ORM o implementar un sistema estilo Eloquent (como Laravel), que permita usar algo como:

$usuarios = Usuario::where('activo', 1)->get();


🧩 ¿Qué es un “Mini Active Record”?

Es una clase base que representa una tabla de base de datos como un objeto PHP, y cada instancia representa un registro (fila). Permite hacer consultas, insertar, actualizar y eliminar datos usando una sintaxis orientada a objetos, sin escribir SQL directamente.

⸻

3.1. ¿Cómo se integra?

Se integra reemplazando o extendiendo tu clase EntidadBase actual. La idea es crear una clase Model o ActiveRecord que:
	•	Sepa a qué tabla pertenece automáticamente.
	•	Genere SQL dinámico con métodos como find(), where(), all(), save().
	•	Use PDO internamente como ya lo haces.

3.2. ¿Es una librería externa?

No. En este caso crearemos nuestro propio mini ORM sin usar librerías externas. Pero si quisieras usar uno externo, puedes usar:
	•	Idiorm (ligero): https://github.com/j4mie/idiorm
	•	Eloquent (Laravel)

Pero lo que queremos es hacerlo desde cero, y eso es excelente para aprender.

⸻

🧱 3.3. Implementación Paso a Paso

🗂️ Archivo: Core/ActiveRecord.php

Creamos una nueva clase ActiveRecord que reemplazará a EntidadBase en tus modelos:
``` php
<?php

namespace Core;

use PDO;
use Core\Connection;

abstract class ActiveRecord
{
    protected $table;
    protected $db;
    protected $attributes = [];

    public function __construct()
    {
        $this->db = (new Connection())->getConnection();

        if (!$this->table) {
            // Detecta nombre de tabla automáticamente: Ej. Usuario → usuarios
            $class = (new \ReflectionClass($this))->getShortName();
            $this->table = strtolower($class) . 's';
        }
    }

    // Establecer atributos dinámicamente
    public function __set($key, $value)
    {
        $this->attributes[$key] = $value;
    }

    public function __get($key)
    {
        return $this->attributes[$key] ?? null;
    }

    public static function all()
    {
        $instance = new static();
        $stmt = $instance->db->prepare("SELECT * FROM {$instance->table}");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id)
    {
        $instance = new static();
        $stmt = $instance->db->prepare("SELECT * FROM {$instance->table} WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function where($column, $value)
    {
        $instance = new static();
        $stmt = $instance->db->prepare("SELECT * FROM {$instance->table} WHERE {$column} = ?");
        $stmt->execute([$value]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function save()
    {
        if (isset($this->attributes['id'])) {
            // UPDATE
            $fields = implode(' = ?, ', array_keys($this->attributes)) . ' = ?';
            $sql = "UPDATE {$this->table} SET {$fields} WHERE id = ?";
            $stmt = $this->db->prepare($sql);
            $values = array_values($this->attributes);
            $values[] = $this->attributes['id'];
        } else {
            // INSERT
            $fields = implode(', ', array_keys($this->attributes));
            $placeholders = implode(', ', array_fill(0, count($this->attributes), '?'));
            $sql = "INSERT INTO {$this->table} ({$fields}) VALUES ({$placeholders})";
            $stmt = $this->db->prepare($sql);
            $values = array_values($this->attributes);
        }

        return $stmt->execute($values);
    }
}

``` 
⸻

3.4. 📦 Ejemplo de uso en el modelo

🗂️ Archivo: Models/Usuario.php
``` bash
<?php

namespace Models;

use Core\ActiveRecord;

class Usuario extends ActiveRecord
{
    // Puedes dejarlo vacío o definir $table si el nombre es distinto al plural de la clase
    protected $table = 'usuarios';
}
```

⸻

📟 Ejemplo en el controlador

🗂️ Controllers/UsuarioController.php
``` bash
public function index()
{
    $usuarios = \Models\Usuario::all(); // Sin necesidad de instanciar
    require_once 'views/usuarios/index.php';
}
```

⸻

🧠 ¿Qué cambia con ActiveRecord?

Antes (EntidadBase)	Ahora (ActiveRecord)
$usuario = new Usuario(); $usuario->getAll();	Usuario::all();
$usuario->save([...])	$usuario->nombre = 'Luis'; $usuario->save();
Necesitas crear setNombre, setEmail, etc.	Usa setters dinámicos ($usuario->nombre = ...)
Poco expresivo	Sintaxis limpia, tipo Laravel




⸻

## 📌 Conclusión

Este mini framework está diseñado para ayudarte a entender cómo funciona internamente una arquitectura MVC sin depender de grandes librerías o frameworks. Puedes extenderlo con tus propias clases, probar conceptos y escalarlo paso a paso.

