<?php 

    include '../php/cnx.php';

    $producto= $_POST['producto'];
    $categoria = $_POST['categoria'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    //GUARDAR LA RUTA DE LA IMAGEN
    $nombre_archivo = $_FILES['imagen']['name'];
    $archivo = $_FILES['imagen']['tmp_name'];
    $ruta_archivo = "../img/" . $nombre_archivo;
    copy($archivo, $ruta_archivo);
    //$base_datos ="img/" . $nombre_archivo;
    //move_uploaded_file($archivo, $ruta_archivo);
    $estado = $_POST['estado'];
    
    $sql = "INSERT INTO producto(producto, id_categoria, descripcion, precio, img, estado) VALUES ('$producto','$categoria','$descripcion','$precio','$ruta_archivo','$estado')";
    $resultado = mysqli_query($cnx, $sql);

    ?>