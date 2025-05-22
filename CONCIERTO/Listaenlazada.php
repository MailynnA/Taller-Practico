<?php

class Nodo {
    public $dato;
    public $siguiente;

    public function __construct($dato) {
        $this->dato = $dato;
        $this->siguiente = null;
    }
}

class ListaEnlazada {
    public $cabeza;

    public function __construct() {
        $this->cabeza = null;
    }

    public function insertar($dato) {
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

    public function imprimir() {
        $nodoActual = $this->cabeza;

        echo "Mapa de localizaciones dentro del concierto:\n";
        while ($nodoActual !== null) {
            echo "- " . $nodoActual->dato . "\n";
            $nodoActual = $nodoActual->siguiente;
        }
    }
}

// Crear la lista de localizaciones del concierto
$zonas = new ListaEnlazada();

$zonas->insertar("Entrada principal");
$zonas->insertar("Zona General");
$zonas->insertar("Zona VIP");
$zonas->insertar("Palco 1");
$zonas->insertar("Palco 2");
$zonas->insertar("Baños");

// Imprimir el recorrido de zonas
$zonas->imprimir();

?>