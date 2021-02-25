<?php
include('view/header.php');
?>

<script>
    function cambia_de_pagina(number){
        if(number == 1){
            location.href="ordenes.php"
        }
}
</script>

<div class="container">
    <div class="row po">
        <div class="col-md-5"></div>
        <div class="col-md-5"></div>
        <div class="col-md-2">
            <input type="button" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" value="Crear Ordenes de trabajo" onclick="javascript:cambia_de_pagina(1);">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <?php
                include('componets/obtenerordenes.php');
            ?>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>


<?php
include('view/footer.php');
?>