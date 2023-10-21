<?php 

$programadores = [];

$programador = [
    "nome" => "MARIA",
    "idade" => 34,
    "sexo" => "F",
    "conhecimentos" => [
        "JAVA", "C#", "JAVASCRIPT"
    ],
    "empresas" => [
        "IBM" => 4,
        "YOUTUBE" => 2,
        "VIVO" => 4
    ]   
];
$programadores[] = $programador;

$programador = [
    "nome" => "PEDRO",
    "idade" => 30,
    "sexo" => "M",
    "conhecimentos" => [
        "PHP", "NODE", "PYTHON"
    ],
    "empresas" => [
        "CLARO" => 1,
        "MICROSOFT" => 2,
        "GOOGLE" => 3
    ]   
];
$programadores[] = $programador;

$programador = [
    "nome" => "JOSÉ",
    "idade" => 20,
    "sexo" => "M",
    "conhecimentos" => [],
    "empresas" => []   
];
$programadores[] = $programador;

echo '<pre>';
var_dump($programadores);
echo '</pre>';

foreach($programadores as $elemento){
    echo "NOME: " . $elemento['nome'] . "<br>";
    echo "IDADE: " . $elemento['idade'] . "<br>";

    echo "LINGUAGENS: <br>";
    foreach($elemento['conhecimentos'] as $linguagem){
        echo ' -' . $linguagem . '<br>';
    }

    echo "EMPRESAS: <br>";
    foreach ($elemento['empresas'] as $nome_empresa => $periodo) {
        echo "$nome_empresa -> $periodo anos<br>";
    }

    echo '----------------------------<br>';
}


