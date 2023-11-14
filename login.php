<?php

// Conectar ao banco de dados
$conexao = new mysqli("localhost", "root", "", "cadastro");

// Verificar se a conexão foi bem-sucedida
if ($conexao->connect_error) {
  die("Erro ao conectar ao banco de dados: " . $conexao->connect_error);
}

// Obter os dados do formulário
$email = $_POST["email"];
$senha = $_POST["senha"];

// Validar os dados
if (empty($email)) {
  echo "O e-mail é obrigatório.";
  exit;
}

if (empty($senha)) {
  echo "A senha é obrigatória.";
  exit;
}

// Verificar as credenciais do usuário
$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

$resultado = $conexao->query($sql);

// Verificar se o usuário foi encontrado
if ($resultado->num_rows == 0) {
  echo "Usuário ou senha inválidos.";
  exit;
}

// Autenticação bem-sucedida
$usuario = $resultado->fetch_assoc();

// Iniciar a sessão
session_start();

// Armazenar as informações do usuário na sessão
$_SESSION["login_user"] = $usuario["nome"];

// Retornar para a página principal
header("Location: index.html");

?>