<?php
    require_once('Conexao.php');

    $sql = "SELECT idpessoa, nome, idade, email, celular, sexo FROM pessoa";
    $dados = $link->query($sql);
    
    mysqli_close($conn);

    