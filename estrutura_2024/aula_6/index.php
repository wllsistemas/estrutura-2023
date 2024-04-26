<?php

function SomaDoisNumeros($numero1, $numero2){
    return ($numero1 + $numero2);
}

function ExibeDataAtual(){
    echo date('Y-m-d');
}

function ConverteDolarParaReal($valorEmDolar, $contacaoDolar=5.00){
    return ($contacaoDolar * $valorEmDolar);
}

echo ConverteDolarParaReal(10.00);

// echo SomaDoisNumeros(4, 7) * 10;

// ExibeDataAtual();

// echo phpinfo();