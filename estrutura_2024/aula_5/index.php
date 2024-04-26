<?php
$candidatos = [];

$pessoa3 = [
    'nome' => 'JOANA',
    'sexo' => 'F',
    'idade' => 27,
    'experiencia' => 8,
    'escolaridade' => [
        5 => 'ensino médio',
    ]
];
$candidatos[] = $pessoa3;

$pessoa1 = [
    'nome' => 'MARIA',
    'sexo' => 'F',
    'idade' => 23,
    'experiencia' => 4,
    'escolaridade' => [
        5 => 'ensino médio', 
        10 => 'técnico'
    ]
];
$candidatos[] = $pessoa1;

$pessoa2 = [
    'nome' => 'JOÃO',
    'sexo' => 'M',
    'idade' => 30,
    'experiencia' => 1,
    'escolaridade' => [
        5 => 'ensino médio', 
        15 => 'faculdade', 
        20 => 'especialização'
    ],
    'pontos' => 35
];
$candidatos[] = $pessoa2;

var_dump($candidatos);

$qtdeF = 0;
$qtdeM = 0;
$pontos = 0;
$indice = 0;
foreach($candidatos as $candidato){
    $qtdeF += ($candidato['sexo'] == 'F') ? 1 : 0;
    $qtdeM += ($candidato['sexo'] == 'M') ? 1 : 0;

    $pontos = ( $candidato['experiencia'] * 5);
    foreach($candidato['escolaridade'] as $chave => $valor){
        $pontos += $chave;
    }

    $candidatos[$indice]['pontos'] = $pontos;

    echo "<br>".$candidato['nome']."pontos: $pontos<br>";
    $indice++;
}

echo "Total Feminino $qtdeF, Total Masculino $qtdeM";

echo "<br>";

$pontosAnterior = 0;
$indiceFeminino = -1;
$indice = 0;
$vencedores = [];
foreach($candidatos as $candidato){

    if ($candidato['pontos'] >= $pontosAnterior && $candidato['pontos'] >= 45){
        $vencedores[] = $candidato;
        $pontosAnterior = $candidato['pontos'];

        if ($candidato['sexo'] == 'F'){
            $indiceFeminino = $indice;
        }
        $indice++;
    }
}

echo "<br>VENCEDORES<br>";
foreach($vencedores as $vencedor){
    echo '- ' . $vencedor['nome'] . ' ('.$vencedor['pontos'].')<br>';
}

echo '<br>CONTRATADO<br>';
if ($indiceFeminino >= 0){
    echo '- ' . $vencedores[$indiceFeminino]['nome'];
}else{
    echo '- ' . $vencedores[0]['nome'];
}