<?php

$vendas = [];

$pedido = [
    "codigo_venda" => 234,
    "data_venda" => "23/10/2023",
    "codigo_cliente" => "001",
    "sub_total" => 100,
    "desconto" => 10,
    "valor_total" => 90,
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
$vendas[] = $pedido;

$pedido = [
    "codigo_venda" => 235,
    "data_venda" => "23/10/2023",
    "codigo_cliente" => "002",
    "sub_total" => 50,
    "desconto" => 0,
    "valor_total" => 50,
    "forma_pagamento" => "PIX",
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
$vendas[] = $pedido;

$pedido = [
    "codigo_venda" => 236,
    "data_venda" => "23/10/2023",
    "codigo_cliente" => "001",
    "sub_total" => 70,
    "desconto" => 10,
    "valor_total" => 60,
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
$vendas[] = $pedido;

$total_vendas = 0;

$formas_pagamentos = [];
$indice_forma_pagamento = 0;
$achou_forma_pagamento = false;

$clientes = [];
$indice_cliente = 0;
$achou_cliente = false;

$produtos = [];
$indice_produto = 0;
$achou_produto = false;

foreach($vendas as $venda):

    // 1 TAREFA
    $total_vendas += $venda['valor_total']; 

    // 2 TAREFA
    $indice_forma_pagamento = 0;
    foreach($formas_pagamentos as $formas_pagamento):
        if ($venda['forma_pagamento'] == $formas_pagamento['descricao']):
            $formas_pagamentos[$indice_forma_pagamento]['total'] += $venda['valor_total'];
            $achou_forma_pagamento = true; 
            break;
        endif;
        $indice_forma_pagamento++;
    endforeach;

    // SENÃO ACHAR, INSERI A FORMA DE PAGAMENTO NO ARRAY
    if (!$achou_forma_pagamento):
        $formas_pagamentos[] = [
            'descricao' => $venda['forma_pagamento'], 
            'total' => $venda['valor_total']
        ];
    endif;
    $achou_forma_pagamento = false;


    // 3 E 4 TAREFA
    $indice_cliente = 0;
    foreach($clientes as $cliente):
        if ($venda['codigo_cliente'] == $cliente['codigo_cliente']):
            $clientes[$indice_cliente]['total'] += $venda['valor_total'];
            $clientes[$indice_cliente]['desconto'] += $venda['desconto'];
            $achou_cliente = true; 
            break;
        endif;
        $indice_cliente++;
    endforeach;

    // SENÃO ACHAR, INSERI O CLIENTE NO ARRAY
    if (!$achou_cliente):
        $clientes[] = [
            'codigo_cliente' => $venda['codigo_cliente'], 
            'total' => $venda['valor_total'],
            'desconto' => $venda['desconto'],
        ];
    endif;
    $achou_cliente = false;

    // 5 TAREFA
    foreach ($venda['itens'] as $item):

        $indice_produto = 0;
        foreach($produtos as $produto):
            if ($item['descricao'] == $produto['descricao']):
                $produtos[$indice_produto]['valor_total'] += $item['valor_total'];
                $produtos[$indice_produto]['qtde'] += $item['qtde'];
                $achou_produto = true; 
                break;
            endif;
            $indice_produto++;
        endforeach;
    
        // SENÃO ACHAR, INSERI O PRODUTO NO ARRAY
        if (!$achou_produto):
            $produtos[] = [
                'descricao' => $item['descricao'], 
                'valor_total' => $item['valor_total'],
                'qtde' => $item['qtde'],
            ];
        endif;
        $achou_produto = false;
    endforeach;

endforeach;


// 2 TAREFA EXIBIÇÃO DOS DADOS
foreach($formas_pagamentos as $formas_pagamento):
    echo "Descrição: ".$formas_pagamento['descricao']." - total: ".$formas_pagamento['total']." <br>";
endforeach;
echo "<br>******************************************************<br>";

// 3 TAREFA EXIBIÇÃO DOS DADOS
foreach($clientes as $cliente):
    echo "Cliente: ".$cliente['codigo_cliente']." - total: ".$cliente['total']." <br>";
endforeach;
echo "<br>******************************************************<br>";

// 4 TAREFA EXIBIÇÃO DOS DADOS
foreach($clientes as $cliente):
    echo "Cliente: ".$cliente['codigo_cliente']." - desconto total: ".$cliente['desconto']." <br>";
endforeach;
echo "<br>******************************************************<br>";

// 5 TAREFA EXIBIÇÃO DOS DADOS
foreach($produtos as $produto):
    echo "Produto: ".$produto['descricao']." - qtde: ".$produto['qtde']." - total: ".$produto['valor_total']." <br>";
endforeach;
echo "<br>******************************************************<br>";


echo "1 - Exibir Valor Total Vendido ($total_vendas)<br>";
echo "2 - Exibir Valor Total por Forma de Pagamento<br>";
echo "3 - Listar Código do Cliente e Total Vendido por cliente<br>";
echo "4 - Listar Código do Cliente e Total de Desconto por cliente<br>";
echo "5 - Listar Descrição e Total em Valor e Qtde vendido por produto<br>";