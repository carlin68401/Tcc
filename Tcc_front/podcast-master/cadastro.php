<?php

// Conectar ao banco de dados
$conexao = new mysqli("localhost", "root", "", "cadastro");

// Verificar se a conexão foi bem-sucedida
if ($conexao->connect_error) {
  die("Erro ao conectar ao banco de dados: " . $conexao->connect_error);
}

// Obter os dados do formulário
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

// Validar os dados
if (empty($nome)) {
  echo "O nome é obrigatório.";
  exit;
}

if (empty($email)) {
  echo "O e-mail é obrigatório.";
  exit;
}

if (empty($senha)) {
  echo "A senha é obrigatória.";
  exit;
}

// Inserir os dados no banco de dados
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

$resultado = $conexao->query($sql);

// Verificar se a consulta foi bem-sucedida
if ($resultado === false) {
  echo "Erro ao inserir os dados no banco de dados: " . $conexao->error;
  exit;
}

// Retornar ao formulário de login
header("Location: login.php");

?>