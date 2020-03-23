<?php
/* Generar un valor aleatorio entre 1 y 3. Luego imprimir en castellano el número (Ej. si se genera el 3 luego mostrar en la página el string "tres").*/
$valor = rand(1, 3);
echo "NUMERO: $valor<br>";
if ($valor == 1) {
    echo "UNO<br>";
} elseif ($valor == 2) {
    echo "DOS<br>";
} else {
    echo "TRES<br>";
}
