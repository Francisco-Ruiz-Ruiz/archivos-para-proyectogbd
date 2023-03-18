<?php
    $servername = "rds-my-proyecto.cjkxksi4tnnu.us-east-1.rds.amazonaws.com";
    $username = "admin";
    $password = "Root1234$";
    $bd="usuario";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$bd", $username, $password);
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
 ?>