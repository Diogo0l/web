<?php
session_start();
if(isset($_SESSION["insert"])){
    if($_SESSION["insert"] == "1"){
        unset($_SESSION["insert"]);
        echo "<script>alert('Atendimento cadastrado com sucesso!');</script>";
    }else if (($_SESSION["insert"] == "2")){
        unset($_SESSION["insert"]);
        echo "<script>alert('Erro ao cadastrar atendimento.');</script>";
        
    }

    }

echo "<!DOCTYPE html>
    <html lang='pt-br'>
        <head>
            <meta charset='UTF-8'>
             <meta name='viewport' content='width=device-width, initial-scale=1.0'>
             <title>Document</title>
             <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' referrerpolicy='no-referrer' />
            <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'
            integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo'
            crossorigin='anonymous'></script>
             <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'
            integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49'
            crossorigin='anonymous'></script>
            <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'
            integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy'
            crossorigin='anonymous'></script>
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css' integrity='sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/    gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==' crossorigin='anonymous' referrerpolicy='no-referrer' />
        </head>";

echo "<body>
        <div class='card container mt-3'>
        <div class='mt-2'>
            <h2 style= 'text-alig: center;'
            class='mt-0'>CADASTRO DE ALUNO</H2>
        </div>
        <form action='insertAluno.php' method='POST'>
            <div class='mb-3' class='form-group'>
                <label>Nome</label>
                <input type='text' class='form-control' name='nome' required>
            </div>        
            <div class='mb-3' class='form-group'>
                <label>CPF</label>
                <input type='text' class='form-control' name='cpf' required>
            </div>
            <div class='mb-3' class='form-group'>
                <label>Data de nascimento</label>
                <input type='date' class='form-control' name='dataNascimento'>
            </div>
            <div class='mb-3'>
            <input type='submit' class='btn btn-primary' value='Cadastrar'> <br>
            </div>
        </form>";             


?>