<?php
include('header.php');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 pp">
            <h3 class="text-info titulo">Inicio de sesión</h3><br />
            <form role="form">
                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                    <input class="form-control" id="usr" placeholder="Nombre Usuario" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <input class="form-control" id="psw" placeholder="Contraseña" type="password">
                </div>
                </div>
                <div class="text-center"> <br />
                    <button type="submit" class="btn btn-success" onclick="Send()">Entrar</button>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<?php
include('footer.php');
?>
