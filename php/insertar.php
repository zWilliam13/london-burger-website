<?php 

    include 'php/cnx.php';
        $squery = "INSERT INTO libro_reclamacion (fecha, ruc, nombre_cli, domicilio, dni, telefono, bienContratado, bienContratadoDetalle, reclamacion, detalleReclamacion, sugerencia) VALUES ('2023-06-19', '1414', '141', '141', '141', '141', '141', '141', '141', '141', '141')";
        $resultado = mysqli_query($cnx, $query);
    
?>

 ?>