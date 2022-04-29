<?php

$hostname = "localhost";
$bancodedados = "bancodedados";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $bancodedados, $usuario, $senha);

if ($mysqli->connect_errno) {
    echo = "falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
}

