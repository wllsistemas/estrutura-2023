<?php

switch (json_last_error()) {
    case JSON_ERROR_DEPTH:
        echo ' - Maximum stack depth exceeded';
    break;
    case JSON_ERROR_STATE_MISMATCH:
        echo ' - Underflow or the modes mismatch';
    break;
    case JSON_ERROR_CTRL_CHAR:
        echo ' - Unexpected control character found';
    break;
    case JSON_ERROR_SYNTAX:
        echo ' - Syntax error, malformed JSON';
    break;
    case JSON_ERROR_UTF8:
        echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';
    break;
}


$nomes = ['joão', 'maria'];

// echo json_encode($nomes);

$cliente = [
    'nome' => 'joao', 
    'endereco' => 'Rua XXXX',
    'numero' => 43,
    'linguagens' => [ 'PHP', 'JS', 'JAVA' ]
];

// echo json_encode($cliente);

$json = '{
        "cep": "18135-690",
        "logradouro": "Rua Jorge de Lima",
        "complemento": "",
        "bairro": "Jardim Santa Maria",
        "localidade": "São Roque",
        "uf": "SP",
        "ibge": "3550605",
        "gia": "6531",
        "ddd": "11",
        "siafi": "7113"
    }';

$decode = json_decode($json);

// ARRAY ASSOCIATIVO
// echo $decode['logradouro'];

// ARRAY EM FORMA DE OBJETO
echo $decode->logradouro;

