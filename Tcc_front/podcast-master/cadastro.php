<?php
 

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
  
        include_once('conexao.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
       

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha) 
        VALUES ('$nome','$email','$senha')");

        header('Location: index.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="caminho-do-seu-css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
  
  
    <link rel="stylesheet" href="css/aos.css">
  
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
  
  
      <header class="site-navbar py-4" role="banner">
  
        <div class="container">
          <div class="row align-items-center" style="justify-content: center;">
              <img src='./images/imagem2.png' alt="Avatar Logo" style="width:160px; position:center;" class="rounded-pill"> 
          </div>
        </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <h2>Cadastro de Usuário</h2>
                <form action="cadastro.php" method="post">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" placeholder="Digite seu nome" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" placeholder="Digite seu email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" placeholder="Digite sua senha" id="senha" name="senha" required>
                    </div>
                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Cadastrar</button>
                    <p>Já tem uma conta? <a href="index.php">Faça login aqui</a>.</p>
                </form>
                
            </div>
        </div>
    </div>

</body>
</html>
