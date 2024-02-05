<?php 
    include 'dashboard-barra-superior.php';
    include 'dashboard-barra-lateral.php';
    include '../php/cnx.php';
    if (isset($_POST['guardar-categoria'])){
        $codigo= $_POST['codigo'];
        $descripcion = $_POST['descripcion'];
        $estado = $_POST['estado'];
        $query = "INSERT INTO categoria_prod (id_categoria,nom_categoria,estado) VALUES ('$codigo','$descripcion','$estado')";
        $resultado = mysqli_query($cnx, $query);
    } 

?>
        <div class="cuerpo-contenedor">
            <div class="cuerpo-contenedor-form">
                <h1>Reporte de subcriciones Libro Reclamos</h1>
            </div>
            <div class="cuerpo-contenedor-reporte">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>RUC</th>
                        <th>Nombre</th>
                        <th>Domicilio</th>
                        <th>DNI</th>
                        <th>Telefono</th>
                        <th>Bien Contratado</th>
                        <th>Detalle de Bien Detallado</th>
                        <th>Tipo de Reclamo</th>
                        <th>Detalle de Reclamo</th>
                        <th>Sugerencia del Cliente</th>

                    </tr>
                    <?php 
                            $sql = "SELECT * FROM libro_reclamacion";
                            $resultado = mysqli_query($cnx,$sql);
                            while($row = mysqli_fetch_array($resultado)){
                        ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['fecha'];?></td>
                        <td><?php echo $row['ruc'];?></td>
                        <td><?php echo $row['nombre_cli'];?></td>
                        <td><?php echo $row['domicilio'];?></td>
                        <td><?php echo $row['dni'];?></td>
                        <td><?php echo $row['telefono'];?></td>
                        <td><?php echo $row['bienContratado'];?></td>
                        <td><?php echo $row['bienContratadoDetalle'];?></td>
                        <td><?php echo $row['reclamacion'];?></td>
                        <td><?php echo $row['detalleReclamacion'];?></td>
                        <td><?php echo $row['sugerencia'];?></td>
                    </tr>
                     <?php } ?>
                </table>

            </div>
        </div>
    </div>
</body>
</html>