<?php 
    include("../php/cnx.php");
    $id= $_REQUEST['id'];
    $sql = "DELETE FROM categoria WHERE id_categoria ='$id'";
    $resultado = mysqli_query($cnx,$sql);
    header("location: categoria.php");
?>
