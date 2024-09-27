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

    //elimina el indice dado
    public function deleteIndex($indice) {
        if ($this->cabeza === null) {
            echo "La lista está vacía.\n";
            return;
        }

        // Caso especial: si se quiere eliminar el primer nodo (índice 0)
        if ($indice == 0) {
            $this->cabeza = $this->cabeza->siguiente;
            return;
        }

        // Recorrer la lista para encontrar el nodo en el índice
        $nodoActual = $this->cabeza;
        $anterior = null;
        $contador = 0;

        while ($nodoActual !== null && $contador < $indice) {
            $anterior = $nodoActual;
            $nodoActual = $nodoActual->siguiente;
            $contador++;
        }

        // Si el índice es mayor que la cantidad de nodos
        if ($nodoActual === null) {
            echo "El índice $indice está fuera de rango.\n";
            return;
        }

        // Eliminar el nodo ajustando los enlaces
        $anterior->siguiente = $nodoActual->siguiente;
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

$lista->deleteIndex(1);  // Elimina el nodo en el índice 1 (valor 2)
$lista->mostrarLista();  // Muestra la lista después de eliminar el nodo
?>
