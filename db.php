<?php

session_start();

$conn = mysqli_connect(
    'localhost'
    'root'
    '',
    'ususarios'
)or die (mysqli_erro($mysqli));

if(isset($conn)){
    echo 'Base de datos conectada';
}






?>