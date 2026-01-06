<?php
header("Content-Type: application/json");
require_once "auth.php";
verificarApiKey();

$pdo = new PDO("mysql:host=localhost;dbname=hotel_db;charset=utf8", "root", "");

$metodo = $_SERVER["REQUEST_METHOD"];

switch($metodo) {
    case 'GET': // CONSULTAR
        $stmt = $pdo->query("SELECT * FROM reservas");
        echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
        break;

    case 'POST': // AÑADIR
        $datos = json_decode(file_get_contents("php://input"), true);
        $sql = "INSERT INTO reservas (nombre_cliente, habitacion_id, fecha_entrada, fecha_salida) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$datos['cliente'], $datos['id_habitacion'], $datos['entrada'], $datos['salida']]);
        echo json_encode(["mensaje" => "Reserva creada"]);
        break;

    case 'PUT': // MODIFICAR
        $datos = json_decode(file_get_contents("php://input"), true);
        $sql = "UPDATE reservas SET nombre_cliente=?, fecha_entrada=?, fecha_salida=? WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$datos['cliente'], $datos['entrada'], $datos['salida'], $datos['id']]);
        echo json_encode(["mensaje" => "Reserva actualizada"]);
        break;

    case 'DELETE': // ELIMINAR
        $id = $_GET['id'] ?? null;
        $sql = "DELETE FROM reservas WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        echo json_encode(["mensaje" => "Reserva eliminada"]);
        break;
}