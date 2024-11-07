<?php
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$senha = md5($senha);

include_once("conexaoVitrine.php");
$sql = "SELECT * FROM cadastrocliente WHERE email = '$email' AND usuario = '$usuario' AND senha = '$senha'";

$result = mysqli_query($conn, $sql);
if (mysqli_fetch_array($result)) {
    header('Location:vitrine.php');
} else {                                    
    session_start();
    $_SESSION["login"] = "2";
    header('Location:vitrine.php');
}
?>