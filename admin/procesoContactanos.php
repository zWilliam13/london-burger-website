<?php
	include '../php/cnx.php';


	$valor =$_REQUEST['btn-enviar'];

	if($valor==='Agregar'){
	$dni = $_REQUEST['dni'];
	$nom = $_REQUEST['nombre'];
	$ape = $_REQUEST['apellido'];
	$email = $_REQUEST['email'];
	$telef = $_REQUEST['telefono'];
	$asunto= $_REQUEST['asunto'];
	$detalle=$_REQUEST['txtmensaje'];

	agregarCliente($dni,$nom,$ape,$email,$telef,$asunto,$detalle,$cnx);
	}

	if ($valor==='eliminar') {

		$dni=$_REQUEST['dni'];
		eliminarCliente($dni,$cnx);
	}

	if($valor==='Modificar'){
	$dni = $_REQUEST['dni'];
	$nom = $_REQUEST['nombre'];
	$ape = $_REQUEST['apellido'];
	$email = $_REQUEST['email'];
	$telef = $_REQUEST['telefono'];	
	$asunto= $_REQUEST['asunto'];
	$detalle=$_REQUEST['txtmensaje'];
		modificarCliente($dni,$nom,$ape,$email,$telef,$asunto,$detalle,$cnx);

	}
	header('location:listar/listarCliente.php');
?>