<?php
header("Content-Type: application/json");
require_once "auth.php";

verificarApiKey();

$habitaciones = [
    ["id" => 1, "tipo" => "Individual", "precio" => 50],
    ["id" => 2, "tipo" => "Doble", "precio" => 80],
    ["id" => 3, "tipo" => "Suite", "precio" => 150]
];

echo json_encode($habitaciones);
