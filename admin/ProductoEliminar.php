<?php 
    include("../php/cnx.php");
    $id= $_REQUEST['id'];
    $sql = "DELETE FROM producto WHERE id ='$id'";
    $resultado = mysqli_query($cnx,$sql);
    header("location: producto.php");
?>
