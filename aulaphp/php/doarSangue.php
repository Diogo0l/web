<?php
$idade $_POST["idade"];

if($idade >= 18 && $idade <= 67){
    echo "Pode doar sangue!";
}else{
    echo "Não pode doar sangue!";
}

?>