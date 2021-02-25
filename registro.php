<?php
include('componets/registration.php');
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
            <h3 class="login-heading mb-4 text-primary"><b>Registrar Usuario</b></h3>
            <form method="post" action="" name="signup-form">
                <div class="form-label-group">
                    <input type="text" name="username" id="inputUser" required class="form-control" placeholder ="Nombre de usuario" />
                    <label for="inputUser"><b>Nombre de Usuario</b></label>
                </div>
                <div class="form-label-group">
                    <input type="password" id="inputPass" name="password" required class="form-control" placeholder ="Contraseña"/>
                    <label for="inputPass"><b>Contraseña</b></label>
                </div>
                <div class="form-group">
                    <label><b>Tipo Usuario</b></label>
                    <select class="form-select selectt" aria-label="Default select example" name="rol_id">
                        <option disabled>Seleccionar</option>
                        <option value="1">Administrador</option>
                        <option value="2">Usuario</option>
                    </select>
                </div>
                
                <br />
                <button type="submit" name="register" value="register" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2">Registrar</button> <br />

                <button type="submit" name="register" value="register" class="btn btn-lg btn-success btn-block btn-login text-uppercase font-weight-bold mb-2" onclick="javascript:cambia_de_pagina(1)">Administración</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<?php
include('view/footer.php');
?>