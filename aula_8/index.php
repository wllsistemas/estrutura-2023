<?php
// FOREACH

$arrayVazio = []; // vazio

$numeros = [12, 55, 1, 234, 356]; // elementos de mesmo type

$frutas = ['banana', 'abacaixa', 'laranja']; // elementos de mesmo type

$arrayMisto = [ 11, 'joão', false ]; // elementos de diferentes types
echo $arrayMisto[1] . $arrayMisto[0] . '<br>';

$arrayMisto[1] = 'MARIA';
echo $arrayMisto[1] . $arrayMisto[0] . '<br>';

$arrayMisto[1] = 555555;
echo $arrayMisto[1] . $arrayMisto[0] . '<br>';

$arrayMisto[5] = 666;
echo $arrayMisto[5] . '<br>';

echo '<pre>';
var_dump($arrayMisto);
echo '</pre>';

$numeros = [12, 55, 1, 234, 356];
$total = 0;

foreach ($numeros as $valor) {

    $total += $valor;
   
}

// exibir o resultado
echo $total . '<br>';

$numeros = [12, 55, 1, 234, 356];

foreach ($numeros as $valor) {

    if($valor % 2 == 0){
        echo "esse valor $valor é par<br>";
    }else{
        echo "esse valor $valor é ìmpar<br>";
    }
   
}

$numeros = ['M', 'F', 'N/C', 'F', 'F', 'M', 'A'];

$qtde_feminino = 0;
$qtde_masculino = 0;
$qtde_nao_contabilizado = 0;

foreach ($numeros as $valor) {

    if ($valor == 'M')
        $qtde_masculino++;
    elseif($valor == 'F')
        $qtde_feminino++;
    else
        $qtde_nao_contabilizado++;
   
}

// QTDE FEMININO
echo "feminino $qtde_feminino<br>";

// QTDE MASCULINO
echo "masculino $qtde_masculino<br>";

// QTDE NÃO CONTABILIZADOS
echo "não contabilizados $qtde_nao_contabilizado<br>";
