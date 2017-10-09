<!DOCTYPE html>
<html>
  <head>
    <?php include '../cabecalho.php'?>
    <title>login</title>
  </head>
  <body>
    <?php include '../navBar.php';
		include '../conexao.php';?>
    <div class="row">
      <div class="col-sm-4"></div>
			<div class="col-sm-4">
        <div class="d2">
          <h2>Cadastrar</h2>
          <form action='gravar.php?inserir=true' method=post>
              <div class='form-group'>
                 <label for="sel1">Usuarios:</label>
										<select class="form-control" name= "nome" id="sel1">
											<?php 
												$query = "SELECT * FROM tblUsuario";
												$result = $conn->query($query);
												if ($result->num_rows > 0) {
													// output data of each row
													while($row = $result->fetch_assoc()) {
														echo "<option value=". $row["id"].">". $row["nome"]."</option>";
													}
												}
											?>
										</select>
              </div>
              <div class='form-group'>
									<label for="sel1">Papeis:</label>
										<select class="form-control" name="papel" id="sel1">
											<?php 
												$query = "SELECT * FROM tblPapel";
												$result = $conn->query($query);
												if ($result->num_rows > 0) {
													// output data of each row
													while($row = $result->fetch_assoc()) {
														echo "<option value=". $row["id"].">". $row["nome"]."</option>";
													}
												}
											?>
										</select>
							</div>
              <button type='submit' class='btn btn-default'>Submit</button>
            </form>
    </div>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </body>
</html>
