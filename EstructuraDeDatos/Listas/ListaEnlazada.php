<?php
// Clase Nodo
class Nodo {
    public $dato;
    public $siguiente;

    public function __construct($dato) {
        $this->dato = $dato;
        $this->siguiente = null;
    }
}

// Clase ListaEnlazada
class ListaEnlazada {
    private $cabeza;

    public function __construct() {
        $this->cabeza = null;
    }

    // Método para agregar un nodo al final
    public function agregarNodo($dato) {
        $nuevoNodo = new Nodo($dato);
        
        if ($this->cabeza === null) {
            $this->cabeza = $nuevoNodo;
        } else {
            $nodoActual = $this->cabeza;
            while ($nodoActual->siguiente !== null) {
                $nodoActual = $nodoActual->siguiente;
            }
            $nodoActual->siguiente = $nuevoNodo;
        }
    }

    // Método para mostrar la lista enlazada
    public function mostrarLista() {
        $nodoActual = $this->cabeza;
        while ($nodoActual !== null) {
            echo $nodoActual->dato . " -> ";
            $nodoActual = $nodoActual->siguiente;
        }
        echo "null\n";
    }
}

// Ejemplo de uso
$lista = new ListaEnlazada();
$lista->agregarNodo(1);
$lista->agregarNodo(2);
$lista->agregarNodo(3);
$lista->mostrarLista();
?>
