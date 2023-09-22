<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

// comentário
// echo 'dsfdsfds';

$nome_variavel = 88;
echo 'Tipo da variável: ' . gettype($nome_variavel) . " - $nome_variavel";

echo '<br>';

$nome_variavel = '88';
echo gettype($nome_variavel);

echo '<br>';

$nome_variavel = "88";
echo gettype($nome_variavel);

echo '<br>';

$nome_variavel = 88.;
echo gettype($nome_variavel);

echo '<br>';

$nome_variavel = true;
echo gettype($nome_variavel);

echo '<br>';

$nome_variavel = 0;
echo gettype($nome_variavel);

echo '<br>';

$nome_variavel = [];
echo gettype($nome_variavel);

echo '<br>';

$nome_variavel = new StdClass;
echo gettype($nome_variavel);

echo '<br>';

define('SERVIDOR', 'localhost');
define('PORTA', 3306);

echo '<br>';

echo SERVIDOR;

$cores = [ 'branco', 'vermelho', 'preto' ];

echo '<br>';

var_dump($cores);

echo '<br>';

// echo $cores;

$pessoas = [
    'nome' => 'William',
    'sala' => 10,
    'matéria' => 'Estrutura de Dados'
];

var_dump($pessoas);

echo '<br>';

echo $pessoas['nome'];



