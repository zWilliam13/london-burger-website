

<?php 
	

include 'dashboard-barra-superior.php';
    include 'dashboard-barra-lateral.php';
    include '../php/cnx.php';


		$dni = $_REQUEST['dni'];
		$dato= buscarCliente($dni,$cnx);
?>


<main>


		<section id="banner02">
            <div class="banner-img02">
               <!--<img src="../img/banner-contactanos.jpg">
 -->             </div>
            <div class="contenedor">
                <h1>CONTACTANOS</h1>
            </div>
		</section>
		<section class="content">
			<div class="cuerpo-contact">
				<div class="formulario-contact">
					<p class="requeridos" style="color: red;"> <span>(*</span> campos requeridos)</p><br>
					<h4 class="Escribenos">Escríbenos, estamos aquí para ayudarte:</h4><br>
					<form method="POST" action="procesoContactanos.php" >
						<p>
							<label><i class="fa-sharp fa-solid fa-user"></i> Nombres: <span style="color: red;">*</span></label>
							<input type="text" name="nombre" required value="<?=$dato[0]?>">
						</p>
						<p>
							<label><i class="fa-sharp fa-solid fa-user"></i> Apellidos: <span style="color: red;">*</span></label>
							<input type="text" name="apellido" required  value="<?=$dato[1]?>">
						</p>
						<p>
							<label><i class="fa-regular fa-address-card"></i> DNI: <span style="color: red;">*</span></label>
							<input type="hidden" name="dni" maxlength="8" required value="<?=$dni?>">
						</p>
						<p>
							<label><i class="fa-solid fa-at"></i> Email: <span style="color: red;">*</span></label>
							<input type="email" name="email" required  value="<?=$dato[2]?>">
						</p>	
						<p>
							<label><i class="fa-sharp fa-solid fa-phone"></i> Teléfono:</label>
							<input type="tel" name="telefono" maxlength="9" required  value="<?=$dato[3]?>">
						</p>
						<p>
							<label for="Asunto"><i class="fa-solid fa-paperclip"></i> Asunto: <span style="color: red;">*</span></label>
							<select id="Asunto" name="asunto" required value="<?=$dato[4]?>">
								<option value="sin asunto">Seleccione Asunto</option>
								<option value="Reclamo"> Reclamo</option>
								<option value="Sugerencia">Sugerencia</option>
								<option value="Ventas Corporativas">Ventas Corporativas</option>
							</select>
						</p>
						<p class="block">
							<label><i class="fa-regular fa-envelope"></i> Mensaje: <span style="color: red;">*</span></label>

							<textarea name="txtmensaje" rows="10" required value="<?=$dato[5]?>"></textarea>
						</p>
						<p>
							<label><i class="fa-solid fa-circle-exclamation"></i> Al completar el formulario estaría aceptando:</label><br><br>
							<label><i class="fa-regular fa-square-check"></i> Los Términos y Condiciones de London Burguer.</label><br>
							<label><i class="fa-regular fa-square-check"></i> Las Políticas de Privacidad de Londoon Burguer.</label><br>
							<label><i class="fa-regular fa-square-check"></i> El uso de sus datos personales para fines publicitarios.</label><br>
						</p>
						<p class="block">
							<input id="btn-boton" type="submit" name="btn-enviar" value="Modificar">
						</p>
							

							
				</div>
			</div>
		</section>

		
	</main>


</html>


	
	