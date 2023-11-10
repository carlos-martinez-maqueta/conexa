<?php
$host = "localhost";
$database = "bd_conexa";
$user = "root";
$pass = ""; // ¡Se agregó el punto y coma al final!

 
try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
    // para comprobar que esta funcionando
    // foreach ($conn->query("SHOW DATABASES") as $row) {
    //     print_r($row);
    // }
    // die();
} catch (PDOException $e) {
    die("PDO Connection Error: " . $e->getMessage());
}
