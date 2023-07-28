<?php

header("Access-Control-Allow-Origin: *");

function db()
{
    $hostname = "mysql";
    $username = "root";
    $password = "1234@abcd";
    $dbname = "perola_negra";

    $conn = mysqli_connect($hostname, $username, $password, $dbname);

    if ($conn->connect_error) {
        http_response_code(500);
        die("Não foi possivel conectar com banco de dados: $conn->connect_error");

    }

    return $conn;
}