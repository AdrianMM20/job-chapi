<?php
    $dsn = "mysql:host=localhost;dbname=job_chapi";
    $user= "root";
    $pass= "";

    try {
        $pdo = new PDO($dsn,$user,$pass);
        $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>