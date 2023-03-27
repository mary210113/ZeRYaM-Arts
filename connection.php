<?php
 
$conn = "";
  
try {
    $servername = "localhost:3306";
    $dbname = "Zeryam";
    $username = "root";
    $password = "";
  
    $conn = new PDO(
        "mssql:host=$servername; dbname=Zeryam",
        $username, $password
    );
     
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
 
?>