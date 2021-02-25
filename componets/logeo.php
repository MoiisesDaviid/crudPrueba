<?php
include_once 'config.php';
session_start();

if (isset($_GET['cerrar_sesion'])){
    session_unset();

    session_destroy();
}

if(isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
        case 1:
            header('location: ./admin.php');
        break;

        case 2:
        header('location: ./user.php');
        break;

        default:
    }
}

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $db = new Database();
    $query = $db->connect()->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
    $query->execute(['username' => $username, 'password' => $password]);

    $row = $query->fetch(PDO::FETCH_NUM);
    
    if($row == true){
        $rol = $row[3];

        $_SESSION['rol'] = $rol;
        switch($rol){
            case 1:
                header('location: ./admin.php');
            break;
    
            case 2:
            header('location: ./user.php');
            break;
    
            default:
        }

    }else{
        //No existe el rol
        echo "El usuario o contraseña son incorrectos";
    }
}

?>


