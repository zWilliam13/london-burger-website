<?php 
    include 'dashboard-barra-superior.php';
    include 'dashboard-barra-lateral.php';
    include '../php/cnx.php';
    if (isset($_POST['guardar-categoria'])){
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
    } 
?>
        <div class="cuerpo-contenedor">
            <div class="cuerpo-contenedor-form">
                <h1>Nuevo producto</h1>
                <form method="POST" action="producto.php" enctype="multipart/form-data">
                    <div>
                        <label>Producto</label>
                        <input type="text" name="producto" >
                    </div>
                     <div>
                        <label>Categorio</label>
                        <select name="categoria">
                            <option value="">Sin seleccionare</option>
                            <?php 
                            $sql = "SELECT * FROM categoria";
                            $resultado = mysqli_query($cnx,$sql);
                            while($row = mysqli_fetch_array($resultado)){
                            ?>
                           <option value=<?php echo $row['id_categoria'];?>><?php echo $row['nom_categoria'];?></option><?php } ?>
                        </select>
                    </div>
                    <div>
                        <label>Descripcion</label>
                        <input type="text" name="descripcion">
                    </div>
                    <div>
                        <label>Precio (S/.)</label>
                        <input type="text" name="precio" >
                    </div>
                    <div>
                        <label>Estado</label>
                        <select name="estado" >
                            <option value="">Sin seleccionar</option>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>
                    <div>
                        <label>Adjuntar Imagen</label>
                        <input type="file" name="imagen" required>
                    </div>
                    <input type="submit" name="guardar-categoria" id="btn" value="Guardar">
                </form>
                
            </div>
            <div class="cuerpo-contenedor-reporte">
                <table>
                    <tr>
                        <th>Nro</th>
                        <th>Producto</th>
                        <th>Categoria</th>
                        <th>Descripcion</th>
                        <th>Precio (S/.)</th>
                        <th>Imagen</th>
                        <th>Estado</th>
                        <th>Accion</th>
                    </tr>
                    <?php 
                        $n = 0;
                        $sql = "SELECT * FROM producto INNER JOIN categoria ON producto.id_categoria = categoria.id_categoria";
                        $resultado = mysqli_query($cnx,$sql);
                        while($row = mysqli_fetch_array($resultado)){
                        $n = $n + 1;
                    ?>
                    <tr>
                        <td><?php echo $n;?></td>
                        <td><?php echo $row['producto'];?></td>
                        <td><?php echo $row['nom_categoria'];?></td>
                        <td><?php echo $row['descripcion'];?></td>
                        <td><?php echo "S/. " . $row['precio'];?></td>
                        <td><a href="<?php echo $row['img'];?>" target="_blank"><img width="100px" src="<?php echo $row['img'];?>"></a></td>
                        <td><?php echo $row['estado'];?></td>
                        <td>
                            <a href="editarProducto.php?id=<?php echo $row['id']?>">Modificar</a>
                            <a href="ProductoEliminar.php?id=<?php echo $row['id']?>">Eliminar</a>
                        </td>
                    </tr>
                     <?php } ?>
                </table>

            </div>
        </div>
    </div>
</body>
</html>