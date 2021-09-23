<?php
//Sessão
session_start();
//Conexão
require_once 'db_connect.php';

if (isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);
    $cep = mysqli_escape_string($connect, $_POST['cep']);
    $indicacao = mysqli_escape_string($connect, $_POST['indicacao']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $estadoCivil = mysqli_escape_string($connect, $_POST['estadoCivil']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    $rg = mysqli_escape_string($connect, $_POST['rg']);
    $profissao = mysqli_escape_string($connect, $_POST['profissao']);
    $pressaoAlta = mysqli_escape_string($connect, $_POST['pressaoAlta']);
    $fumante = mysqli_escape_string($connect, $_POST['fumante']);
    $bebe = mysqli_escape_string($connect, $_POST['bebe']);
    $alergico = mysqli_escape_string($connect, $_POST['alergico']);
    $tomaRemedio = mysqli_escape_string($connect, $_POST['tomaRemedio']);
    $fezCirurgia = mysqli_escape_string($connect, $_POST['fezCirurgia']);
    $problemaSaude = mysqli_escape_string($connect, $_POST['problemaSaude']);
    $maxSuperior = mysqli_escape_string($connect, $_POST['maxSuperior']);
    $maxInferior = mysqli_escape_string($connect, $_POST['maxInferior']);
    $tratamento = mysqli_escape_string($connect, $_POST['tratamento']);
    $orcamento = mysqli_escape_string($connect, $_POST['orcamento']);
    
    $sql = "INSERT INTO paciente (nome, endereco, cep, indicacao, telefone, cpf, estadoCivil, idade, rg, profissao, pressaoAlta, fumante, bebe, alergico, tomaRemedio, fezCirurgia, 
    problemaSaude, maxSuperior, maxInferior, tratamento, orcamento) 
    VALUES ('$nome', '$endereco', '$cep', '$indicacao', '$telefone', '$cpf', '$estadoCivil', '$idade', '$rg', '$profissao', '$pressaoAlta', '$fumante', '$bebe', '$alergico', 
    '$tomaRemedio', '$fezCirurgia', '$problemaSaude', '$maxSuperior', '$maxInferior', '$tratamento', '$orcamento')";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../index.php?');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location: ../index.php?');
    endif;
endif;
?>