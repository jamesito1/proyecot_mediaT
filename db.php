<?php

session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'ususarios'
)or die (mysqli_error($mysqli));

if(isset($conn)){
    echo 'Base de datos conectada';
}


?>