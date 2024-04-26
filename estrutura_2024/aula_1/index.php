<?php

// inteiro = int
$idade = 0;

// logico = boolean
$idade = false;

// caracter = String
$idade = 'nome';

// Real = Double/Real/Numeric/Decimal/Float
$idade = 1.0;

// Vetores = Array/[]
$idades = [3, 4, 5, 6, 'dsfsedf', false];

// mod = %
$idade = (45 % 3);

// OU = OR - ||

// E = AND - &&

// = 

$valor1 = 1;

$valor2 = '1';

//     1     !==    '1'
if ($valor1 !== $valor2){
    echo 'VALOR E TIPO DIFERENTE';
}else{
    echo 'VALOR OU TIPO SÃO IGUAIS';
}

echo '<br>';
    
//     1     !=    1
if ($valor1 != $valor2){
    echo 'VALOR DIFERENTE';
}else{
    echo 'VALOR IGUAL, SEM COMPARAR TIPO';
}

echo '<br>';

// NOT !

$conta_vencida = true;

// if (!$conta_vencida){
//     echo 'não está vencida';
// }else{
//     echo 'vencida';
// }

// if ($conta_vencida){
//     echo 'vencida';
// }else{
//     echo 'não está vencida';
// }

