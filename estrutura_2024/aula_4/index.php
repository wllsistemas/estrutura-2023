<?php
$meuArray1 = array(13, 5, 67, 34);

$meuArray2 = [13, 5, 67, 34];

$meuArray3 = [];

$meuArray4 = [44, 'VERMELHO', true, 23.99];

// for ($i=2; $i < 4; $i++) { 
//     echo $meuArray4[$i];
// }

// $contador = 0;
// while( $contador < count($meuArray4) ){
//     echo $meuArray4[$contador];
//     $contador++;
// }

// $meuArray4[1] = 'AZUL';
$meuArray4[4] = 'AZUL';

// echo '<pre>';
// var_dump($meuArray4);
// echo '</pre>';

// echo '<pre>';
// print_r($meuArray4);
// echo '</pre>';

$pessoa1 = [
    'nome' => 'JOÃO',
    'idade' => 35,
    'sexo' => 'M',
    'conhecimentos' => [
        'PHP', 'JS', 'HTML'
    ],
    'documentos' => [
        'cpf' => '345453453',
        'rg' => '76677676',
        'ctp' => '546456',
        'titulo' => [
            'secao' => 'dfgd',
            'zona' => '5454',
            'sala' => 3
        ]
    ]
];

$pessoa2 = [
    'nome' => 'PEDRO',
    'idade' => 15,
    'sexo' => 'M',
    'conhecimentos' => [
        'PASCAL', 'SQL', 'NODE'
    ],
    'documentos' => [
        'cpf' => '11',
        'rg' => '22',
        'ctp' => '33',
        'titulo' => [
            'secao' => 'dAAfgd',
            'zona' => '5454',
            'sala' => 4
        ]
    ]
];

$pessoas = [
    $pessoa1,
    $pessoa2
];

foreach($pessoas as $pessoa){
    foreach ($pessoa as $chave => $valor) {
        if (is_array($valor)){
            if ($chave == 'conhecimentos'){
                foreach ($valor as $linguagem) {
                    echo "---Linguagem $linguagem<br>";
                }
            }else{
                foreach ($valor as $doc => $documento) {
                    if (is_array($documento)){
                        echo '---TITULO<br>';
                        foreach ($documento as $detalhes => $value) {
                            echo "-----------Detalhes $detalhes = $value<br>";
                        }
                    }else{
                        echo "---Documento $doc = $documento<br>";
                    }
                }
            }
        }else{
            echo "chave $chave - valor $valor <br>";
        }
    }
    echo "-------------------------------<br>";
}

