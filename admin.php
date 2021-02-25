<?php
session_start();

    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: login.php');
        }
    }

include('view/header.php');
?>

<script>
    function cambia_de_pagina(number){
        if(number == 1){
            location.href="registro.php"
        }else{
            location.href="ordenesview.php"
        }

}
</script>

<div class="container">
    <div class="row pp">
        <div class="col-md-3"></div>
        <div class="col-md-3">
            <input type="button" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" value="Ordenes de Trabajo" onclick="javascript:cambia_de_pagina(2);">
        </div>
        <div class="col-md-3">
            <input type="button" value="Registro de usuarios" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" onclick="javascript:cambia_de_pagina(1);" >
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<?php
include('view/footer.php');
?>
