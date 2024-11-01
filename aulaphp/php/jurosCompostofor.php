<?php
$capital = 10;
$taxa = 0.12;
$tempo = 12;

$i = 1;
for($i = 1 ;$i <= $tempo; $i++){
    $juros = $capital * $taxa;
    $montante = $capital + $juros;
    echo "$i º ano: juros = ". round($juros, 2) . " e Total = ". round($montante, 2) . " <br>";
    $capital = $montante;
}
?>