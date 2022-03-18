<?php
    require_once('Conexao.php');

    $sql = "SELECT * FROM pessoa WHERE pessoa";
    $dados = $link->query($sql);
    
    mysqli_close($conn);

    