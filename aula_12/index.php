<?php

function SomaNumeros(){
    return 3 + 3;
}

echo SomaNumeros();

echo '<br>***********<br>';

function exibe_nome(){
    echo 'WILLIAM';
}

exibe_nome();

echo '<br>***********<br>';

function exibeCidade($nome_cidade, $uf='SP',$limit=100){
    echo $nome_cidade . ' ' . $uf;
}

exibeCidade('SÃO ROQUE');
exibeCidade('MAIRINQUE');
exibeCidade('IBIUNA', 'MG');

echo '<br>***********<br>';

function calcularMedia($n1, $n2){
    $resultado = ($n1 + $n2) / 3;
    return $resultado;
}

// echo calcularMedia(2, 2);
// echo calcularMedia(3, 6);
// echo calcularMedia(6, 7);

echo '<br>***********<br>';


function retornaMesExtenso($mesNumero){
    $mes = [
        'JANEIRO',
        'FEVEREIRO',
        'MARÇO',
        'ABRIL',
        'MAIO',
        'JUNHO',
        'JULHO',
        'AGOSTO',
        'SETEMBRO',
        'OUTUBRO',
        'NOVEMBRO',
        'DEZEMBRO'
    ];
   return $mes[$mesNumero -1];
}

echo retornaMesExtenso(12);


// function limpaString($value='')
// {
//     if ($value == ''):
//         return '';
//     else:
//         return str_replace([',', '.', '-', '/', ' ', '(', ')', '*', '+', '<', '>', ';', ':', '\\', '#', '%', '@', '!', '?'], '', $value);
//     endif;
// }

// function convertIntToSimNao($integer)
// {
//     return ($integer == null || $integer == '' || $integer == '0') ? 'NAO' : 'SIM';
// }

