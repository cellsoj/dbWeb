<!DOCTYPE html>
<html>
  <head>
    <?php include '../cabecalho.php'?>
    <title>Lista de Usuario</title>
  </head>
  <body>
		<?php include '../navBar.php';
		include '../conexao.php';?>
    <div class="d1">
        Lista de usuarios
    </div>
    <div class="row">
			<div class="col-sm-12">
				<div class="d3">
					<table class="table table-condensed">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nome</th>
								<th>Papel</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if(isset($_GET['buscar']) && $_GET['buscar']){
								$query = "SELECT * FROM tblUsuario WHERE nome LIKE '%$_POST[busca]%'";
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
							}
							else{
								$query = "SELECT * FROM tblUsuarioPapel";
								$result = $conn->query($query);
								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<tr>";
										echo "<td>". $row["id"]."</td>";
										echo "<td>". $row["tblUsuario_id"]."</td>";
										echo "<td>". $row["tblPapel_id"]."</td>";
										if(isset($_SESSION['logado']) && $_SESSION['logado']){
											if (in_array("Admin", $_SESSION["userRoles"])) {
												echo "<td><a type='button' href='edite.php?id=".$row["id"]."' class='btn btn-warning'>Edite</a></td>";
												echo "<td><a type='button'href='gravar.php?id=".$row["id"]."&deletar=true' class='btn btn-danger'>Apagar</a></td>";
											}else if(in_array("normal", $_SESSION["userRoles"])){
												echo "<td><a type='button' href='edite.php?id=".$row["id"]."' class='btn btn-warning'>Edite</a></td>";
											}
										}
									}
								}
								else {
									echo "0 Resultados";
								}
							}
							$conn->close();
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		
       
    </body>
</html>