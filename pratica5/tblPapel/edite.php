<!DOCTYPE html>
<html>
  <head>
    <?php include '../cabecalho.php'?>
  </head>
  <body>
    <?php include '../navBar.php';
    include '../conexao.php';?>
    <?php
          $query = "SELECT * FROM tblPapel where id=".$_GET['id'];
          $result = $conn->query($query);
          if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo"<div class='row'>";
              echo"<div class='col-sm-4'></div>";
              echo "<div class='col-sm-4'>";
              echo "<form action=gravar.php?atualizar=true method=post>";
              echo "<div class='form-group'>";
                echo "<label for='id'>Id</label>";
                echo "<input type='text'name = id class='form-control'value=".$row["id"]." id='id'>";
              echo "</div>";
              echo "<div class='form-group'>";
                echo "<label for='nome'>Nome</label>";
                echo "<input type='text'name = nome class='form-control' value=".$row["nome"]." id='nome'>";
              echo "</div>";
              echo "<div class='form-group'>";
  							echo "<label for='comment'>Descrição</label>";
  							echo "<textarea class='form-control' name = descricao rows='5' id='comment'>".$row["descricao"]."</textarea>";
							echo "</div>";
              echo "<button type='submit' class='btn btn-default'>Submit</button>";
            echo "</form>";
             echo "</div>";
              echo "<div class='col-sm-4'></div>";
            echo "</div>";
           } 
    ?>
  </body>
</html>