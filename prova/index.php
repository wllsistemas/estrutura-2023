<?php

$alunos = [];

$aluno1 = [
    "nome" => "WILSON",
    "idade" => 25,
    "periodo" => 1,
    "matematica" =>[
        "peso" => 2,
        "avaliacao" =>[
            "P1" => 3,
            "P2" => 5,
            "P3" => 1,
            "P4" => 3
        ]
    ],
    "portugues" =>[
        "peso" => 4,
        "avaliacao" =>[
            "P1" => 2,
            "P2" => 1,
            "P3" => 2,
            "P4" => 3
        ]
    ],
];
$alunos[] = $aluno1;

$aluno2 = [
    "nome" => "MARIA",
    "idade" => 27,
    "periodo" => 1,
    "matematica" =>[
        "peso" => 2,
        "avaliacao" =>[
            "P1" => 3,
            "P2" => 5,
            "P3" => 1,
            "P4" => 3
        ]
    ],
    "portugues" =>[
        "peso" => 4,
        "avaliacao" =>[
            "P1" => 2,
            "P2" => 1,
            "P3" => 2,
            "P4" => 3
        ]
    ],
];
$alunos[] = $aluno2;

$aluno3 = [
    "nome" => "JOANA",
    "idade" => 23,
    "periodo" => 2,
    "matematica" =>[
        "peso" => 2,
        "avaliacao" =>[
            "P1" => 1,
            "P2" => 1,
            "P3" => 1,
            "P4" => 5
        ]
    ],
    "portugues" =>[
        "peso" => 4,
        "avaliacao" =>[
            "P1" => 2,
            "P2" => 2,
            "P3" => 2,
            "P4" => 3
        ]
    ],
];
$alunos[] = $aluno3;

$soma_idade = 0;
$qtde_alunos = 0;
foreach($alunos as $aluno):
    $soma_idade += $aluno['idade'];
    $qtde_alunos++;
endforeach;

echo "3 - MÉDIA DE IDADE " . ($soma_idade / $qtde_alunos);

// 1 - DESCREVA QUANDO PODEMOS USAR "ELSE" OU "ELSEIF" EM UMA INSTRUÇÃO IF
// 2 - DESCREVA CASOS DE USO PARA "&&" (AND) E "||" (OR) NA INSTRUÇÃO IF
// 3 - EXIBA MÉDIA DE IDADE DOS ALUNOS
// 4 - QUAL FOI A MÉDIA POR ALUNO E POR MATÉRIA, LEVANDO EM CONSIDERAÇÃO O PESO
// 5 - ALUNOS REPROVADOS E APROVADOS, COM BASE NA MÉDIA 5.0