

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

0. Mejorar la gestión de configuración

Hoy se carga la configuración desde un archivo PHP con un array. Esto podría evolucionar a usar:
	•	Archivos .env con vlucas/phpdotenv￼
	•	Separar mejor los entornos (dev, prod, test)
	•	No depender de un “driver por defecto”, sino de un sistema más flexible

1. Agregar paginación y validaciones

Funciones comunes como paginación, validación de formularios, middleware o manejo de errores pueden añadirse poco a poco.

2. Cargar controladores automáticamente desde el nombre de clase

El ruteo puede mejorar soportando rutas “limpias” tipo /usuarios/crear, y dejando de usar $_GET.

3. Usar un ORM o Active Record propio

Actualmente, el sistema de acceso a datos se basa en métodos genéricos. Se podría desarrollar un mini ORM o implementar un sistema estilo Eloquent (como Laravel), que permita usar algo como:

$usuarios = Usuario::where('activo', 1)->get();


🧩 ¿Qué es un “Mini Active Record”?

Es una clase base que representa una tabla de base de datos como un objeto PHP, y cada instancia representa un registro (fila). Permite hacer consultas, insertar, actualizar y eliminar datos usando una sintaxis orientada a objetos, sin escribir SQL directamente.

⸻

1. ¿Cómo se integra?

Se integra reemplazando o extendiendo tu clase EntidadBase actual. La idea es crear una clase Model o ActiveRecord que:
	•	Sepa a qué tabla pertenece automáticamente.
	•	Genere SQL dinámico con métodos como find(), where(), all(), save().
	•	Use PDO internamente como ya lo haces.

2. ¿Es una librería externa?

No. En este caso crearemos nuestro propio mini ORM sin usar librerías externas. Pero si quisieras usar uno externo, puedes usar:
	•	Idiorm (ligero): https://github.com/j4mie/idiorm
	•	Eloquent (Laravel)

Pero lo que queremos es hacerlo desde cero, y eso es excelente para aprender.

⸻

🧱 3. Implementación Paso a Paso

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

📦 Ejemplo de uso en el modelo

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

