<html>
  <head>
    <?php include 'cabecalho.php'?>
    <title>bem vindo!</title>
  </head>
  <body>
    <?php include 'navBar.php'?>
    <?php
    $email = $_POST["email"];
    $senha = sha1($_POST["senha"]);
    $conn = new mysqli("localhost","root","","dbWeb04");  
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
                       $_SESSION['logado']= true;
                       $_SESSION['userEmail'] = $email;
                       header('location: index.php');
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