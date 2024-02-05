<?php 
    include 'dashboard-barra-superior.php';
    include 'dashboard-barra-lateral.php';
    include '../php/cnx.php';
    if (isset($_POST['guardar-categoria'])){
        $categoria= $_POST['categoria'];
        $estado = $_POST['estado'];
        $AgregarCategoria = "INSERT INTO categoria(nom_categoria,estado) VALUES ('$categoria','$estado')";
        $resultado = mysqli_query($cnx, $AgregarCategoria);
    } 
?>
        <div class="cuerpo-contenedor">
            <div class="cuerpo-contenedor-form">
                <h1>CATEGORIA</h1>
                <form method="POST" action="categoria.php">
                    <div>
                        <label>Categoria</label>
                        <input type="text" name="categoria" required>
                    </div>
                    <div>
                        <label>Estado</label>
                        <select name="estado" required>
                            <option value="">Sin seleccionar</option>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>
                    <input type="submit" name="guardar-categoria" id="btn" value="Guardar">
                </form>
                
            </div>
            <div class="cuerpo-contenedor-reporte">
                <table>
                    <tr>
                        <th>Nro</th>
                        <th>Categoria</th>
                        <th>Estado</th>
                        <th>Accion</th>
                    </tr>
                    <?php 
                        $n = 0;
                        $sql = "SELECT * FROM categoria";
                        $resultado = mysqli_query($cnx,$sql);
                        while($row = mysqli_fetch_array($resultado)){
                        $n = $n + 1;
                    ?>
                    <tr>
                        <td><?php echo $n;?></td>
                        <td><?php echo $row['nom_categoria'];?></td>
                        <td><?php echo $row['estado'];?></td>
                        <td>
                            <a href="CtgEditar.php?id=<?php echo $row['id_categoria']?>">Modificar</a>
                            <a href="CtgEliminar.php?id=<?php echo $row['id_categoria']?>">Eliminar</a>
                        </td>
                    </tr>
                     <?php } ?>
                </table>

            </div>
        </div>
    </div>
</body>
</html>