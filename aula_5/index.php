<?php

$acumulador = 0;

for ($contador=0; $contador < 10 ; $contador++) {
    
    echo "contador: $contador<br>";

    $acumulador = $acumulador + $contador; 

    echo "resultado total: $acumulador<br>";

    echo '-------------------------------<br>';

}


$total = 0;

for ($contador=0; $contador < 10 ; $contador++):

    if ($contador > 5):
        $total += $contador;
    elseif($contador < 5):
        $total -= 1;
    else:
        $total += 10;
    endif;

    echo "Resultado: $total<br>";

endfor;
