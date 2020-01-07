<?php
session_start();
 
require 'init.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
 
        <title>Lesson Session</title>
    </head>
 
    <body>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-signin-client_id" content="983154479117-fbds9i4h6jfvdmkjsrvqiojd1n53od33.apps.googleusercontent.com">
    <title>Lesson Session - Login</title>

    <!--- CSS --->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    
    <!-- Navbar -->
    <nav class="navbar navbarColor">
      <a class="navbar-brand navbarColorWhite active" href="index.php">
        <i class="fas fa-user-graduate"></i>  
        &nbsp;  | &nbsp; Lession Session
      </a>
      <?php if (isLoggedIn()): ?>
            Olá, <?php echo $_SESSION['user_name']; ?>. <a href="panel.php">Painel</a> | <a href="logout.php">Sair</a>
        <?php else: ?>
            <a class="btn btn-sm btn-info" href="form-login.php">Entrar</a>
        <?php endif; ?>
    </nav>


    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid jumbotronStyle">
      <div class="container">
        <h1 class="display-2">Lesson Session</h1>
        <p class="lead jumbotronGray">De aluno para professores e alunos</p>
      </div>
    </div>


    <!--- Media Objects --->
    <ul class="list-unstyled container">
      <li class="media">
        <i class="fas fa-lock fa-3x mediaIconSize" style="color: #60C6D5"></i>
        <div class="media-body">
          <h5 class="mt-0 mb-1 mediaColorTitle">Segurança</h5>
          <h6 class="mt-2 mb-5 mediaColorText">Seus dados são protegidos com criptografia MD5.<h6>
      </li>
      <li class="media">
        <i class="fas fa-book fa-3x mediaIconSize"></i>
        <div class="media-body">
          <h5 class="mt-0 mb-1 mediaColorTitle">Educação</h5>
          <h6 class="mt-2 mb-5 mediaColorText">Banco de questões online ao qual evita o gasto com papel e maior implementação da tecnologia na instituição.<h6>
      </li>
      <li class="media">
        <i class="fas fa-child fa-3x mediaIconSize"></i>
        <div class="media-body">
          <h5 class="mt-0 mb-1 mediaColorTitle">Código Aberto</h5>
          <h6 class="mt-2 mb-5 mediaColorText">Você que gosta de programação e tecnologia pode contribuir para o projeto, que é Open Source. Assim torna-o mais seguro e intuitivo.<h6>
      </li>
    </ul>


    <!--- Scripts --->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7afebb249a.js" crossorigin="anonymous"></script>



</body>
</html>

    </body>
</html>