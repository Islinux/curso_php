<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo php</title>
</head>

<body>

    <!--Problema propuesto.
Sabiendo que la función rand nos retorna un valor aleatorio entre un rango de dos enteros:

$num=rand(1,100);
En la variable $num se almacena un valor entero que la computadora genera en forma aleatoria entre 1 y 100.

Hacer un programa que lo muestre por pantalla al valor generado. Mostrar además si es menor o igual a 50 o si es mayor-->
    <?php
    $num = rand(1, 100);
    echo "<strong>NUMERO GENERADO: " . $num . "</strong> <br>";
    if ($num <= 50) {
        echo "El numero es menor o igual a 50";
    } else {
        echo "\nEl numero es mayor a 50";
    }


    ?>
</body>

</html>