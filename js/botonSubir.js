
        // Función para desplazarse hacia arriba suavemente
        function subirArriba() {
            // Obtenemos la posición actual de desplazamiento vertical
            var currentPosition = document.documentElement.scrollTop || document.body.scrollTop;

            // Si la posición actual no es 0, se desplaza hacia arriba suavemente
            if (currentPosition > 0) {
                window.requestAnimationFrame(subirArriba);
                window.scrollTo(0, currentPosition - currentPosition / 8);
            }
        }

        // Mostrar el botón de "Subir arriba" cuando se desplaza hacia abajo la página
        window.onscroll = function() {
            mostrarBotonSubir();
        };

        function mostrarBotonSubir() {
            var btnSubir = document.getElementById("btnSubir");

            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                btnSubir.style.display = "block";
            } else {
                btnSubir.style.display = "none";
            }
        }