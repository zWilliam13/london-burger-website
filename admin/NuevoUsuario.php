<?php 
    include '../php/cnx.php';
    if (isset($_POST['guardar'])){
        $nombre= $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $rol = $_POST['rol'];
        $estado = $_POST['estado'];
        $sql = "INSERT INTO usuario(nombre, apellido, telefono, usuario, password, rol, estado) VALUES ('$nombre','$apellido','$telefono','$usuario','$password','$rol','$estado')";
        $resultado = mysqli_query($cnx, $sql);
        header ('location:usuario.php');

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
                <form method="POST" action="">
                    <div class="conte">
                        <label>Nombre *</label>
                        <input type="text" name="nombre" required>
                    </div>
                    <div>
                        <label>Apellido *</label>
                        <input type="text" name="apellido" required >
                    </div>
                    <div>
                        <label>Telefono *</label>
                        <input type="text" name="telefono" >
                    </div>
                    <div>
                        <label>Usuario *</label>
                        <input type="text" name="usuario" required>
                    </div>
                    <div>
                        <label>Password *</label>
                        <input type="Password" name="password" required >
                    </div>
                     <div>
                        <label>Rol *</label>
                        <select name="rol" required>
                            <option value="">Sin selecionar</option>
                            <option value="Usuario">Usuario</option>
                            <option value="Administrador">Administrador</option>
                        </select>
                    </div>
                    <div>
                        <label>Estado *</label>
                        <select name="estado" required>
                            <option value="">Sin selecionar</option>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>
                    <div class="boton">
                        <input type="submit" name="guardar" class="btn" value="Guardar">
                        <a class="btn" id="cancelar" href="usuario.php" >Canecelar</a>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
