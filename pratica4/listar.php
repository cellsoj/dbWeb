<html>
  <head>
    <?php include 'cabecalho.php'?>
    <title>Lista de Usuario</title>
  </head>
  <body>
		<?php include 'navBar.php'?>
    <div class="d1">
        Lista de usuarios
    </div>
    <div class="d3">
      <table class="table table-condensed">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $conn = new mysqli("localhost","root","","dbWeb04");  
          if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
          }
          $query = "SELECT * FROM tblUsuario";
          $result = $conn->query($query);
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>". $row["id"]."</td>";
              echo "<td>". $row["nome"]."</td>";
              echo "<td>". $row["email"]."</td>";
              echo "<td>". $row["senha"]."</td>";
							if(isset($_SESSION['logado']) && $_SESSION['logado']){
								echo "<td><a type='button' href='edite.php?id=".$row["id"]."' class='btn btn-warning'>Edite</a></td>";
								echo "<td><a type='button'href='gravar.php?id=".$row["id"]."&deletar=true' class='btn btn-danger'>Apagar</a></td>";
							}
            }
          }
          else {
            echo "0 Resultados";
          }
          $conn->close();
          ?>
        </tbody>
      </table>
      <p><a href="../index.html">Home</a></p>
    </div>
       
    </body>
</html>