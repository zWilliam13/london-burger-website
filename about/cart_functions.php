<?php
// Función para agregar un producto al carrito
function agregarAlCarrito($nombre, $precio,$imagen) {
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
        $_SESSION['total'] = 0;
    }

    $_SESSION['carrito'][] = array('nombre' => $nombre, 'precio' => $precio, 'img' => $imagen);
    $_SESSION['total'] += $precio;
}

// Función para mostrar el contenido del carrito
function mostrarCarrito() {
    echo '<ul id="lista-carrito">';
    if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
        foreach ($_SESSION['carrito'] as $item) {
            echo '<li>' . $item['nombre'] . ' - $' . $item['precio'] . '</li>';
        }
    } else {
        echo '<li>El carrito está vacío.</li>';
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
