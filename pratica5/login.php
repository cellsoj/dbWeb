<html>
  <head>
    <?php include 'cabecalho.php'?>
    <title>login</title>
  </head>
  <body>
    <?php include 'navBar.php'?>
    <h2>Login</h2>
    <form action=sucesso.php method=post>
      <p>
        email:<input type="text" name="email" size=30/>
      </p>
      <p>
        senha:<input type="password" name="senha" size=30/>
      </p>
      <p><input type="submit" value="entrar" name="ent"/></p>
    </form>
    <p> ainda nao esta cadastrado? clique <a href=cadastrar.html>aqui</a>
  </body>
</html>