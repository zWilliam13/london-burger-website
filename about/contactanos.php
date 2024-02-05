<?php 
	$namepagina = "contactanos";
	include '../php/header.php';

?>

	
	<main>
		<section id="banner02">
            <div class="banner-img02">
                <img src="../img/banner-contactanos.jpg">
            </div>
            <div class="contenedor">
                <h1>CONTACTANOS</h1>
            </div>
		</section>
		<section class="content">
			<div class="cuerpo-contact">
				<div class="formulario-contact">
					<p class="requeridos" style="color: red;"> <span>(*</span> campos requeridos)</p><br>
					<h4 class="Escribenos">Escríbenos, estamos aquí para ayudarte:</h4><br>
					<form method="POST" action="../admin/procesoContactanos.php" >
						<p>
							<label><i class="fa-sharp fa-solid fa-user"></i> Nombres: <span style="color: red;">*</span></label>
							<input type="text" name="nombre" required>
						</p>
						<p>
							<label><i class="fa-sharp fa-solid fa-user"></i> Apellidos: <span style="color: red;">*</span></label>
							<input type="text" name="apellido" required>
						</p>
						<p>
							<label><i class="fa-regular fa-address-card"></i> DNI: <span style="color: red;">*</span></label>
							<input type="text" name="dni" maxlength="8" required>
						</p>
						<p>
							<label><i class="fa-solid fa-at"></i> Email: <span style="color: red;">*</span></label>
							<input type="email" name="email" required >
						</p>	
						<p>
							<label><i class="fa-sharp fa-solid fa-phone"></i> Teléfono:</label>
							<input type="tel" name="telefono" maxlength="9" required>
						</p>
						<p>
							<label for="Asunto"><i class="fa-solid fa-paperclip"></i> Asunto: <span style="color: red;">*</span></label>
							<select id="Asunto" name="asunto" required>
								<option value="sin asunto">Seleccione Asunto</option>
								<option value="Reclamo"> Reclamo</option>
								<option value="Sugerencia">Sugerencia</option>
								<option value="Ventas Corporativas">Ventas Corporativas</option>
							</select>
						</p>
						<p class="block">
							<label><i class="fa-regular fa-envelope"></i> Mensaje: <span style="color: red;">*</span></label>

							<textarea name="txtmensaje" rows="10" required></textarea>
						</p>
						<p>
							<label><i class="fa-solid fa-circle-exclamation"></i> Al completar el formulario estaría aceptando:</label><br><br>
							<label><i class="fa-regular fa-square-check"></i> Los Términos y Condiciones de London Burguer.</label><br>
							<label><i class="fa-regular fa-square-check"></i> Las Políticas de Privacidad de Londoon Burguer.</label><br>
							<label><i class="fa-regular fa-square-check"></i> El uso de sus datos personales para fines publicitarios.</label><br>
						</p>
						<p class="block">
							<input id="btn-boton" type="submit" name="btn-enviar" value="Agregar">
						</p>
							

							
					</form>	
	
				</div>
				<div class="informacion-contact">
                    <div class="contenedor">
						<h2>Comunicate con nosotros</h2>
						<ul>
							<li><i class="fa-brands fa-whatsapp"></i> : +51 948 086 952</li>
							<li><i class="fa-solid fa-envelope"></i> : london@burguer.com</li>
							<li><i class="fa-solid fa-phone"></i> : (01)-365412</li>
						</ul>
                    </div>
				</div>
			</div>
		</section>

		<section id="map">
		      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22067.087425538808!2d-77.04156605625441!3d-12.115793315502605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c99ebddeb425%3A0xdffd3ef43271ea15!2sLondon%20Burgers%20%26%20Cheers!5e0!3m2!1ses-419!2spe!4v1683215861821!5m2!1ses-419!2spe" width="100%" height="700px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		  </section>
	</main>
<?php include 'php/footer.php' ?>