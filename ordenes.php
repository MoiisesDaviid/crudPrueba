<?php
include('componets/crearordenes.php');
include('view/header.php');
?>

<script>
    function cambia_de_pagina(number){
        if(number == 1){
            location.href="admin.php"
        }
}
</script>

<div class="container-fluid">
    <div class="row registro">
        <div class="col-md-4"></div>
        <div class="col-md-4 tt">
            <h3 class="login-heading mb-4 text-primary"><b>Crear Orden de trabajo</b></h3>
            <form method="post" action="" name="signup-form">
                <div class="form-group">
                <div class="form-label-group">
                    <input type="text" id="UsuarioO" name="usuario" required class="form-control" placeholder ="Contraseña"/>
                    <label for="UsuarioO"><b>Usuario</b></label>
                </div>
                <label><b>Tipo de orden de trabajo</b></label>
                    <select class="form-select selectt" aria-label="Default select example" name="id_tipo_orden">
                        <option disabled>Seleccionar</option>
                        <option value="1">Petición</option>
                        <option value="2">Queja</option>
                        <option value="3">Reclamo</option>
                    </select>
                </div> <br />

                <label for="Tasunto"><b>Asunto de la orden</b></label>
                <div class="form-label-group">
                    <textarea type="text" name="asunto" id="Tasunto" required class="form-control" placeholder ="Asunto de la orden de trabajo" rows="4"></textarea>
                </div>
                <button type="submit" name="register" value="register" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2">Crear Orden</button> <br />

                <button type="submit" name="register" value="register" class="btn btn-lg btn-success btn-block btn-login text-uppercase font-weight-bold mb-2" onclick="javascript:cambia_de_pagina(1)">Administración</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<?php
include('view/footer.php');
?>