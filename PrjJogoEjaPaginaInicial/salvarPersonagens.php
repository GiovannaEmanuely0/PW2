<?php
include("conexaoPaginaInicial.php"); // aqui deve ter sua conexão PDO no $pdo

// Receber os dados enviados via fetch (JSON)
$dados = json_decode(file_get_contents("php://input"), true);

// Pega o nome do personagem
$nome = $dados['nome'] ?? null;

if ($nome) {
    try {
        $stmt = $pdo->prepare("INSERT INTO tbPersonagemSelecionado (nomePersonagemSelcionado) VALUES (:nome)");
        $stmt->bindParam(":nome", $nome);
        
        if ($stmt->execute()) {
            echo "Personagem '$nome' salvo em tbPersonagemSelecionado!";
        } else {
            echo "Erro ao salvar personagem.";
        }
    } catch (PDOException $e) {
        echo "Erro no banco: " . $e->getMessage();
    }
} else {
    echo "Nenhum personagem recebido.";
}
?>