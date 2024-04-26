<?php

// $totalLinhas = 100;
// $totalColunas = 30;

// for ($linha=0; $linha <= $totalLinhas; $linha++) { 

//     // break;

//     if ($linha == 2){
//         continue;
//     }
    
//     for ($coluna=0; $coluna <= $totalColunas ; $coluna++) { 
//         echo "Linha: $linha - Coluna: $coluna <br>";
//     }

// }

// $contador = 0;

// while ($contador <= 10) {
//    echo "contador = $contador";
// //    $contador++;
// }

// $devedor = true;
// while ($devedor == false) {
//     echo "";
// }

// do{
//     echo "";
// }while ($devedor == false)

// $arrayCor = [ 
//     'amarelo',
//     'vermelho',
//     'verde'
// ];

// foreach($arrayCor as $key => $cor){
//     echo "Cor é $cor <br>";
// }

// $nome = [
//     'nome' => 'WILLIAM',
//     'skills' => [
//         'PHP',
//         'JS',
//     ]
// ];

//  1 até 1000
// somente números pares

for ($contador=1; $contador <= 1000 ; $contador++) { 
   
    if ($contador % 2 == 0){

        for ($multiplicador=1; $multiplicador <= 10 ; $multiplicador++) { 
            $resultado = ($contador * $multiplicador);
           echo "$contador X $multiplicador = $resultado <br>";
        }
        echo '-------------------------------------------<br>';

    }

}

// EXBIR NÚMEROS IMPARES 3O ATÉ 3001
// EXIBIR PARES, SOMANDA +2

$contador = 0;
while($contador <= 3001){

    if ($contador >= 30){
        if ($contador % 2 == 0){
            echo "NÚMERO PAR " . ($contador +2) . '<br>';
        }else{
            echo "NÚMERO IMPAR $contador <br>";
        }
    }

    $contador++;
}