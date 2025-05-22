<?php

// Lista de conciertos disponibles
$conciertos = [
    [
        "dia" => "2025-06-01",
        "cantante" => "BTS",
        "capacidad" => 50000
    ],
    [
        "dia" => "2025-07-15",
        "cantante" => "The Weeknd",
        "capacidad" => 60000
    ],
    [
        "dia" => "2025-08-20",
        "cantante" => "Linkin Park",
        "capacidad" => 55000
    ]
];

// Mostrar la información de cada concierto
foreach ($conciertos as $concierto) {
    echo "Día del concierto: " . $concierto["dia"] . "\n";
    echo "Cantante principal: " . $concierto["cantante"] . "\n";
    echo "Capacidad del estadio: " . $concierto["capacidad"] . "\n";
    echo "-----------------------\n";
}

?>

