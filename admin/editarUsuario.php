<?php 
    include '../php/cnx.php';
    $id = $_GET['id']; 
?>

<?php 
    if (isset($_POST['guardar'])){
        $id = $_REQUEST['id'];
        $nombre= $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $rol = $_POST['rol'];
        $estado = $_POST['estado'];
        $sql = "UPDATE usuario SET nombre = '$nombre' , apellido = '$apellido' , telefono = '$telefono' , usuario = '$usuario' , password = '$password' , rol = '$rol' , estado = '$estado' WHERE id = '$id'";
        $resultado = mysqli_query($cnx,$sql);
        header("location: usuario.php");
    }
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/nuevoUsuario.css">
</head>
<body>
    <div id="backgraund">
        <div id="from">
            <div class="contenedor">
                <img src="../img/logo.png">
                <h1>Registro de Usuario</h1>
                 <?php 
                    $sql = "SELECT * FROM usuario where id = '$id'";
                    $resultado = mysqli_query($cnx,$sql);
                    while($row = mysqli_fetch_array($resultado))
                {?>
                <form method="POST" action="editarUsuario.php?id=<?php echo $row['id']?>">
                    <div class="conte">
                        <label>Nombre *</label>
                        <input type="text" name="nombre" value="<?php echo $row['nombre'] ?>" >
                    </div>
                    <div>
                        <label>Apellido *</label>
                        <input type="text" name="apellido" value="<?php echo $row['apellido'] ?>">
                    </div>
                    <div>
                        <label>Telefono *</label>
                        <input type="text" name="telefono" value="<?php echo $row['telefono'] ?>">
                    </div>
                    <div>
                        <label>Usuario *</label>
                        <input type="text" name="usuario" value="<?php echo $row['usuario'] ?>">
                    </div>
                    <div>
                        <label>Password *</label>
                        <input type="text" name="password" value="<?php echo $row['password'] ?>">
                    </div>
                     <div>
                        <label>Rol *</label>
                        <select name="rol">
                            <option value="<?php echo $row['rol'] ?>"><?php echo $row['rol'] ?></option>
                            <option value="Usuario">Usuario</option>
                            <option value="Administrador">Administrador</option>
                        </select>
                    </div>
                    <div>
                        <label>Estado *</label>
                        <select name="estado">
                            <option value="<?php echo $row['estado'] ?>"><?php echo $row['estado'] ?></option>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>
                    <div class="boton">
                        <input type="submit" name="guardar" class="btn" value="Guardar">
                        <a class="btn" id="cancelar" href="usuario.php" >Canecelar</a>
                        
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>
