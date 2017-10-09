<html>
  <head>
    <?php include 'cabecalho.php'?>
  </head>
  <body>
    <?php include 'navBar.php'?>
    <div class="d2">
      <?php
      
      $conn = new mysqli("localhost","root","","dbWeb04");  
                  if ($conn->connect_error) {
                     die("Connection failed: " . $conn->connect_error);
                  }
      if(isset($_GET['inserir']) && $_GET['inserir']){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = sha1($_POST["senha"]);
        $query = "insert into tblUsuario(nome,email,senha) values('$nome','$email','$senha');";
         if( $conn->query($query) === true){
           echo "<p>usuario cadastrado com sucesso</p>";
         }
        $conn->close();
      }
      else if(isset($_GET['atualizar']) && $_GET['atualizar']){
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = sha1($_POST["senha"]);
        $query = "update tblUsuario SET nome = '$nome',email = '$email' where id = '$id';";
          if( $conn->query($query) === true){
           echo "<p>usuario atualizado com sucesso</p>";
         }
      }
      else if(isset($_GET['deletar']) && $_GET['deletar']){
        $query = "delete from tblUsuario where id = ".$_GET['id'];
     if( $conn->query($query) === true){
           echo "<p>usuario deletado com sucesso</p>";
         }
      }
      ?>
    </div>
  </body>
</html>