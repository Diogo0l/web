<?php
$num = $_POST["num"];
$i = 0;

while($i <= 10){
    $resultado = $num * $i;
    echo "$num X $i = $resultado <br>";
    $i = $i + 1;
}
?>