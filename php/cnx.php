<?php

$servidor = "127.0.0.1";
$usuario = "root";
$password = "";
$db = "db_london";
$cnx = mysqli_connect($servidor,$usuario,$password,$db);


function agregarCliente($dni,$nom,$ape,$email,$telef,$asunto,$detalle,$cnx){
        $sql="insert into contactanos values('$dni','$nom','$ape','$email','$telef','$asunto','$detalle')";   
        mysqli_query($cnx, $sql) or die(mysqli_error($cnx));
    }

    //Eliminar cliente
    function eliminarCliente($dni,$cnx){
        $sql="delete from contactanos where dni='$dni'";   
        mysqli_query($cnx, $sql) or die(mysqli_error($cnx));
    }

    //Modificar Cliente
    function modificarCliente($dni,$nom,$ape,$email,$telef,$asunto,$detalle,$cnx){
         $sql="update contactanos set nombre='$nom',apellido='$ape',email='$email',telefono='$telef',asunto='$asunto',detalle='$detalle' where dni='$dni'"; 
        mysqli_query($cnx, $sql) or die(mysqli_error($cnx));


    }

    //Mostrar Cliente
    function listarCliente($cnx){
        $sql="select dni, nombre, apellido, email, telefono,asunto,detalle from contactanos"; 
        $res= mysqli_query($cnx, $sql);
        $vec=array();
        while($f= mysqli_fetch_array($res))  
            $vec[]=$f;
        return $vec;
    }

    //Buscar Cliente
    function buscarCliente($dni,$cnx){
        $sql="select nombre, apellido, email, telefono, asunto, detalle from contactanos where dni='$dni'";
        $res=mysqli_query($cnx,$sql);
        $vec=array();
        if(mysqli_num_rows($res)>0){
            $vec = mysqli_fetch_array($res);

        }
        return $vec;
    }







?>
