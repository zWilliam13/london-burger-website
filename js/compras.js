document.addEventListener('DOMContentLoaded', function() {
  var contadorCarrito = document.getElementById('contador-carrito');
  var botonesAgregarCarrito = document.querySelectorAll('.action .btn');

  var cantidadProductos = 0;

  botonesAgregarCarrito.forEach(function(boton) {
    boton.addEventListener('click', function() {
      cantidadProductos++;
      contadorCarrito.innerText = cantidadProductos;
    });
  });
});
