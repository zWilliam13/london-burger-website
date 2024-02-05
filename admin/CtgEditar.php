<?php 
    include 'dashboard-barra-superior.php';
    include 'dashboard-barra-lateral.php';
    include '../php/cnx.php';
    $id = $_GET['id']; 
?>
        <div class="cuerpo-contenedor">
            <div class="cuerpo-contenedor-form">
                <h1>Editar Categoria</h1>

                <?php 
                    $sql = "SELECT * FROM categoria where id_categoria = '$id'";
                    $resultado = mysqli_query($cnx,$sql);
                    while($row = mysqli_fetch_array($resultado))
                {?>

                <form method="POST" action="UpdateCtg.php?id=<?php echo $row['id_categoria']?>">
                    <div>
                        <label>Codigo</label>
                        <input type="text" name="codigo" value="<?php echo $row['id_categoria'] ?>" readonly >
                    </div>
                    <div>
                        <label>Categoria</label>
                         <input type="text" name="categoria" value="<?php echo $row['nom_categoria'] ?>">
                    </div>
                    <div>
                        <label>Estado</label>
                        <select name="estado">
                            <option value=<?php echo $row['estado'] ?>><?php echo $row['estado'] ?></option>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>
                    <input type="submit" name="guardar-categoria" id="btn" value="Guardar">
                </from>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>