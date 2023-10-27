<?php

$vendas = [];

$pedido = [
    "codigo_venda" => 234,
    "data_venda" => "23/10/2023",
    "codigo_cliente" => "001",
    "sub_total" => 100,
    "desconto" => 10,
    "valor_tota" => 90,
    "forma_pagamento" => "CARTÃO DÉBITO",
    "itens" => [
        [
            "item" => 1,
            "codigo" => 100,
            "descricao" => "Produto teste 1",
            "qtde" => 4,
            "valor_unitario" => 10,
            "valor_total" => 40
        ],
        [
            "item" => 1,
            "codigo" => 101,
            "descricao" => "Produto teste 2",
            "qtde" => 3,
            "valor_unitario" => 20,
            "valor_total" => 60
        ]
    ]
];

$pedido = [
    "codigo_venda" => 235,
    "data_venda" => "23/10/2023",
    "codigo_cliente" => "002",
    "sub_total" => 50,
    "desconto" => 0,
    "valor_tota" => 50,
    "forma_pagamento" => "CARTÃO CRÉDITO",
    "itens" => [
        [
            "item" => 1,
            "codigo" => 100,
            "descricao" => "Produto teste 1",
            "qtde" => 3,
            "valor_unitario" => 10,
            "valor_total" => 30
        ],
        [
            "item" => 1,
            "codigo" => 101,
            "descricao" => "Produto teste 2",
            "qtde" => 1,
            "valor_unitario" => 20,
            "valor_total" => 20
        ]
    ]
];

$pedido = [
    "codigo_venda" => 236,
    "data_venda" => "23/10/2023",
    "codigo_cliente" => "001",
    "sub_total" => 70,
    "desconto" => 10,
    "valor_tota" => 60,
    "forma_pagamento" => "DINHEIRO",
    "itens" => [
        [
            "item" => 1,
            "codigo" => 100,
            "descricao" => "Produto teste 1",
            "qtde" => 3,
            "valor_unitario" => 10,
            "valor_total" => 30
        ],
        [
            "item" => 1,
            "codigo" => 101,
            "descricao" => "Produto teste 2",
            "qtde" => 2,
            "valor_unitario" => 20,
            "valor_total" => 40
        ]
    ]
];