<?php

    $host     = "localhost";
    $user     = "root";
    $password = "";
    $dbname   = "carona";

    // CONEXAO
    @$con = mysqli_connect($host, $user, $password, $dbname);

    // TESTAR CONEXAO
    if(mysqli_connect_error()) {
        echo "<p>ERRO: (" . mysqli_connect_errno($con) . ") " . mysqli_connect_error($con) . "</p>";
        exit;
    } else {
        //echo "<p>Conexão realizada com sucesso!</p>";
    }
