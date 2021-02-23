<?php
 
include('config.php');
session_start();
 
if (isset($_POST['login'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">Usuario o contraseña incorrectos</p>';
    } else {
        if (password_verify($password, $result['PASSWORD'])) {
            $_SESSION['user_id'] = $result['ID'];
            echo '<p class="success">Inicio de sesión exitoso</p>';
        } else {
            echo '<p class="error">Usuario o contraseña incorrectos</p>';
        }
    }
}
 
?>
