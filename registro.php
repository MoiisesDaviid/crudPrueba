<?php
include('./conection/registration.php');
include('header.php');
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 pp">
            <h3 class="text-info titulo">Registrar Usuario</h3><br />
            <form method="post" action="" name="signup-form">
                <div class="form-group mb-3">
                    <label><b>Usuario</b></label>
                    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required class="form-control" placeholder ="Nombre de usuario" />
                </div>
                <div class="form-group">
                    <label><b>Correo</b></label>
                    <input type="email" name="email" required class="form-control" placeholder ="Correo Electronico"/>
                </div> <br />
                <div class="form-group">
                    <label><b>Contraseña</b></label>
                    <input type="password" name="password" required class="form-control" placeholder ="Contraseña"/>
                </div> <br />
                <div class="form-group">
                    <label><b>Tipo Usuario</b></label>
                    <select class="form-select" aria-label="Default select example" name="tipo">
                        <option disabled>Seleccionar</option>
                        <option value="1">Administrador</option>
                        <option value="2">Usuario</option>
                    </select>
                </div>
                
                <br />
                <button type="submit" name="register" value="register" class="btn btn-primary">Register</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<?php
include('footer.php');
?>