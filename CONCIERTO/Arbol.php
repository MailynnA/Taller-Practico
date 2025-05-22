<?php

class NodoArbol {
    public $valor;
    public $izquierda;
    public $derecha;

    public function __construct($valor) {
        $this->valor = $valor;
        $this->izquierda = null;
        $this->derecha = null;
    }
}

// Función para recorrido preorden que muestra las rutas
function preorden($nodo) {
    if ($nodo !== null) {
        echo "- " . $nodo->valor . "\n";
        preorden($nodo->izquierda);
        preorden($nodo->derecha);
    }
}

// Crear nodos para las rutas sugeridas
$raiz = new NodoArbol("L25");

$raiz->izquierda = new NodoArbol("H72");
$raiz->derecha = new NodoArbol("H21");

$raiz->izquierda->izquierda = new NodoArbol("B72");

// Mostrar las rutas recomendadas
echo "Rutas recomendadas para llegar al campin:\n";
preorden($raiz);

?>