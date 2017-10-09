<html>
  <head>
     <link rel="stylesheet"
		type="text/css"
		href="css/01.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Lista de Usuario</title>
  </head>
  <body>
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
          $conn = new mysqli("localhost","root","","dbWeb03");  
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