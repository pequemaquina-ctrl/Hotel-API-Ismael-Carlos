<?php
if (!isset($_GET["id"])) {
    header("Location: index.php");
    exit;
}

$idHabitacion = (int) $_GET["id"];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Confirmar Reserva | Hotel</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="contenedor-formulario">
        <h2>Confirmar Reserva</h2>
        <p>Estás reservando la habitación ID: <strong><?= $idHabitacion ?></strong></p>

        <form method="post">
            <div class="campo">
                <label>Tu nombre completo:</label>
                <input type="text" name="nombre" placeholder="Ej. Juan Pérez" required>
            </div>
            <div class="campo">
                <label>Fecha de entrada:</label>
                <input type="date" name="entrada" required>
            </div>
            <div class="campo">
                <label>Fecha de salida:</label>
                <input type="date" name="salida" required>
            </div>

            <button type="submit" class="btn">Confirmar y Guardar</button>
            <a href="index.php" class="btn-cancelar">Volver atrás</a>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $apiKey = "HOTEL_API_123";

            $reserva = [
                "id_habitacion" => $idHabitacion,
                "cliente"       => $_POST["nombre"],
                "entrada"       => $_POST["entrada"],
                "salida"        => $_POST["salida"]
            ];

            $ch = curl_init("http://localhost/PHP/Hotel/api/reservas.php");
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($reserva));
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                "Authorization: Bearer $apiKey",
                "Content-Type: application/json"
            ]);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($httpCode === 200) {
                echo "<div class='alerta exito'>¡Reserva realizada! Redirigiendo...</div>";
                echo "<script>setTimeout(() => { window.location.href='index.php'; }, 2000);</script>";
            } else {
                echo "<div class='alerta error'> Error al reservar: " . htmlspecialchars($response) . "</div>";
            }
        }
        ?>
    </div>
</body>

</html>