<?php
require_once("Conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$telefone = $_POST['celular'];
$sexo = $_POST['sexo']; 

$sql = "UPDATE pessoa SET nome = '$nome', idade = $idade, email = '$email', celular = '$telefone', sexo = '$sexo' WHERE idpessoa = $id;";

if ($link->query($sql) === TRUE) {
    echo "<script>window.location='CadastroIndex.php';alert('Cadastro atualizado com sucesso!');</script>";
} else {
    $mens = "Erro ao atualizar cadastro";
}

mysqli_close($link);

?> 

