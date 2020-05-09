<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=project2;charset=utf8;", "root", "root");
} catch(PDOException $e) {
    header("Location: landingpage.php?status=error");
    die();
}