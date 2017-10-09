<html>
  <head>
    
  </head>
  <body>
    <?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = sha1($_POST["senha"]);
    $conn = new mysqli("localhost","root","","dbWeb02");  
              if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
              }
    $query = "insert into tblUsuario(nome,email,senha) values('$nome','$email','$senha');";
     if( $conn->query($query) === true){
       echo "usuario cadastrado com sucesso";
     }
    $conn->close();
    ?>
    <p><a href="../index.html">Home</a></p>
    <p><a href="login.html">entrar</a></p>
  </body>
</html>