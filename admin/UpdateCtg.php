<?php 
    include("../php/cnx.php");
    $id= $_REQUEST['id'];
    $categoria = $_POST['categoria'];
    $estado = $_POST['estado'];
    $sql = "UPDATE categoria SET nom_categoria = '$categoria' , estado = '$estado' WHERE id_categoria = '$id'";
    $resultado = mysqli_query($cnx,$sql);
    header("location: categoria.php");

?>


