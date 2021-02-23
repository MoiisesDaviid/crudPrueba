<?php
define('USER', 'root');
define('PASSWORD', 'root');
define('HOST', 'localhost:3308');
define('DATABASE', 'prueba');
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>