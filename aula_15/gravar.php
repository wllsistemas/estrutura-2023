<?php

function DateBrToIng($value){
    $arrayData = explode('/', $value);
    return $arrayData[2] . '-' . $arrayData[1] . '-' . $arrayData[0];
}

function DateIngToBr($value){
    $arrayData = explode('-', $value);
    return $arrayData[2] . '/' . $arrayData[1] . '/' . $arrayData[0];
}


// $nome = strtoupper( trim($_POST['nome']) );
// $email = $_POST['email'];
// $idade = $_POST['idade'];
// $msg = '';

// if ($nome == '' or strlen($nome) <= 5 or strpos(' ', $nome) === false):
//     $msg = 'Informe o Nome<br>';
// endif;

// if ($email == ''):
//     $msg .= 'Informe o E-mail<br>';
// endif;

// if (!is_numeric($idade)):
//     $msg .= 'Informe a Idade<br>';
// endif;

// if ($msg != ''):
//     echo $msg;
//     exit;
// endif;


echo password_hash('123', PASSWORD_DEFAULT);




