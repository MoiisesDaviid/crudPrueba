<?php
session_start();

    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] != 2){
            header('location: login.php');
        }
    }

    include('view/header.php');
?>

<div class="container">
    <div class="row po">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <?php
                include('componets/userview.php');
            ?>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

<?php
include('view/footer.php');
?>
