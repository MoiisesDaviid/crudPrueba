<?php
include('./view/header.php');
include('./componets/logeo.php');
?>
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Bienvenido</h3>

              <form method="POST" action="#">
                <div class="form-label-group">
                  <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Nombre de Usuario" required autofocus>
                  <label for="inputEmail">Usuario</label>
                </div>

                <div class="form-label-group">
                  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                  <label for="inputPassword">Contraseña</label>
                </div>
                <input class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" value="Iniciar Sesión"/>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include('view/footer.php');
?>
