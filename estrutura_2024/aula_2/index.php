<?php

// $login = 'WILLIAM';
// $senha = '123';

// if ($login == 'WILLIAM' && $senha == '123'){
//     echo 'LOGADO';
// }else{
//     echo 'VOCÊ NÃO É AUTORIZADO';
// }

$diaDaSemana = 1000;

if($diaDaSemana == 1){
    echo 'DOMINGO';
}else if ($diaDaSemana == 2){
    echo 'SEGUNDA';
}else if($diaDaSemana == 3){
    echo 'TERÇA';
}else if($diaDaSemana == 4){
    echo 'QUARTA';
}else if($diaDaSemana == 5){
    echo 'QUINTA';
}else if($diaDaSemana == 6){
    echo 'SEXTA';
}else if($diaDaSemana == 7){
    echo 'SÁBADO';
}else{
    echo 'VOCÊ NÃO MERECE USAR O MEU SISTEMA';
}