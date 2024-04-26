<?php

// ENCODAR DADOS NO FORMATO JSON (TEXTO -> JSON)
// json_encode();

// DESENCODAR JSON PARA OBJETO (JSON -> OBJECT)
// json_decode();
// $pessoas = [];

// $dados1 = [
//     'nome' => 'João',
//     'idade' => 31,
//     'possui_faculdade' => false,
//     'salario' => 1000.01,
//     'linguagens' => [
//         'PHP', 'JS'
//     ]
// ];

// $dados2 = [
//     'nome' => 'João',
//     'idade' => 31,
//     'possui_faculdade' => false,
//     'salario' => 1000.34
// ];

// $pessoas[] = $dados1;
// $pessoas[] = $dados2;

// echo json_encode($pessoas);

// $json = '{
//     "cep": "18132-380",
//     "logradouro": "Rua Governador Carvalho Pinto",
//     "complemento": "",
//     "bairro": "Jardim Boa Vista",
//     "localidade": "São Roque",
//     "uf": "SP",
//     "ibge": "3550605",
//     "gia": "6531",
//     "ddd": "11",
//     "siafi": "7113"
//   }';

// $endereco = json_decode($json);
// echo $endereco->logradouro;

// $endereco = json_decode($json, true);
// echo $endereco['logradouro'];

$cliente = [
    'nome' => 'João',
    'saldo' => 200
];

$cliente['saldo'] = $cliente['saldo'] + 200;

echo $cliente['saldo'];
echo '<br>';

$cliente['saldo'] = $cliente['saldo'] - 100;

echo $cliente['saldo'];
