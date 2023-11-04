<?php

$pacientes = [];

$paciente = [
    "nome" => "JOÃO",
    "sexo" => "M",
    "idade" => 34,
    "sintomas" => "Dor de Garganta",
    "fluxo" => [
        [
            "departamento" => "RECEPÇÃO",
            "responsavel" => "JOANA",
            "data_hora" => "23/10/2023 12:00:34"
        ],
        [
            "departamento" => "TRIAGEM",
            "responsavel" => "PEDRO",
            "data_hora" => "23/10/2023 12:10:55"
        ],
        [
            "departamento" => "CONSULTA",
            "responsavel" => "DR. JAILSON",
            "data_hora" => "23/10/2023 12:56:15"
        ],
        [
            "departamento" => "ENFERMARIA",
            "responsavel" => "PAULA",
            "data_hora" => "23/10/2023 13:46:00"
        ],
    ]
];
$pacientes[] = $paciente;

$paciente = [
    "nome" => "MARIA",
    "sexo" => "F",
    "idade" => 44,
    "sintomas" => "Dor de Cabeça",
    "fluxo" => [
        [
            "departamento" => "RECEPÇÃO",
            "responsavel" => "PAULA",
            "data_hora" => "23/10/2023 13:00:34"
        ],
        [
            "departamento" => "TRIAGEM",
            "responsavel" => "KELLY",
            "data_hora" => "23/10/2023 13:10:55"
        ],
        [
            "departamento" => "CONSULTA",
            "responsavel" => "DR. MARCOS",
            "data_hora" => "23/10/2023 13:56:15"
        ]
    ]
];
$pacientes[] = $paciente;

$paciente = [
    "nome" => "MARIO",
    "sexo" => "M",
    "idade" => 24,
    "sintomas" => "Dor de Barriga",
    "fluxo" => [
        [
            "departamento" => "RECEPÇÃO",
            "responsavel" => "JOANA",
            "data_hora" => "23/10/2023 15:00:34"
        ]
    ]
];
$pacientes[] = $paciente;

$ultimo_departamento_do_paciente = '';
$total_pacientes = 0;
$qtde_departamentos_no_atendimento = 0;
$achou_recepcionista = false;
$achou_departamento = false; 
$pacientes_consulta = [];
$recepcionista_contador = [];
$departamentos = [];

foreach ($pacientes as $pessoa):

    // 1 TAREFA
    $total_pacientes++;


    // 2 TAREFA
    foreach ($pessoa['fluxo'] as $registro):

        // PROCURA DEPARTAMENTOS NO ARRAY TEMPORÁRIO
        $indiceDepartamento = 0;
        foreach($departamentos as $departamento):
            if ($departamento['departamento'] == $registro['departamento']):
                $achou_departamento = true; 
                break;
            endif;
            $indiceDepartamento++;
        endforeach;

        // SENÃO ACHAR, INSERI UM DEPARTAMENTO NO ARRAY
        if (!$achou_departamento):
            $departamentos[] = [
                'departamento' => $registro['departamento'], 
                'contador' => 0
            ];
        endif;
        $achou_departamento = false;

        $qtde_departamentos_no_atendimento++;
    endforeach;

    $ultimo_departamento_do_paciente = $pessoa['fluxo'][$qtde_departamentos_no_atendimento -1]['departamento'];
    $indiceDepartamento = 0;
    foreach($departamentos as $departamento):
        if ($departamento['departamento'] == $ultimo_departamento_do_paciente):
            $departamentos[$indiceDepartamento]['contador']++;
        endif;
        $indiceDepartamento++;
    endforeach;


    // 3 TAREFA COLETA DOS DADOS
    foreach ($pessoa['fluxo'] as $registro):

        if ($registro['departamento'] == 'RECEPÇÃO'):

            // PROCURA RECEPCIONISTA NO ARRAY TEMPORÁRIO
            $indiceRecepcionista = 0;
            foreach($recepcionista_contador as $contador):
                if ($contador['recepcionista'] == $registro['responsavel']):
                    $recepcionista_contador[$indiceRecepcionista]['contador']++;
                    $achou_recepcionista = true; 
                    break;
                endif;
                $indiceRecepcionista++;
            endforeach;

            // SENÃO ACHAR, INSERI A RECEPCIONISTA NO ARRAY
            if (!$achou_recepcionista):
                $recepcionista_contador[] = [
                    'recepcionista' => $registro['responsavel'], 
                    'contador' => 1
                ];
            endif;
            $achou_recepcionista = false;
        endif;

    endforeach;


    // 4 TAREFA COLETA DE DADOS
    foreach ($pessoa['fluxo'] as $registro):

        if ($registro['departamento'] == 'CONSULTA'):
            $pacientes_consulta[] = $pessoa['nome'];
        endif;

    endforeach;
    echo "<br>******************************************************<br>";


    // 5 TAREFA
    foreach ($pessoa['fluxo'] as $registro):

        if ($registro['departamento'] == 'CONSULTA'):
            echo "Médico: ".$registro['responsavel']." - Paciente: ".$pessoa['nome']."<br>";
        endif;

    endforeach;

    $qtde_departamentos_no_atendimento = 0;
endforeach;

// 2 TAREFA EXIBIÇÃO DOS DADOS
foreach($departamentos as $departamento):
    echo "Departamento ".$departamento['departamento']." - pacientes: ".$departamento['contador']." <br>";
endforeach;
echo "<br>******************************************************<br>";

// 3 TAREFA EXIBIÇÃO DOS DADOS
foreach($recepcionista_contador as $recepcionista):
    echo "Recepcionista ".$recepcionista['recepcionista']." - pacientes: ".$recepcionista['contador']." <br>";
endforeach;
echo "<br>******************************************************<br>";

// 4 TAREFA EXIBIÇÃO DOS DADOS
foreach($pacientes_consulta as $nome):
    echo "Passaram pela consulta $nome <br>";
endforeach;


echo "<br>******************************************************<br>";
echo "1 - Total de pacientes que entraram no hospital ($total_pacientes pacientes)<br>";
echo "2 - Quantos pacientes estão parados por departamento<br>";
echo "3 - Listar nome da recepcionista e quantos pacientes ela atendeu<br>";
echo "4 - Listar nome dos pacientes que já passaram pela consulta médica<br>";
echo "5 - Listar nome do médico e nome do paciente que foi atendido<br>";