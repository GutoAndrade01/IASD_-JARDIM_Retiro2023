<?php
include "conexao.php";

$nome = $_POST['NomeCompleto'];
$dataNasc = $_POST['DataNascimento'];
$cpf = $_POST['Cpf'];
$sexo = $_POST['sexo'];
$estCivil = $_POST['EstadoCivil'];
$fone = $_POST['Fone'];
$endereco = $_POST['Endereço'];
$bairro = $_POST['Bairro'];
$cidade = $_POST['Cidade'];
$cep = $_POST['Cep'];
$estado = $_POST['Estado'];
$iasd = $_POST['Iasd'];
$regime = $_POST['reg-alimentar'];
$cozinha = $_POST['cozinha-propria'];


$sql= "INSERT INTO cadastro (nome, dataNasc, cpf, sexo, estCivil, fone, endereco, bairro, cidade, cep, estado, iasd, regime, cozinha) 
        VALUES ('$nome', '$dataNasc', '$cpf', '$sexo', '$estCivil', '$fone', '$endereco', '$bairro', '$cidade', '$cep', '$estado', '$iasd', '$regime', '$cozinha')";
       if(mysqli_query($conexao, $sql)){
            echo "Cadastro Realizado com sucesso!";
         }
         else{
            echo  "<script>alert('CPF Existente! Tente novamente!')</script>";
           /* header("location: cadastroRetiro2023.html");*/
         }
         
         mysqli_close($conexao);
         

      
 