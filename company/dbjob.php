<?php
    $dsn = "mysql:host=localhost;dbname=job_chapi";
    $user= "root";
    $pass= "";

    try {
        $pdo = new PDO($dsn,$user,$pass);
        $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "conexion exitosa ...";

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>