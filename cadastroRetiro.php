<?php
include "conexao.php";
include "index.html";
include "Retiro2023,index,html";

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
       if (mysqli_query($conexao, $sql)){
            echo "<script>alert('Cadastro concluido com sucesso!!')</script>";
            (header('location:index.html'));
       }
    
         else{
             echo  "<script>alert('CPF ja cadastrado!')</script>";
             (header('Location:Retiro2023.index,html '.$_SERVER['REQUEST_URI']));
             
         }
         
         mysqli_close($conexao);
         

      
 