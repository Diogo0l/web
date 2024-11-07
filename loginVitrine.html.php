<?php
session_start();
if(isset($_SESSION["login"])){
    if($_SESSION["login"] == "2"){
        unset($_SESSION["login"]);
        echo "<script>alert('Email ou senha inválido!');</script>";
    }
    }

include_once("head.html.php");

echo "<body>
        <div class='card container mt-3'>
        <div class='mt-2'>
            <h2 style= 'text-align: center;'
            class='mt-0'>LOGIN</H2>
        </div>      
            <div class='mb-3' class='form-group'>
                <label>Email</label>
                <input type='text' class='form-control' name='email' required>
            </div>
            <div class='mb-3' class='form-group'>
                <label>Senha</label>
                <input type='password' class='form-control' name='senha' required>
            </div>
            <div class='mb-3'>
            <input type='submit' class='btn btn-primary' value='Entrar'> <br>
            </div>
        </form>";             
?>