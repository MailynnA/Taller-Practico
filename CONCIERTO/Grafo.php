<?php

class Grafo {
    private $adyacencia = [];

    public function agregarVertice($nombre) {
        if (!isset($this->adyacencia[$nombre])) {
            $this->adyacencia[$nombre] = [];
        }
    }

    public function agregarArista($artista1, $artista2) {
        if (!isset($this->adyacencia[$artista1])) {
            $this->agregarVertice($artista1);
        }
        if (!isset($this->adyacencia[$artista2])) {
            $this->agregarVertice($artista2);
        }

        $this->adyacencia[$artista1][] = $artista2;
        $this->adyacencia[$artista2][] = $artista1;
    }

    public function mostrarGrafo() {
        foreach ($this->adyacencia as $artista => $colaboradores) {
            echo "$artista colaborará con: " . (empty($colaboradores) ? "Nadie aún" : implode(", ", $colaboradores)) . "\n";
        }
    }
}

// Crear el grafo de artistas
$festival = new Grafo();

// Agregar artistas
$festival->agregarVertice("Maluma");
$festival->agregarVertice("Andres Cepeda");
$festival->agregarVertice("Manuel Turizo");
$festival->agregarVertice("J Balvin");
$festival->agregarVertice("Carin Leon");

// Definir nuevas colaboraciones en el escenario
$festival->agregarArista("Andres Cepeda", "Maluma");
$festival->agregarArista("Manuel Turizo", "Carin Leon");
$festival->agregarArista("J Balvin", "Maluma");
$festival->agregarArista("Andres Cepeda", "Manuel Turizo");

// Mostrar la red de colaboraciones
echo "Red de colaboraciones en el concierto:\n";
$festival->mostrarGrafo();

?>
