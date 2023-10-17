<?php 

// $total_parcelas = 6;
// $parcelas_pagas = 3;
// $contador = 1;

// while($contador <= $total_parcelas){

//     if ($contador == 5){
//         echo "Parcela {$contador} - ABONADA <br>";
//     }elseif ($contador <= $parcelas_pagas){
//         echo "Parcela {$contador} - PAGO <br>";
//     }else{
//         echo "Parcela {$contador} - EM ABERTO <br>";
//     }

//     $contador++;
// }

// echo "<br>";

// $fim = false;
// $comissao = 0;

// while($fim == false){
//     $comissao += 10;
//     echo "Comissão {$comissao}<br>";

//     $fim = ($comissao == 1000);
// }

// echo "<br>";

// $fim = false;
// $comissao = 0;

// while($fim == false){
//     $comissao += 10;
//     echo "Comissão {$comissao}<br>";

//     if($comissao == 1000){
//         break 1;
//     }
// }


// while($fim == false){

//     for($i=0; $i <= 10; $i++){
//         break 2;
//     }

// }

// echo "<br>";

// $contador = 0;
 
// while($contador <= 10){
//     $contador++;
    
//     if($contador >= 6 and $contador <= 8){
//         continue;
//     }
//     echo "Contador $contador<br>";

// }


$registros = [
    'nome' => 'João',
    'idade' => 23,
];


echo json_encode($registros);