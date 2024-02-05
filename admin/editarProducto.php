<?php 
    include 'dashboard-barra-superior.php';
    include 'dashboard-barra-lateral.php';
    include '../php/cnx.php';
    $id = $_GET['id']; 
    if (isset($_POST['guardar-categoria'])){
        $condWhere = '';
        $producto= $_POST['producto'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $nombre_archivo = $_FILES['imagen']['name'];
        if(isset($_FILES['imagen']['name']) && !empty($_FILES['imagen']['name'])){
            $nombre_archivo = $_FILES['imagen']['name'];
                $archivo = $_FILES['imagen']['tmp_name'];
                $ruta_archivo = "../img/" . $nombre_archivo;
                copy($archivo, $ruta_archivo);

                $condWhere = ", img = '$ruta_archivo'";
        }

        $estado = $_POST['estado'];
        $sql = "UPDATE producto SET producto = '$producto', descripcion = '$descripcion', precio = '$precio' $condWhere, estado = '$estado' WHERE id = '$id'";

        $resultado = mysqli_query($cnx, $sql);
        header("location: producto.php");
    } 
?>
        <div class="cuerpo-contenedor">
            <div class="cuerpo-contenedor-form">
                <h1>Editar Producto</h1>
                <?php 
                    $sql = "SELECT * FROM producto where id = '$id'";
                    $resultado = mysqli_query($cnx,$sql);
                    while($row = mysqli_fetch_array($resultado))
                {?>

                <form method="POST" action="editarProducto.php?id=<?php echo $row['id']?>" enctype="multipart/form-data">
                    <div>
                        <label>Producto</label>
                        <input type="text" name="producto" value="<?php echo $row['producto']?>" required >
                    </div>
                    <div>
                        <label>Descripcion</label>
                        <input type="text" name="descripcion" value="<?php echo $row['descripcion']?>" required>
                    </div>
                    <div>
                        <label>Precio (S/.)</label>
                        <input type="text" name="precio" value="<?php echo $row['precio']?>" required >
                    </div>
                    <div>
                        <label>Estado</label>
                        <select name="estado" required>
                            <option value="<?php echo $row['estado']?>"><?php echo $row['estado']?></option>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>
                    <div>
                        <label>Adjuntar Imagen</label>
                        <input type="file" name="imagen" value="<?php echo $row['img']?>">
                    </div>
                    <input type="submit" name="guardar-categoria" id="btn" value="Guardar">
                    <br>
                    <img width="50%" src="<?php echo $row['img']?>">
                </form>
                 <?php } ?>
            </div>
            </div>
        </div>
    </div>
</body>
</html>