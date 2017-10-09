<!DOCTYPE html>
<html>
  <head>
    <?php include 'cabecalho.php'?>
    <title>bem vindo!</title>
  </head>
  <body>
    <?php include 'navBar.php';
    include 'conexao.php';?>
    <?php
    $email = $_POST["email"];
    $senha = sha1($_POST["senha"]);
    $query = "SELECT * FROM tblUsuario where email = '".$email."';";
                $result = $conn->query($query);
        if ($result->num_rows > 0) {
                   // output data of each row
                   while($row = $result->fetch_assoc()) {
                     if($row["senha"] === $senha){
                       echo "seja bem vindo '$email'";
                       /*$_SESSION['logado']= true;
                       $_SESSION['userEmail'] = $email;*/
                       $_SESSION["logado"]=true;
                       $_SESSION["userNome"]=$row["nome"];
                       $_SESSION["userEmail"]=$row["email"];
                       $_SESSION["userRoles"]=array();
                       
                       $busca = "SELECT tblUsuarioPapel.id, tblUsuario.id AS uid, tblUsuario.nome AS unome, tblPapel.id AS pid, tblPapel.nome AS pnome FROM tblUsuario, tblPapel, tblUsuarioPapel WHERE tblUsuario.id = tblUsuarioPapel.tblUsuario_id AND tblPapel.id = tblUsuarioPapel.tblPapel_id AND tblUsuario.id='".$row["id"]."';";
                       $resultado = $conn->query($busca);
                       if ($resultado->num_rows > 0) {
                         while($linha = $resultado->fetch_assoc()) {
                             array_push($_SESSION["userRoles"],$linha["pnome"]);
                         }
                       }
                       header('location: index.php');
                     }else{
                      echo "email ou senha invalido" ;
                     }
                     }
                   }
                else {
                   echo "Senha ou usuario invalido";
                }
                $conn->close();
    ?>
    <p><a href="listar.php"> ir para lista de usuarios</a></p>
    <p><a href="../index.html">Home</a></p>
  </body>
</html>