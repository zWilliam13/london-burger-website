<?php 
session_start();
$namepagina = "carta";
include '../php/header.php';
include '../php/cnx.php';

// Función para agregar un producto al carrito
function agregarAlCarrito($nombre, $precio) {
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
        $_SESSION['total'] = 0;
    }

    $_SESSION['carrito'][] = array('nombre' => $nombre, 'precio' => $precio);
    $_SESSION['total'] += $precio;
}

// Función para mostrar el contenido del carrito
function mostrarCarrito() {
    echo '<ul id="lista-carrito">';
    if (isset($_SESSION['carrito'])) {
        foreach ($_SESSION['carrito'] as $index => $item) {
            echo '<li>' . $item['nombre'] . ' - $' . $item['precio'] . ' <form method="post" style="display:inline;">';
            echo '<input type="hidden" name="eliminar" value="' . $index . '">';
            echo '<input type="submit" value="Eliminar"></form></li>';
        }
    }
    echo '</ul>';

    echo '<p>Total: <span id="total">$' . (isset($_SESSION['total']) ? $_SESSION['total'] : 0) . '</span></p>';
}

// Función para vaciar el carrito
function vaciarCarrito() {
    unset($_SESSION['carrito']);
    unset($_SESSION['total']);
}

$id = 0;

if (isset($_POST['filtrar'])) {
    $id = $_POST['filtrar'];
    $sqlProducto = "SELECT * FROM producto WHERE id_categoria = '$id'";
} elseif (isset($_POST['precio'])) {
    $precio = $_POST['precio'];
    $sqlProducto = "SELECT * FROM producto ORDER BY precio $precio";
} else {
    $sqlProducto = "SELECT * FROM producto";
}

?>

<main>
    <section id="banner02">
      <div class="banner-img02">
        <img src="../img/carta.jpg" />
      </div>
      <div class="contenedor">
        <h1>NUESTRAS PROMOCIONES</h1>
      </div>
    </section>
    <section id="carta">
        <div class="contenedor">
<a href="carrito_popup.php" target="_blank">Ver Carrito</a>
            <div id="filtro">
                <div class="filtrar-titulo">
                    <h3>Filtrar por:</h3>
                </div>
                <div class="filtrar-categoria">
                    <h3>Por categoria</h3>
                    <form method="POST" action="carta.php">
                        <select name="filtrar" onchange="this.form.submit()">
                            
                            <?php 
                            $sqlCategoria = "SELECT * FROM categoria";
                            $resultado = mysqli_query($cnx,$sqlCategoria);
                            while($row = mysqli_fetch_array($resultado)){
                                
                            ?>
                            <option value="<?php echo $row['id_categoria'];?>"><td><?php echo $row['nom_categoria'];?></td></option>
                            <?php } ?>
                        </select>
                    </form>
                </div>
                <div class="filtrar-categoria">
                    <h3>Por precio (S/.)</h3>
                    <form method="POST" action="carta.php">
                        <input type="radio" name="precio" value="DESC" onchange="this.form.submit()" id="ASC" class="radio" active>
                        <label for="ASC">Mayor a Menor</label><br>
                        <input type="radio" name="precio" value="ASC" onchange="this.form.submit()" id="DESC" class="radio">
                        <label for="DESC">Menor a Mayor</label><br>
                    </form>
                </div>
            </div>
            <div class="card">
                <?php
                
                    $sqlProducto = "SELECT * FROM producto WHERE id_categoria = '$id'";
                    $resultado = mysqli_query($cnx,$sqlProducto);
                    while($row = mysqli_fetch_array($resultado)){
                ?>
                <div class="card-iten">
                    <div class="img">
                        <img src="<?php echo $row['img'];?>" alt="iten">
                    </div>
                <div>
                    <h3><?php echo $row['producto'];?>l</h3>
                    <h5><?php echo $row['descripcion'];?></h5>
                    <h4><?php echo "S/. " . $row['precio'];?></h4>
                     <form method="post">
                    <input type="hidden" name="nombre" value="<?php echo $row['producto']; ?>">
                    <input type="hidden" name="precio" value="<?php echo $row['precio']; ?>">
                    <input type="submit" name="agregar" value="Agregar al Carrito">
                </div>
                </div>
                <?php } ?> 
            </div>
        </div>
    </section>

    <!-- Mostrar el contenido del carrito -->
    

 <?php 

// Procesar el formulario para agregar al carrito
if (isset($_POST['agregar'])) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    agregarAlCarrito($nombre, $precio);

    header("Location: carta.php");
}

// Procesar el formulario para vaciar el carrito
if (isset($_POST['vaciar'])) {
    vaciarCarrito();
    header("Location: carta.php");
}

 include '../php/footer.php' ?>
