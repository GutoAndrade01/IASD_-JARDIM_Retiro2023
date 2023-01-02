<?php
    $servidor = "us-cdbr-east-06.cleardb.net";
    $port = "3306";
    $usuario = "b2f36ade5577ec";
    $password = "bd4e5172";
    $dbname = "heroku_7fa5047aa930f7e";

    $conexao = mysqli_connect($servidor, $usuario, $password, $dbname);
mysqli_set_charset($conexao, "utf8");
     if(!$conexao){
        die("Falha na conexão:".mysqli_connect_error());
     }
     
?>