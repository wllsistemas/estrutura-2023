<?php

$media = 5;
$aluno = 'Pietro';

if ($media >= 6){
    echo 'APROVADO';
}else{
    echo 'REPROVADO';
}

echo '<br>';

if ('5' === $media):
    echo 'IGUAL';
else:
    echo 'DIFERENTE';
endif;

echo '<br>';

$ano = 2023;
if ($media >= 5 && $aluno == 'Pietro' && $ano == 2023):
    echo 'APROVADO';
else:
    echo 'REPROVADO';
endif;

echo '<br>';

if ($media >= 6 or $aluno == 'Pietro'):
    echo 'APROVADO';
else:
    echo 'REPROVADO';
endif;

echo '<br>';

$IsEstourouEmFaltas = true;

if (!$IsEstourouEmFaltas && $media >= 6):
    if ($aluno == 'Pietro'): 
        echo 'APROVADO';
    endif;
else:
    echo 'REPROVADO';
endif;    

echo '<br>';

$registros = [];

if (empty($registros)):
    echo 'USUÁRIO NÃO ENCONTRADO';
else:
    echo 'USUÁRIO ENCONTRADO';
endif;

echo '<br>';

if ($media >= 6 && $aluno == 'Pietro'):
    echo 'APROVADO';
elseif($media == 5 && $aluno == 'Pietro'):
    echo 'EXAME';
else:
    echo 'REPROVADO';
endif;

echo '<br>';

$sigla = 'J'
if ($sigla == 'J'):
    echo 'JANEIRO';
elseif($sigla == 'F'):
    echo 'FEVEREIRO';
elseif($sigla == 'M'):
        echo 'MARÇO';
elseif($sigla == 'A'):
    echo 'ABRIL';
endif;

switch ($sigla):
    case 'J':
        echo 'JANEIRO';
        break;
    case 'F':
        echo 'FEVEREIRO';
        break;
    case 'M':
        echo 'MARÇO';
        break;
    default:
        echo 'MÊS NÃO ENCONTRADO';
        break;
endswitch;