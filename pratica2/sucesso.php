<html>
  <head>
    <title>bem vindo!</title>
  </head>
  <body>
    <?php
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $conn = new mysqli("localhost","root","","dbWeb02");  
              if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
              }
    $query = "SELECT senha FROM tblUsuario where email = '".$email."';";
                $result = $conn->query($query);
        if ($result->num_rows > 0) {
                   // output data of each row
                   while($row = $result->fetch_assoc()) {
                     if($row["senha"] === $senha){
                       echo "seja bem vindo '$email'";
                     }else{
                      echo "email ou senha invalido" ;
                     }
                   }
                } else {
                   echo "Senha ou usuario invalido";
                }
                $conn->close();
    ?>
    <p><a href="listar.php"> ir para lista de usuarios</a></p>
    <p><a href="../index.html">Home</a></p>
  </body>
</html>