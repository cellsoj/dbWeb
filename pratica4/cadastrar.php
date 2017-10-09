<html>
  <head>
    <?php include 'cabecalho.php'?>
    <title>login</title>
  </head>
  <body>
    <?php include 'navBar.php'?>
    <div class="d2">
      <h2>Cadastrar</h2>
      <form action='gravar.php?inserir=true' method=post>
        <p>
          nome<input type=text name=nome size=30/>
        </p>
        <p>
          senha:<input type="password" name="senha" size=30/>
        </p>
        <p>
          email<input type=text name=email size=30/>
        </p>
        <p><input type="submit" value="cadastrar" name="cad"/></p>
      </form>
    </div>
  </body>
</html>