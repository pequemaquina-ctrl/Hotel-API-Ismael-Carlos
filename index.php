<?php
// Configuración
$apiKey = "HOTEL_API_123";
$apiUrl = "http://localhost/PHP/Hotel/api/habitaciones.php";
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: Bearer $apiKey"]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$respuesta = curl_exec($ch);
curl_close($ch);

$habitaciones = json_decode($respuesta, true);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Express | Reservas</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="main-header">
        <h1>Nuestro Hotel</h1>
    </header>

    <main class="contenedor">
        <section class="grid-habitaciones">
            <?php if (!empty($habitaciones) && is_array($habitaciones)): ?>
                <?php foreach ($habitaciones as $hab): ?>
                    <article class="card">
                        <h3><?= htmlspecialchars($hab["tipo"]) ?></h3>
                        <p class="precio"><?= htmlspecialchars($hab["precio"]) ?>€ <span>/ noche</span></p>
                        <a href="reservar.php?id=<?= $hab['id'] ?>" class="btn">Reservar ahora</a>
                    </article>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="error-msg">
                    <p>No se han podido cargar las habitaciones. Revisa la conexión con la API.</p>
                </div>
            <?php endif; ?>
        </section>
    </main>

    <footer>
        <p>&copy; <?= date('Y') ?> Proyecto DAW · API REST Carlos e Ismael</p>
    </footer>
</body>

</html>