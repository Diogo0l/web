<?php
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$senha = $_POST["senha"];


// CONEXÃO COM BANCO DE DADOS
// $conn = new MySQli('localhost','usuario','senha','banco de dados');
$conn = new MySQli('localhost','root','','bd_vitrine');

if($conn -> connect_error){
    die("Connection failed:" . $conn -> connect_error);
}else{
    $sql = "INSERT INTO cadastrocliente (usuario, email, senha) VALUES ('$email', '$usuario', '$senha')";

    if(mysqli_query($conn,$sql)){
        if(mysqli_affected_rows($conn)){
            session_start();//incia a sessão
            $_SESSION["insert"] = "1";
            header('Location:vitrine.html.php');
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