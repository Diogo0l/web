<?php
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
$n4 = $_POST["n4"];

$media = ($n1 + $n2 + $n3 + $n4) / 4;
echo "A média do aluno é: $media <br>";

if($media >= 7){
    echo "Aluno aprovado!";
}
if($media <= 4){
    echo "Aluno reprovado!";
}
if($media > 4 && $media <7){
    echo "O aluno está de recuperação!";
}
?>