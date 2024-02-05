<?php 
    include("../php/cnx.php");
    $id= $_REQUEST['id'];
    $sql = "DELETE FROM usuario WHERE id ='$id'";
    $resultado = mysqli_query($cnx,$sql);
    header("location: usuario.php");
?>
