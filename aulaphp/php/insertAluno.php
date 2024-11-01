<?php
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$dataNascimento = $_POST["dataNascimento"];


// CONEXÃO COM BANCO DE DADOS
// $conn = new MySQli('localhost','usuario','senha','banco de dados');
$conn = new MySQli('localhost','root','','bd_senac');

if($conn -> connect_error){
    die("Connection failed:" . $conn -> connect_error);
}else{
    $sql = "INSERT INTO alunos (nome, cpf, dataNascimento) VALUES ('$nome', '$cpf', '$dataNascimento')";

    if(mysqli_query($conn,$sql)){
        if(mysqli_affected_rows($conn)){
            session_start();//incia a sessão
            $_SESSION["insert"] = "1";
            header('Location:InsertAluno.html.php');
            echo "Cadastro realizado com sucesso!";
        }else{
            $_SESSION["insert"] = "2";
            echo "Falha ao cadastrar.";
        }
    }else{
    echo "Falha no comando SQL.";
    }
}
?>