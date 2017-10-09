<!DOCTYPE html>
<html>
  <head>
    <?php include '../cabecalho.php'?>
    <title>login</title>
  </head>
  <body>
    <?php include '../navBar.php'?>
    <div class="row">
      <div class="col-sm-4"></div>
			<div class="col-sm-4">
        <div class="d2">
          <h2>Cadastrar</h2>
          <form action='gravar.php?inserir=true' method=post>
              <div class='form-group'>
                <label for='nome'>Nome</label>
                <input type='text' name = nome class='form-control'  id='nome'>
              </div>
              <div class="form-group">
  							<label for="comment">Descrição</label>
  							<textarea class="form-control" name = descricao rows="5" id="comment"></textarea>
							</div>
              <button type='submit' class='btn btn-default'>Submit</button>
            </form>
    </div>
      </div>
      <div class="col-sm-4"></div>
    </div>
    
  </body>
</html>