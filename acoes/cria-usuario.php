<?php

    //Inicia uma nova sessão
    session_start();

    //Chama a conexão
    require_once 'conexao.php';

    if (isset($_POST['bt_cadastrar'])) {
        //Pega os dados digitados e faz o escape para o banco de dados
        $nome = mysqli_real_escape_string($con, $_POST['nome']);
        $cpf = mysqli_real_escape_string($con, $_POST['cpf']);
        $idade = mysqli_real_escape_string($con, $_POST['idade']);
        $endereco = mysqli_real_escape_string($con, $_POST['endereco']);
        $celular = mysqli_real_escape_string($con, $_POST['celular']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $senha = md5(mysqli_real_escape_string($con, $_POST['senha']));

        //Intruçõa SQL
        $sql = "INSERT INTO usuarios(nome, cpf, idade, endereco, celular, email, senha) VALUES ('$nome', '$cpf', '$idade', '$endereco', '$celular', '$email', '$senha')";

        //Verifica sucesso ou falha no cadastro de novo usuário
        if (mysqli_query($con, $sql)) {
           $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
           $_SESSION['status'] = "succes";
           header('Location: ../index.php');
        } else {
        $_SESSION['mensagem'] = "Cadastro não realizado com sucesso!";
        $_SESSION['mensagem'] = "danger";
        header('Location: ../index.php');
        }
        
        //Fecha conexão
        mysqli_close($con);
    }

?>