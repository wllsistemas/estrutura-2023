<?php

// str_replace(
//     array|string $search,
//     array|string $replace,
//     string|array $subject,
//     int &$count = null
// ): string|array

$cidade = 'São Roque';

$novo_valor = str_replace(['o', 'e'], '1', $cidade);

//echo $novo_valor;

$nome = 'Pietro';

// echo trim($nome);

$x = '0';

//if (empty($x)):
// if ($x == ''):
//     echo 'vazio';
// else:
//     echo 'tem valor';
// endif;


$nome = 'Pietro';

if (strpos($nome, 'P') !== false):
    echo 'encontrou';
else:
    echo 'não encontrou';
endif;