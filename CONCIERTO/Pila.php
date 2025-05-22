<?php

class Pila {
    // Aquí se guardaran los pasos de la persona
    private $elementos = array();

    // Funcion para agregar un paso (push)
    public function push($paso) {
        $this->elementos[] = $paso;  // Agrega al final del arreglo
    }

    // Funcion para quitar el ultimo paso (pop)
    public function pop() {
        return array_pop($this->elementos); // Elimina y devuelve el ultimo paso
    }

    // Funcion para mostrar los pasos al reves (del ultimo al primero)
    public function mostrar() {
        return array_reverse($this->elementos);
    }
}

// Crear una nueva pila para el recorrido de la persona en el concierto
$recorrido = new Pila();

// Agregar los pasos que sigue una persona para entrar al concierto
$recorrido->push("1. Llego al estadio");
$recorrido->push("2. Mostro su boleta en la entrada");
$recorrido->push("3. Paso el control de seguridad");
$recorrido->push("4. Entro a la zona del concierto");
$recorrido->push("5. Encontro su asiento o lugar");

// Mostrar el recorrido completo en orden inverso (ultimo paso primero)
echo "Recorrido de la persona para entrar al concierto:\n";
foreach ($recorrido->mostrar() as $paso) {
    echo "- $paso\n";
}

?>
