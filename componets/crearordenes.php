<?php
include('config.php');
session_start();

if (isset($_POST['register'])) {

    $usuario = $_POST['usuario'];
    $id_tipo_orden = $_POST['id_tipo_orden'];
    $asunto = $_POST['asunto'];
    $id_estado = 1;
  

    $db = new Database();
    $query = $db->connect();

    if($id_tipo_orden == 1){
        $query = $db->connect()->prepare("INSERT INTO ORDENES( id_tipo_orden, asunto, id_estado, fecha_creacion, fecha_limite, usuario) VALUES (:id_tipo_orden, :asunto, '$id_estado', now(), DATE_ADD(now(), INTERVAL 7 DAY), :usuario)");
    }else{
        if($id_tipo_orden == 2){
            $query = $db->connect()->prepare("INSERT INTO ORDENES( id_tipo_orden, asunto, id_estado, fecha_creacion, fecha_limite, usuario) VALUES (:id_tipo_orden, :asunto, '$id_estado', now(), DATE_ADD(now(), INTERVAL 3 DAY), :usuario)");
        }else{
            if($id_tipo_orden == 2){
                $query = $db->connect()->prepare("INSERT INTO ORDENES( id_tipo_orden, asunto, id_estado, fecha_creacion, fecha_limite, usuario) VALUES (:id_tipo_orden, :asunto, '$id_estado', now(), DATE_ADD(now(), INTERVAL 2 DAY), :usuario)");
            }
        }
    }

    $query->bindParam("id_tipo_orden", $id_tipo_orden, PDO::PARAM_INT);
    $query->bindParam("asunto", $asunto, PDO::PARAM_LOB);
    $query->bindParam("usuario", $usuario, PDO::PARAM_STR);
    $result = $query->execute();

    if ($result) {
        echo '<p class="success">Orden Exitosa</p>';
    } else {
        echo '<p class="error">Algo salio Mal</p>';
    }
    }

?>