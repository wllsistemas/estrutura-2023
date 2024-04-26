<?php

 var_dump($_POST);

$erro = '';

if (!isset($_POST['linguagem'])){
    $erro .= 'Informe pelo menos 1 linguagem !<br>';
}

if (!isset($_POST['escolaridade'])){
    $erro .= 'Informe a escolaridade !<br>';
}

if ($erro != ''){
    echo $erro;
    exit;
}

foreach($_POST['linguagem'] as $linguagem){
    echo "LINGUAGEM: $linguagem <br>";
}

echo 'VALIDOU';



// 4 - GRUPOS (mínimo 4 pessoas)

// -> PRONTUÁRIO (FELIPE)
// -> CURRICULO 
// -> PRODUTO
// -> CLIENTE







