<?php

$saldo_inicial_corrente = 1000;
$saldo_inicial_poupanca = 500;

$movimentacoes = [];

$movimentacao = [
    "tipo" => "CRÉDITO",
    "conta"=> "CORRENTE",
    "valor_movimento" => 100
];
$movimentacoes[] = $movimentacao;

$movimentacao = [
    "tipo" => "DÉBITO",
    "conta"=> "POUPANÇA",
    "valor_movimento" => 50
];
$movimentacoes[] = $movimentacao;

$movimentacao = [
    "tipo" => "DÉBITO",
    "conta"=> "POUPANÇA",
    "valor_movimento" => 500
];
$movimentacoes[] = $movimentacao;

$movimentacao = [
    "tipo" => "DÉBITO",
    "conta"=> "CORRENTE",
    "valor_movimento" => 10
];
$movimentacoes[] = $movimentacao;

$movimento_corrente = 0;
$movimento_poupanca = 0;

$total_credito_corrente = 0;
$total_debito_corrente = 0;
$total_credito_poupanca = 0;
$total_debito_poupanca = 0;

foreach($movimentacoes as $movimento):

    // 1 TAREFA
    if ($movimento['tipo'] == 'DÉBITO'):
        if ($movimento['conta'] == 'CORRENTE' && ($saldo_inicial_corrente - $movimento['valor_movimento']) < 0):
            echo 'Sua movimentação não pode resultar em Saldo Negativo !<br>';
            echo 'Saldo Atual CORRENTE: '.$saldo_inicial_corrente.'<br>';
            echo 'Valor Movimentado: '.$movimento['valor_movimento'].' <br>';
            continue;
        elseif($movimento['conta'] == 'POUPANÇA' &&  ($saldo_inicial_poupanca - $movimento['valor_movimento']) < 0 ):
            echo 'Sua movimentação não pode resultar em Saldo Negativo !<br>';
            echo 'Saldo Atual POUPANÇA: '.$saldo_inicial_poupanca.'<br>';
            echo 'Valor Movimentado: '.$movimento['valor_movimento'].' <br>';
            continue;
        endif;
    endif;

    // 2 TAREFA
    if ($movimento['conta'] == 'CORRENTE') $movimento_corrente++;
    if ($movimento['conta'] == 'POUPANÇA') $movimento_poupanca++;

    // 3 TAREFA
    if ($movimento['conta'] == 'CORRENTE'):
        if ($movimento['tipo'] == 'DÉBITO'):
           $saldo_inicial_corrente -= $movimento['valor_movimento'];
        else:
           $saldo_inicial_corrente += $movimento['valor_movimento'];
        endif;
    elseif ($movimento['conta'] == 'POUPANÇA'):
        if ($movimento['tipo'] == 'DÉBITO'):
            $saldo_inicial_poupanca -= $movimento['valor_movimento'];
         else:
            $saldo_inicial_poupanca += $movimento['valor_movimento'];
         endif;
    endif;

    // 4 TAREFA
    if ($movimento['conta'] == 'CORRENTE' && $movimento['tipo'] == 'CRÉDITO'):
        $total_credito_corrente += $movimento['valor_movimento'];
    elseif ($movimento['conta'] == 'POUPANÇA' && $movimento['tipo'] == 'CRÉDITO'):
        $total_credito_poupanca += $movimento['valor_movimento'];
    endif;
    
    // 5 TAREFA 
    //* OBSERVAR AQUI QUE UMA MOVIMENTAÇÃO DE 500 NA POUPANÇA NÃO FOI CONTABILIZADA
    //* ISSO PORQUE ELA DEIXARIA A CONTA NEGATIVA, ISSO NÃO É PERMITO PELA TAREFA 1
    if ($movimento['conta'] == 'CORRENTE' && $movimento['tipo'] == 'DÉBITO'):
        $total_debito_corrente += $movimento['valor_movimento'];
    elseif ($movimento['conta'] == 'POUPANÇA' && $movimento['tipo'] == 'DÉBITO'):
        $total_debito_poupanca += $movimento['valor_movimento'];
    endif;

endforeach;

echo "<br>******************************************************<br>";
echo "1 - Bloquear operações que deixem a conta 'NEGATIVA'<br>";
echo "2 - Exibir Qtde de movimentos efetuados nas contas ($movimento_poupanca x - POUPANÇA | $movimento_corrente x - CORRENTE)<br>";
echo "3 - Exibir Saldo após movimentações da Corrente ($saldo_inicial_corrente) e Poupança ($saldo_inicial_poupanca)<br>";
echo "4 - Listar Total de movimento em 'CRÉDITO' na Corrente($total_credito_corrente) e Poupança($total_credito_poupanca)<br>";
echo "5 - Listar Total de movimento em 'DÉBITO' na Corrente($total_debito_corrente) e Poupança($total_debito_poupanca)<br>";