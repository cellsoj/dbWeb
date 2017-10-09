<?php
session_start();
echo "<nav class='navbar navbar-inverse'>";
  echo "<div class='container-fluid'>";
    echo "<div class='navbar-header'>";
      echo "<a class='navbar-brand' href='#'>WebSiteName</a>";
    echo "</div>";
    echo "<ul class='nav navbar-nav'>";
      echo "<li class='active'><a href='index.php'>Home</a></li>";
      echo "<li><a href='listar.php'>Listar</a></li>";
      echo "<li><a href='../index.html'>Praticas</a></li>";
    echo "</ul>";
    echo "<ul class='nav navbar-nav navbar-right'>";
    if(isset($_GET['logout']) && $_GET['logout']){
      $_SESSION['logado'] = false;
    }
    if(isset($_SESSION['logado']) && $_SESSION['logado']){
      echo "<li><a href='#'>".$_SESSION['userEmail']."</a></li>";
      echo "<li><a href='index.php?logout=true'><span class='glyphicon glyphicon-log-out'></span> Sair</a></li>";
    }else{
      echo "<li><a href='cadastrar.php'><span class='glyphicon glyphicon-user'></span> Cadastrar</a></li>";
      echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Entrar</a></li>";
    }
    echo "</ul>";
  echo "</div>";
echo "</nav>";
?>