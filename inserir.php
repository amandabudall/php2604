<?php
    include("conecta.php");
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    $comando = $pdo->prepare("INSERT INTO alunos VALUES('$nome',$idade)")
    $resultado = $comando->execute();
?>
