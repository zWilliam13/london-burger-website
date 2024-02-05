<?php 
session_start();
$namepagina = "carrito_popup";
include '../php/header.php';
include '../php/cnx.php';

// Función para mostrar el contenido del carrito
function mostrarCarrito() {
    echo '<ul id="lista-carrito">';
    if (isset($_SESSION['carrito'])) {
        foreach ($_SESSION['carrito'] as $index => $item) {
            echo '<li>' . $item['nombre'] . ' - $' . $item['precio'] . '</li>';
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

    <!-- Mostrar el contenido del carrito en otra ventana -->
    <section id="carrito">
        <div class="contenedor">
            <h2>Carrito de compras:</h2>
            <?php mostrarCarrito(); ?>

            <?php if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) { ?>
                <form method="post">
                    <input type="submit" name="vaciar" value="Vaciar Carrito">
                </form>
            <?php } ?>
        </div>
    </section>
</main>

<?php 
// Procesar el formulario para vaciar el carrito
if (isset($_POST['vaciar'])) {
    vaciarCarrito();
    header("Location: carrito_popup.php"); // Redirigimos para actualizar el contenido del carrito en la nueva ventana
}
?>

<?php include '../php/footer.php' ?>
