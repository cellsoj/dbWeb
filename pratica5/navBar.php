  <?php
session_start();
echo "<nav class='navbar navbar-inverse'>";
  echo "<div class='container-fluid'>";
    echo "<div class='navbar-header'>";
      echo "<a class='navbar-brand' href='#'>WebSiteName</a>";
    echo "</div>";
    echo "<ul class='nav navbar-nav'>";
      echo "<li class='active'><a href='/pratica5/index.php'>Home</a></li>";
      //echo "<li><a href='/pratica5/tblUsuario/listar.php'>Listar</a></li>";
       echo "<li class='dropdown'>";
        echo "<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Listar";
        echo "<span class='caret'></span></a>";
        echo "<ul class='dropdown-menu'>";
          echo "<li><a href='/pratica5/tblUsuario/listar.php'>Usuarios</a></li>";
          echo "<li><a href='/pratica5/tblPapel/listar.php'>Papeis</a></li>";
          echo "<li><a href='/pratica5/tblUsuarioPapel/listar.php'>Usuario Papeis</a></li>";
        echo "</ul>";
      echo "</li>";
      echo "<li><a href='/index.html'>Praticas</a></li>";
    echo "</ul>";
    echo "<form class='navbar-form navbar-left' action = /pratica5/tblUsuario/listar.php?buscar=true method=post >";
      echo "<div class='input-group'>";
        echo "<input type='text' name = 'busca'  class='form-control' placeholder='Search'>";
        echo "<div class='input-group-btn'>";
          echo "<button class='btn btn-default' type='submit'>";
            echo "<i class='glyphicon glyphicon-search'></i>";
          echo "</button>";
        echo "</div>";
      echo "</div>";
    echo "</form>";
    echo "<ul class='nav navbar-nav navbar-right'>";
    if(isset($_GET['logout']) && $_GET['logout']){
      $_SESSION['logado'] = false;
    }
    if(isset($_SESSION['logado']) && $_SESSION['logado']){
      echo "<li><a href='#'>".$_SESSION['userEmail']."</a></li>";
      if (in_array("Admin", $_SESSION["userRoles"])) {
        echo "<li class='dropdown'>";
          echo "<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Cadastrar";
          echo "<span class='caret'></span></a>";
          echo "<ul class='dropdown-menu'>";
            echo "<li><a href='/pratica5/tblUsuario/cadastrar.php'><span class='glyphicon glyphicon-user'></span> Usuario</a></li>";
            echo "<li><a href='/pratica5/tblPapel/cadastrar.php'><span class='glyphicon glyphicon-file'></span>Papel</a></li>";
            echo "<li><a href='/pratica5/tblUsuarioPapel/cadastrar.php'><span class='glyphicon glyphicon-file'></span>Usuario Papel</a></li>";
          echo "</ul>";
        echo "</li>";
      }
      echo "<li><a href='/pratica5/index.php?logout=true'><span class='glyphicon glyphicon-log-out'></span> Sair</a></li>";
    }else{
      echo "<li><a href='/pratica5/tblUsuario/cadastrar.php'><span class='glyphicon glyphicon-user'></span> Cadastrar</a></li>"; 
      echo "<li><a href='/pratica5/login.php'><span class='glyphicon glyphicon-log-in'></span> Entrar</a></li>";
    } 
    echo "</ul>";
  echo "</div>";
echo "</nav>";
?>