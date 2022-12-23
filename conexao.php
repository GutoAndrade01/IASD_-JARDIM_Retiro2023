<?php
    $servidor = "localhost";
    $port = "3306";
    $usuario = "root";
    $password = "";
    $dbname = "teste";

    $conexao = mysqli_connect($servidor, $usuario, $password, $dbname);
     if(!$conexao){
        die("Falha na conexão:".mysqli_connect_error());
     }
     
?>