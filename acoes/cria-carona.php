<?php

    // iniciar uma nova sessão
    session_start();

    // chamar nossa conexao
    require_once 'conexao.php';

    if(isset($_POST['bt_cadastrar'])) {
        // pegar os dados postados e fazer o escape
        $locais       = mysqli_real_escape_string($con, $_POST['locais']);
        $quantidade  = mysqli_real_escape_string($con, $_POST['quantidade']);
        $horaInicio = mysqli_real_escape_string($con, $_POST['inicio']);
        $idusUario   = mysqli_real_escape_string($con, $_SESSION['idusuario']);

        // INSTRUÇÃO SQL
        $sql = "INSERT INTO caronas(horaInicio, id_Usuario, id_Veiculo, itineraio) VALUES ('$locais', '$quantidade', '$horaInicio', '$idUsuario',)";

        // EXECUTAR INSTRUCAO SQL E VERIFICAR SUCESSO
        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            $_SESSION['status']   = "success";
            header('Location: ../painel.php');
        } else {
            $_SESSION['mensagem'] = "Não foi possível cadastrar formação";
            $_SESSION['status']   = "danger";
            header('Location: ../painel.php');
        }
        // FECHAR CONEXAO
        mysqli_close($con);
    }