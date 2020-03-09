<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo php</title>
</head>

<body>
    <?php
    $dia = date("d");
    if ($dia <= 10) {
        echo "Sitio Activo";
    } else {
        echo "Sitio fuera de servicio";
    }
    ?>
</body>

</html>