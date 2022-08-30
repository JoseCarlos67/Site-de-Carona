<?php

    // iniciar uma nova sessão
    session_start();

    // chamar nossa conexao
    require_once 'conexao.php';

    if(isset($_POST['bt_cadastrar'])) {
        // pegar os dados postados e fazer o escape
        $modelo = mysqli_real_escape_string($con, $_POST['modelo_veiculo']);
        $marca = mysqli_real_escape_string($con, $_POST['marca_veicul']);
        $placa  = mysqli_real_escape_string($con, $_POST['placa']);
        $chassi  = mysqli_real_escape_string($con, $_POST['chassi']);
        $ano  = mysqli_real_escape_string($con, $_POST['ano_veiculo']);
        $tipo  = mysqli_real_escape_string($con, $_POST['ano_veiculo']);
        $idusuario   = mysqli_real_escape_string($con, $_SESSION['idusuario']);

        // INSTRUÇÃO SQL
        $sql = "INSERT INTO cursos (modelo, marca, placa, chassi, ano, tipo, idUsuario) VALUES ('$modelo', '$marca', '$$placa', '$chassi', '$$ano', '$tipo', ' $idusuario')";

        // EXECUTAR INSTRUCAO SQL E VERIFICAR SUCESSO
        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            $_SESSION['status']   = "success";
            header('Location: ../painel.php');
        } else {
            $_SESSION['mensagem'] = "Não foi possível cadastrar curso";
            $_SESSION['status']   = "danger";
            header('Location: ../painel.php');
        }
        // FECHAR CONEXAO
        mysqli_close($con);
    }