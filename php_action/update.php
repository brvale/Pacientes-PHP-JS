<?php
//Sessão
session_start();
//Conexão
require_once 'db_connect.php';

if (isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $indicacao = mysqli_escape_string($connect, $_POST['indicacao']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);
    $cep = mysqli_escape_string($connect, $_POST['cep']);
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
    $id = mysqli_escape_string($connect, $_POST['id']); 
    
    $sql = "UPDATE paciente SET nome= '$nome', indicacao= '$indicacao', endereco= '$endereco', cep= '$cep', telefone= '$telefone', cpf= '$cpf', 
    estadoCivil= '$estadoCivil', idade= '$idade', rg= '$rg', profissao= '$profissao', pressaoAlta= '$pressaoAlta', fumante= '$fumante', bebe= '$bebe', alergico= '$alergico', 
    tomaRemedio= '$tomaRemedio', fezCirurgia= '$fezCirurgia', problemaSaude= '$problemaSaude', maxSuperior= '$maxSuperior', maxInferior= '$maxInferior', tratamento= '$tratamento', 
    orcamento= '$orcamento' WHERE id= '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../index.php?');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar!";
        header('Location: ../index.php?');
    endif;
endif;
?>