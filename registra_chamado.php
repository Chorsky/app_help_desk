<?php

    session_start();

    $id_usuario = $_SESSION['id']??"";
    $titulo_chamado = $_POST['titulo']??"";
    $categoria_chamdo = $_POST['categoria']??"";
    $descricao_chamado = $_POST['descricao']??"";

    $titulo_chamado = str_replace('#','-',$titulo_chamado);
    $categoria_chamdo = str_replace('#','-',$categoria_chamdo);
    $descricao_chamado = str_replace('#','-',$descricao_chamado);

    $arquivo = fopen('arquivo.txt','a');

    $texto = $id_usuario . "|" . $titulo_chamado . "|" . $categoria_chamdo . "|" . $descricao_chamado . PHP_EOL;
    
    fwrite($arquivo,$texto);
    
    fclose($arquivo);

    header('location:home.php');
?>