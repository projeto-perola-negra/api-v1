<?php
require_once __DIR__ . "/../infra/db.php";

function lead_post_service(string $nome, string $telefone, string $email, string $mensagem)
{
    $nome = str_replace("'", "\'", $nome);
    $telefone = str_replace("'", "\'", $telefone);
    $email = str_replace("'", "\'", $email);
    $mensagem = str_replace("'", "\'", $mensagem);
    $conn = db();

    $conn->query("INSERT INTO leads(nome,telefone,email,mensagem) VALUES('$nome','$telefone','$email','$mensagem')");
}