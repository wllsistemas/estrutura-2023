<?php
define('DIRETORIO_CADASTRO', './cadastro');

$codigo = rand(1000, 9999);

$cliente = [
    'id' => $codigo,
    'hash' => md5($codigo),
    'nome' => 'joao', 
    'endereco' => 'Rua XXXX',
    'numero' => 43,
    'linguagens' => [ 'PHP', 'JS', 'JAVA' ]
];

$json = json_encode($cliente);

if (! file_exists(DIRETORIO_CADASTRO))
    mkdir(DIRETORIO_CADASTRO);

// 1 - abre o arquivo
$recurso = fopen(DIRETORIO_CADASTRO . "/cliente-$codigo.json", 'w');

// 2 - escrevo no arquivo
fwrite($recurso, $json);

// 3 - fecho o arquivo
fclose($recurso);