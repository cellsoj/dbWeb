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
        $descricao = $_POST["descricao"];
        $query = "insert into tblPapel(nome,descricao) values('$nome','$descricao');";
         if( $conn->query($query) === true){
           echo "<p>Papel cadastrado com sucesso</p>";
         }
        $conn->close();
      }
      else if(isset($_GET['atualizar']) && $_GET['atualizar']){
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $query = "update tblPapel SET nome = '$nome',descricao = '$descricao' where id = '$id';";
          if( $conn->query($query) === true){
           echo "<p>Papel atualizado com sucesso</p>";
         }
      }
      else if(isset($_GET['deletar']) && $_GET['deletar']){
        $query = "delete from tblPapel where id = ".$_GET['id'];
     if( $conn->query($query) === true){
           echo "<p>Papel deletado com sucesso</p>";
         }
      }
      ?>
    </div>
  </body>
</html>