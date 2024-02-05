<?php 

	include '../php/cnx.php';
    if (isset($_POST['btn-enviar-lr'])){
        $fecha = $_POST['fecha'];
        $ruc =$_POST['razonSoscial'];
        $nombre = $_POST['nombre'];
        $domicilio = $_POST['domicilio'];
        $dni = $_POST['dniCe'];
        $telefono = $_POST['telefono'];
        $bienContratado = $_POST['servicio'];
        $detalleBien = $_POST['productoMensaje'];
        $reclamo = $_POST['incidente'];
        $detalleReclamo = $_POST['detalleReclamoQueja'];
        $recomendacion = $_POST['ActMensajeProveedor'];
        $query = "INSERT INTO libro_reclamacion (fecha, ruc, nombre_cli, domicilio, dni, telefono, bienContratado, bienContratadoDetalle, reclamacion, detalleReclamacion, sugerencia) VALUES ('$fecha', '$ruc', '$nombre', '$domicilio', '$dni', '$telefono', '$bienContratado', '$detalleBien', '$reclamo', '$detalleReclamo', '$recomendacion')";
        $resultado = mysqli_query($cnx, $query);
        header("location: ../index.php");
    } 
?>


<!DOCTYPE html>
<html>

<head>
	<title>Libro de Reclamaciones - London Burger &amp; cheers</title>
	<link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">

	<link rel="stylesheet" href="../css/libre-reclamacion.css">
	<script src="https://kit.fontawesome.com/1c508078cd.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="todo">
		<header>
			<div class="arr">
				<nav>
					<a href="../index.php"><img src="../img/logo.png"></a>
				</nav>

				<h2 id="titulo">Libro de Reclamaciones</h2>
			</div>
		</header>

		<div class="reclamaciones">

			<form method="POST" action="libro-reclamacion.php">
				<fieldset>
					<legend style="color: black">Formato: Libro de Reclamaciones</legend>
					<div class="tot">
						<table class="recla" id="comienzo">
							<thead>
								<tr>
									<th class="nopointer" colspan="4">Libro de Reclamaciones</th>

									<th class="nopointer" rowspan="2">Hoja de Reclamacion [N°000000001-2023]</th>
								</tr>

								<tr>
									<th>
										<label>Fecha:</label>
									</th>
									<th>
										<label>Fecha</label>
										<input type="date" name="fecha" required>
									</th>
								</tr>
								<br>
								<tr>
									<th colspan="5">
										<label> </label>
										<input type="text" name="razonSoscial" placeholder="
										[Nombre de la Persona Natural o Razón Social de la Persona
										Jurídica][Domicilio del Establecimiento donde se coloca el 
										libro de reclamaciones]" size="170" required>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="nopointer" colspan="5">1.Identificación del consumidor reclamante</th>
								</tr>
								<tr>
									<th colspan="5">
										<label>Nombre:</label>
										<input type="text" name="nombre" required>
									</th>
								</tr>

								<tr>
									<th colspan="5">
										<label>Domicilio:</label>
										<input type="text" name="domicilio" required>
									</th>
								</tr>

								<tr>
									<th colspan="3">
										<label>DNI/CE:</label>
										<input type="text" name="dniCe" required>
									</th>
									<th colspan="2">
										<label>TELEFONO</label>
										<input type="text" name="telefono" required>
									</th>
								</tr>
								<tr>
									<th class="nopointer" colspan="5">2. Identificación del bien contratado</th>

								</tr>
								<tr>
									<th>
										<label>Producto</label>
										<input type="radio" value="producto" name="servicio" required>
									</th>
									<th rowspan="2" colspan="4">
										<textarea cols="145" rows="8" placeholder="Detalle:" name="productoMensaje" required></textarea>
									</th>

								</tr>

								<tr>
									<th>
										<label>Servicio</label>
										<input type="radio" value="servicio" name="servicio" required>
									</th>
								</tr>

								<tr>
									<th class="nopointer" colspan="3">3.Detalle de la reclamación</th>
									<th>
										<label>Reclamo</label>
										<input type="radio" value="reclamo" name="incidente" required>
									</th>

									<th>

										<label>Queja</label>
										<input type="radio" value="Queja" name="incidente" required>
									</th>
								</tr>


								<tr>
									<th colspan="5">

										<textarea cols="160" rows="8" placeholder="Detalle:" name="detalleReclamoQueja" required></textarea >
									</th>
								</tr>

								<tr>
									<th class="nopointer" colspan="5">
										4.Acciones Adoptadas por el proveedor
									</th>
								</tr>

								<tr>

									<th colspan="5">
										<textarea cols="160" rows="8" placeholder="Detalle:" name="ActMensajeProveedor" required></textarea>

									</th>
								</tr>

								<tr>
									<th class="nopointer" colspan="2">
										Reclamo: Disconformidad relacionada con los productos o <br>servicio
									</th>

									<th class="nopointer" class="nopointer" colspan="3">
										Queja: Disconformidad no relacionada con los productos o <br>servicio, malestar
										o
										descontento respecto a la atención al <br>público </th>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2">
										<input type="submit" name="btn-enviar-lr">
									</th>

									<th colspan="3">

										<button type="reset">
											<i class="fa-sharp fa-solid fa-trash"></i>
										</button><br>
									</th>
								</tr>

							</tfoot>

						</table>
					</div>
				</fieldset>
			</form>
		</div>
		</section>
	</div>

		<footer>
			<div class="comienzo">
				<a href="#titulo">Ir al comienzo</a>
			</div>
		</footer>
	  <button onclick="subirArriba()" id="btnSubir" title="Ir arriba">↑</button>
<script src="js/botonSubir.js"></script>
</body>



</html>