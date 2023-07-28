<?php

require_once __DIR__ . "/../app/services/lead_service.php";

try {
    lead_post_service(
        $_POST["nome"],
        $_POST["telefone"],
        $_POST["email"],
        $_POST["mensagem"]
    );
    echo "Contato enviado!";
} catch (\Throwable $th) {
    echo "Não foi possivel enviar seu contato.";
}


