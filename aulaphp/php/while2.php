<?php
$qtd = $_POST["qtd"];
$valor = 5;
$vkm = 2.50;

$i = 1;
while($i <= $qtd){
    $valor = ($valor + $vkm);
    echo $i."º Km: $valor <br>";
    $i = $i + 1;
}
?>