<?php
session_start();
include "conexao.php";

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE login = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $login);
$stmt->execute();
$result = $stmt->get_result();

if($user = $result->fetch_assoc()){
    if(password_verify($senha, $user['senha'])){
        $_SESSION['usuario'] = $user['login'];
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "msg" => "Senha incorreta"]);
    }
} else {
    echo json_encode(["success" => false, "msg" => "Usuário não encontrado"]);
}

$conn->close();
?>
