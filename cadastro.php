<?php
    $nome=$_POST["nome"];
    $estado=$_POST["uf"];
    $cidade=$_POST["cidade"];

    include "cabecalho_conexao.inc";
    $SQL = "INSERT INTO pessoa (nome, uf, city) 
                VALUE ('$nome', '$estado', '$cidade')";

        echo'<center><h2 class="">Cadastro feito com sucesso.<h2>';
        
        include "rodape_conexao.inc";
?>