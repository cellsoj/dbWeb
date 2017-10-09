<?php 
$conn = new mysqli("localhost","root","","dbWeb05");  
                  if ($conn->connect_error) {
                     die("Connection failed: " . $conn->connect_error);
                  }
?>