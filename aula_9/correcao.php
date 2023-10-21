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

$qtde_homens = 0;
$qtde_mulheres = 0;

$ate_30_anos = 0;
$maior_30_anos = 0;

$soma_tempo_experiencia = 0;
$possui_experiencia = 0;

$contador_linguagem = 0;
$sem_conhecimento = 0;

$sem_experiencia = 0;

foreach($programadores as $programador){

    if ($programador['sexo'] == 'M')
       $qtde_homens++;
    else
       $qtde_mulheres++;

    if ($programador['idade'] <= 30)
       $ate_30_anos++;
    else
       $maior_30_anos++;

    foreach($programador['empresas'] as $empresa){
        $soma_tempo_experiencia += $empresa;
    }

    if ($soma_tempo_experiencia > 1)
       $possui_experiencia++;
    elseif($soma_tempo_experiencia == 0)
       $sem_experiencia++;

    $soma_tempo_experiencia = 0;

    foreach($programador['conhecimentos'] as $linguagem){
        $contador_linguagem++;
    }

    if ($contador_linguagem == 0)
       $sem_conhecimento++;

    $contador_linguagem = 0;
}


echo "1 - TOTAL DE HOMENS ($qtde_homens) E MULHERES ($qtde_mulheres)<br>";
echo "<br>";
echo "2 - CANDIDATOS MENOR IGUAL 30 ANOS ($ate_30_anos) E COM MAIS DE 30 ANOS ($maior_30_anos)<br>";
echo "<br>";
echo "3 - CANDIDATOS COM MAIS DE 1 ANO DE EXPERIÊNCIA ($possui_experiencia)<br>";
echo "<br>";
echo "4 - CANDIDATOS SEM CONHECIMENTO ($sem_conhecimento)<br>";
echo "<br>";
echo "5 - CANDIDATOS SEM EMPRESAS ($sem_experiencia)<br>";
echo "<br>";