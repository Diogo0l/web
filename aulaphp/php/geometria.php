<?php
$forma = $_POST["forma"];
$base = $_POST["base"];
$altura = $_POST["altura"];

if($forma == "retangulo"){
    $area = $base * $altura;

    echo "Base: $base <br>"; 
    echo "Altura: $altura <br>";
    echo "A área do retângulo é: $area";

}else{
$area = ($base * $altura) /2;

echo "Base: $base <br>";
echo "Altura: $altura <br>";
echo "A área do triângulo é: $area";
}
?>