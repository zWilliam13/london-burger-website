<?php 
    include 'cnx.php';
    if (isset($_POST['guardar-categoria'])){
        $codigo= $_POST['codigo'];
        $descripcion = $_POST['descripcion'];
        $estado = $_POST['estado'];
        $query = "INSERT INTO categoria_prod (id_categoria,nom_categoria,estado) VALUES ('$codigo','$descripcion','$estado')";
        $resultado = mysqli_query($cnx, $query);
        echo "guardado exito";
        } else {
        header('Location: ../administracion/categoria.php');
    }
?>