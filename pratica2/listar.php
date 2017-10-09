<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
                $conn = new mysqli("localhost","root","","dbWeb02");  
                if ($conn->connect_error) {
                   die("Connection failed: " . $conn->connect_error);
                }
        $query = "SELECT * FROM tblUsuario";
                $result = $conn->query($query);
        if ($result->num_rows > 0) {
                   // output data of each row
                   while($row = $result->fetch_assoc()) {
                     echo "id: " . $row["id"]. " Nome: ".$row["nome"]." - E-mail: " . $row["email"]." - Senha: ". $row["senha"]. "<br>";
                   }
                } else {
                   echo "0 Resultados";
                }
                $conn->close();
        ?>
        <p><a href="../index.html">Home</a></p>
    </body>
</html>