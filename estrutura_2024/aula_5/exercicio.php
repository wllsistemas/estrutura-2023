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
    ]
];
$candidatos[] = $pessoa2;

var_dump($candidatos);

$qtdeM = 0;
$qtdeF = 0;
$vencedores = [];
$indice = 0;

echo '<br>RELATÓRIOS CANDIDATOS<br>';
echo '----------------------------<br>';
foreach($candidatos as $chave => $candidato){
    $qtdeF += ($candidato['sexo'] == 'F') ? 1 : 0;
    $qtdeM += ($candidato['sexo'] == 'M') ? 1 : 0;

    $pontos = (intval($candidato['experiencia']) * 5);

    foreach($candidato['escolaridade'] as $chave => $escolaridade):
        $pontos += ($chave * 1);
    endforeach;

    $candidatos[$indice]['pontos'] = $pontos;
    echo $candidato['nome'] . ' -> Pontos: ' . $pontos. '<br>';
    echo '----------------------------<br>';

    $indice++;
}

echo "Candidatos Masculino: $qtdeM - Candidatos Feminino: $qtdeF <br>";

$pontosAnterior = 0;
$indiceFeminino = -1;
$indice = 0;
foreach($candidatos as $candidato):

    if ($candidato['pontos'] >= $pontosAnterior):
        $vencedores[] = $candidato;
        $pontosAnterior = $candidato['pontos'];

        if ($candidato['sexo'] == 'F'):
            $indiceFeminino = $indice;
        endif;
    endif;

    $indice++;
endforeach;

echo '<br>CANDIDATOS VENCEDORES<br>';
foreach($vencedores as $vencedor):

    echo '- ' . $vencedor['nome'] . ' ('.$vencedor['pontos'].')' . '<br>';

endforeach;

echo '<br>CANDIDATO CONTRATADO<br>';
if ($indiceFeminino >= 0):
    echo '- ' . $vencedores[$indiceFeminino]['nome'];
else:
    echo '- ' . $vencedores[0]['nome'];
endif;






