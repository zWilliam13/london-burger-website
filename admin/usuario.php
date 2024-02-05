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
            <!--<div class="cuerpo-contenedor-form">
                <h1>Nuevo producto</h1>
                <form method="POST" action="producto.php" enctype="multipart/form-data">
                    <div>
                        <label>Nombre</label>
                        <input type="text" name="nombre" >
                    </div>
                    <div>
                        <label>Apellido</label>
                        <input type="text" name="apellido" >
                    </div>
                    <div>
                        <label>Telefono</label>
                        <input type="text" name="apellido" >
                    </div>
                    <div>
                        <label>Usuario</label>
                        <input type="text" name="apellido" >
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="Password" name="apellido" >
                    </div>
                     <div>
                        <label>Rol</label>
                        <select name="categoria">
                            <option value="">Sin seleccionare</option>
                            <option value="Usuario">Usuario</option>
                            <option value="Administrador">Administrador</option>
                        </select>
                    </div>
                    <div>
                        <label>Estado</label>
                        <select name="estado" >
                            <option value="">Sin seleccionar</option>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>
                    <input type="submit" name="guardar-categoria" id="btn" value="Guardar">
                </form>
            </div> -->
            <div class="menu">
                <a href="nuevoUsuario.php">Nuevo Usuario</a>
            </div>
            <div class="cuerpo-contenedor-reporte">
                <table>
                    <tr>
                        <th>Nro</th>
                        <th>Nombre y apellido</th>
                        <th>Telefono</th>
                        <th>Usuario</th>
                        <th>Password</th>
                        <th>Rol</th>
                        <th>Estado</th>
                        <th>Accion</th>
                    </tr>
                    <?php 
                        $n = 0;
                        $sql = "SELECT * FROM usuario";
                        $resultado = mysqli_query($cnx,$sql);
                        while($row = mysqli_fetch_array($resultado)){
                        $n = $n + 1;
                    ?>
                    <tr>
                        <td><?php echo $n;?></td>
                        <td><?php echo $row['nombre'] . " " . $row['apellido'] ;?></td>
                        <td><?php echo $row['telefono'];?></td>
                        <td><?php echo $row['usuario'];?></td>
                        <td><?php echo $row['password'];?></td>
                        <td><?php echo $row['rol'];?></td>
                        <td><?php echo $row['estado'];?></td>
                        <td>
                            <a href="editarUsuario.php?id=<?php echo $row['id']?>">Modificar</a>
                            <a href="eliminarUsuario.php?id=<?php echo $row['id']?>">Eliminar</a>
                        </td>
                    </tr>
                     <?php } ?>
                </table>

            </div>
        </div>
    </div>
</body>
</html>