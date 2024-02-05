
	<?php

include 'dashboard-barra-superior.php';
    include 'dashboard-barra-lateral.php';
    include '../php/cnx.php';

	?>

	
	
	<table>
		<tr>
		<th>DNI</th>
		<th>Nombre</th>
		<th>Apellido</th>			
		<th>E-mail</th>
		<th>Teléfono</th>
		<th>Asunto</th>
		<th>Detalle</th>
		

		<th colspan="2">Acciones </th>
		</tr>
<?php

foreach (listarCliente($cnx) as $key => $value) {
	?>
	<tr>
		<td><?=$value[0]?></td>
		<td><?=$value[1]?></td>
		<td><?=$value[2]?></td>
		<td><?=$value[3]?></td>
			<td><?=$value[4]?></td>
			<td><?=$value[5]?></td>
			<td><?=$value[6]?></td>
			<td>
				<ion-icon name="trash-outline"></ion-icon>
				<a href="procesoContactanos.php?btn-enviar=eliminar&dni=<?=$value[0]?>">Eliminar</a>
			</td>
			<td>
				<ion-icon name="person-outline"></ion-icon>
				<a href="editarCliente.php?dni=<?=$value[0]?>">Modificar</a></td>
			
	</tr>

	<?php
}

?>

	</table>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>