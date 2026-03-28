<?php
header('Content-Type: application/json'); // Define que a resposta será JSON
include "conn.php";

// Verifica se é uma requisição POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Verifica se os campos existem
    if (isset($_POST["user-name"]) && isset($_POST["user-email"]) && isset($_POST["user-password"])) {
        
        $nome = $_POST["user-name"];
        $email = $_POST["user-email"];
        $pass = $_POST["user-password"];
        
        // Validações básicas
        if (empty($nome) || empty($email) || empty($pass)) {
            echo json_encode([
                'success' => false,
                'message' => 'Todos os campos são obrigatórios'
            ]);
            exit;
        }
        
        // Corrigindo a query SQL (você tinha apenas nome e 3 placeholders)
        $sql = "INSERT INTO USUARIO (nome, email, senha) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nome, $email, $pass);
        
        if ($stmt->execute()) {
            echo json_encode([
                'success' => true,
                'message' => 'Usuário cadastrado com sucesso!'
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Erro ao cadastrar: ' . $stmt->error
            ]);
        }
        
        $stmt->close();
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Dados incompletos. Verifique todos os campos.'
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Método de requisição inválido'
    ]);
}

$conn->close();
?>