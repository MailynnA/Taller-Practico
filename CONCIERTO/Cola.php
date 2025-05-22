<?php

// Definimos una clase Cola para manejar la fila de compra de boletas
class Cola {
    private $elementos = array();

    // Agrega una persona al final de la cola
    public function enqueue($persona) {
        array_push($this->elementos, $persona);
    }

    // Atiende a la primera persona (el primero que llegó)
    public function dequeue() {
        return array_shift($this->elementos);
    }

    // Devuelve la lista actual de personas en la cola
    public function mostrar() {
        return $this->elementos;
    }
}

// Creamos una nueva instancia de la cola
$filaBoletas = new Cola();

// Agregamos algunas personas a la fila para comprar boletas
$filaBoletas->enqueue("Persona 1: Sara");
$filaBoletas->enqueue("Persona 2: Andrea");
$filaBoletas->enqueue("Persona 3: Mateo");

// Mostrar la fila actual
echo "Fila para comprar boletas:\n";
foreach ($filaBoletas->mostrar() as $persona) {
    echo "- $persona\n";
}

// Atendemos a la primera persona
echo "\nAtendiendo al primero en la fila...\n";
$atendido = $filaBoletas->dequeue();
echo "Persona atendida: $atendido\n";

// Mostrar la fila después de atender al primero
echo "\nFila después de atender al primero:\n";
foreach ($filaBoletas->mostrar() as $persona) {
    echo "- $persona\n";
}

?>
