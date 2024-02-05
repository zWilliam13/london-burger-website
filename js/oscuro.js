document.addEventListener("DOMContentLoaded", function () {
  var modoOscuroBoton = document.getElementById("modo-oscuro");
  var body = document.body;

  modoOscuroBoton.addEventListener("click", function () {
    body.classList.toggle("modo-oscuro");
  });
});
