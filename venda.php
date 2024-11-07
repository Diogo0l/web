<?php
$produto    = $_POST["produto"];
$preco      = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$desconto   = $_POST["desconto"];

echo "Produto: $produto <br>";
echo "Preço: $preco <br>";
echo "Quantidade: $quantidade <br>";
echo "Desconto: $desconto <br>";

$total = $preco * $quantidade / $desconto;
echo "Total: $total";
?>