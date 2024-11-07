<?php
include_once("head.html.php");
include_once("conexaoVitrine.php");

$sql = "SELECT * FROM cadastrocliente";
$result = mysqli_query($conn, $sql);
// verifica se retornou algo do banco de dados
if ($result) {
    echo "<div class='container card mt-2'>
    <h2>Lista de Clientes</h2>

    <a class='btn btn-primary mt-2 mb-2' href='InsertVitrine.html.php'> <i class='fa fa-plus'> </i> Cadastrar </a>

    <table class='table table-striped table-sm'>
    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Email</th>
        <th>Senha</th>
        <th>Editar</th>
        <th>Deletar</th>
    </tr>";

    while ($linha = mysqli_fetch_array($result)) {
        echo "
        <tr>
            <td> $linha[id]</td>
            <td> $linha[usuario]</td>
            <td> $linha[email]</td>
            <td> $linha[senha]</td>

        <form action='updateCliente.html.php' method='post'>
        <td>
        <button class='btn btn-warning' type='submit'
        value=''> <i class='far fa-edit '></i> 
        </button> 
        </td>
        </form>
        
        <form action='deleteCliente.html.php' method='post'>
        <td><button class='btn btn-danger' type='submit' value='Deletar'> <i class='fa fa-trash'> </i>
        </button>
        </td>
        </form>
        </tr>";
    }
    echo "</table>";
}
?>