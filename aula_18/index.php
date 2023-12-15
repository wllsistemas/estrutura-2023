<?php

function LerArquivo($arquivo){
    
    // 1 - ABRIR O ARQUIVO
    $resource = fopen($arquivo, 'r');
    
    // 2 - LER O ARQUIVO
    $dados = fread($resource, filesize($arquivo));
    
    // 3 - FECHAR O ARQUIVO
    fclose($resource);
    
    return $dados;
}

function GravarArquivo($conteudo, $codigo){

    // 1 - abre o arquivo
    $recurso = fopen("./cadastro/cliente-$codigo.json", 'w');

    // 2 - escrevo no arquivo
    fwrite($recurso, $conteudo);

    // 3 - fecho o arquivo
    fclose($recurso);
}

$nome_arquivo = './cadastro/cliente-234.json';
$arquivo = LerArquivo($nome_arquivo);
$cliente = json_decode( $arquivo );


// echo $cliente->nome . '<br>';

// LISTA ARQUIVOS
$diretorio = './cadastro';

$resource = opendir($diretorio);

while ($file = readdir($resource)){
    echo "filename: $file <br>";
    $arquivo = LerArquivo($nome_arquivo);
}

closedir($resource);

$nome = isset($_GET['nome']) ? $_GET['nome'] : '';
$idade = isset($_GET['idade']) ? $_GET['idade'] : '';

$cliente1 = [
    'nome' => 'João',
    'idade' => 23
];
$arrayClientes[] = $cliente1;

$cliente2 = [
    'nome' => 'Maria',
    'idade' => 33
];
$arrayClientes[] = $cliente2;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $nome ?></h1>
    <h1><?= $idade ?></h1>
    <hr>
    <table>
        <thead>
            <tr>
                <th>NOME</th>
                <th>IDADE</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($arrayClientes as $cliente): ?>
            <tr>
                <td><?=$cliente['nome']?></td>
                <td><?=$cliente['idade']?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>