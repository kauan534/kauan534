<?php
include "conexao.php";

// Captura os dados do formulário
$nomeDono = $_POST['nomeDono'];
$telefone = $_POST['telefone'];
$nomePet = $_POST['nomePet'];
$especie = $_POST['especie'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$obs = $_POST['observacoes'];

// Prepara a query de inserção
$sql = "INSERT INTO agendamentos (nomeDono, telefone, nomePet, especie, dataConsulta, horaConsulta, observacoes) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $nomeDono, $telefone, $nomePet, $especie, $data, $hora, $obs);

// Executa e retorna resposta
if ($stmt->execute()) {
    echo json_encode(["success" => true, "msg" => "Consulta agendada com sucesso!"]);
} else {
    echo json_encode(["success" => false, "msg" => $conn->error]);
}

$stmt->close();
$conn->close();
?>
