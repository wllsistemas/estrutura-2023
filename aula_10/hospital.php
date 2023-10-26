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