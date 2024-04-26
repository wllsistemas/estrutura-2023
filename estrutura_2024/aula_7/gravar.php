<?php
var_dump($_POST);

function formatDateToIng($data){
    // dd/mm/yyyy Brasil
    // yyyy-mm-dd Internacional

    $temp = explode('/', $data);
    $data_ing = $temp[2] . '-' . $temp[1] . '-' . $temp[0];
    return $data_ing;
}

$data_br = $_POST['data_brasil'];

echo formatDateToIng($data_br);

// function formatDateToBr($data){
//     // dd/mm/yyyy Brasil
//     // yyyy-mm-dd Internacional
//     $temp = explode('-', $data);
//     $data_br = $temp[2] . '/' . $temp[1] . '/' . $temp[0];
//     return $data_br; 
// }
// $data_cadastro = $_POST['data_cadastro'];
// echo formatDateToBr($data_cadastro);

// $nome = $_POST['nome'];
// $documento = $_POST['documento'];

// $doc_limpo = str_replace(['.', '-', '/'], '*', $documento);

// if ( strlen($doc_limpo) != 11 && strlen($doc_limpo) != 14){
//     echo 'Você não merece usar meu sistema !';
// }else{
//     echo 'Você é o cara !';
// }