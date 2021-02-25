<?php

$conexion=mysqli_connect('localhost','root','','prueba');
?>
<h3 class="login-heading mb-4 text-primary text-center">Ordenes de trabajo</h3>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Usuario</th>
            <th scope="col">Tipo Orden</th>
            <th scope="col">Asunto</th>
            <th scope="col">Estado</th>
            <th scope="col">Fecha Creación</th>
            <th scope="col">Fecha Limite</th>
        </tr>
    </thead>
<?php
    $sql="SELECT * from ordenes";
    $result=mysqli_query($conexion,$sql);



    while($mostrar=mysqli_fetch_array($result)){
        $estado = 'Nuevo';
        if($mostrar['id_tipo_orden'] == 1){
            $tipoO = 'Petición';
        }else{
            if($mostrar['id_tipo_orden'] == 2){
            $tipoO = 'Queja';
            }else{
                if($mostrar['id_tipo_orden'] == 3){
                    $tipoO = 'Reclamo';
                }
            }
        }

?>
        <tbody>
            <tr>
                <td><?php echo $mostrar['usuario'] ?></td>
                <td><?php echo $tipoO ?></td>
                <td><?php echo $mostrar['asunto'] ?></td>
                <td><?php echo $estado ?></td>
                <td class="text-center"><?php echo $mostrar['fecha_creacion'] ?></td>
                <td class="text-center"><?php echo $mostrar['fecha_limite'] ?></td>
            </tr>
        </tbody>
	<?php
	}
	?>
</table>