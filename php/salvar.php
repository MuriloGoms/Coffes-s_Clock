<?php
include "conn.php";

if (isset($_POST["user-name"])) {
    $nome = $_POST["user-name"];


    $sql = "INSERT INTO USUARIO (nome) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nome);

    if ($stmt->execute()) {
        echo "Usuário cadastrado com sucesso";
    } else {
        echo "Erro ao cadastrar";
    }

    $stmt->close();
} else {
    echo "Nome não recebido";
}

$conn->close();