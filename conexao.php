<?php

$hostname = 'localhost';
$bancodedador = 'bancodados';
$usuario = 'root';
$senha = '';

$mysqli = new mysqli($hostname, $bancodedador, $usuario, $senha);
if ($mysqli -> connect_errno) {
    echo 'falha ao conectar: (' . $mysqli->mysqli_errno . ') ' . $mysqli->connect_error; 
}