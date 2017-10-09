<!DOCTYPE html>
<html>
  <head>
    <?php include '../cabecalho.php'?>
  </head>
  <body>
    <?php include '../navBar.php';
    include '../conexao.php';?>
    <div class="d2">
      <?php
      if(isset($_GET['inserir']) && $_GET['inserir']){
        $nome = $_POST["nome"];
        $papel = $_POST["papel"];
        $query = "insert into tblUsuarioPapel(tblUsuario_id,tblPapel_id) values('$nome','$papel');";
         if( $conn->query($query) === true){
           echo "<p>usuario cadastrado com sucesso</p>";
         }
        $conn->close();
      }
      else if(isset($_GET['atualizar']) && $_GET['atualizar']){
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $papel = $_POST["papel"];
        $query = "update tblUsuario SET tblPapel_id = '$papel',tblUsuario_id = '$nome' where id = '$id';";
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