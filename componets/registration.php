<?php
include('config.php');
session_start();

if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $rol_id = $_POST['rol_id'];

    $db = new Database();
    $query = $db->connect()->prepare("SELECT * FROM users WHERE username =:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();

    if ($query->rowCount() > 0) {
        echo '<p class="error">Usuario ya registrado</p>';
    }

    if ($query->rowCount() == 0) {
        $query = $db->connect()->prepare("INSERT INTO users(USERNAME,PASSWORD,ROL_ID) VALUES (:username,:password_hash,:rol_id)");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password, PDO::PARAM_STR);
        $query->bindParam("rol_id", $rol_id, PDO::PARAM_INT);
        $result = $query->execute();

        if ($result) {
            echo '<p class="success">Registro exitoso</p>';
        } else {
            echo '<p class="error">Algo salio Mal</p>';
        }
    }
}
?>