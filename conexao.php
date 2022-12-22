<?php
    $servidor = "us-cdbr-east-06.cleardb.net";
    $port = "3306";
    $usuario = "b6417bc29d2575";
    $password = "90c270a3";
    $dbname = "heroku_2eaec6b493508a3";

    $conexao = mysqli_connect($servidor, $usuario, $password, $dbname);
     if(!$conexao){
        die("Falha na conexão:".mysqli_connect_error());
     }
     
?>