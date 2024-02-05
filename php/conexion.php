<?php

function conectar() {
    $conn= mysqli_connect ("localhost","root","","db_london"); 
/*    if(!$conn){
        die("No puede conectarse ".mysqli_error());
    }
    else{
        echo "Conexión satisfactoria";
    }*/
    return $conn; 
}











//buscar usuario
function validarUsuario($usu,$pas,$conn){
    $sql="select * from usuarios where nomusu = '$usu' and pasusu = '$pas'";
    $res= mysqli_query($conn, $sql);
    $cant=mysqli_num_rows($res);
    return $cant;
}

//método para agregar registros
function agregarProducto($cod,$nom,$pre,$fot,$tip,$conn){
    $sql="insert into producto values('$cod','$nom','$pre','$fot','$tip')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

 //método para eliminar registros
function eliminarProducto($cod,$conn){
    $sql="delete from producto where codpro='$cod'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

 //método para actualizar todos los campos de la tabla
function actualizarTodoProducto($cod,$nom,$pre,$fot,$tip,$conn){
    $sql="update producto set nompro='$nom', prepro='$pre', fotpro='$fot', codtip='$tip' where codpro='$cod'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

 //método para actualizar registros sin foto
function actualizarProducto($cod,$nom,$pre,$tip,$conn){
    $sql="update producto set nompro='$nom', prepro='$pre', codtip='$tip' where codpro='$cod'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

 //método para buscar registro
function buscarProducto($cod,$conn){
    $sql="select nompro, prepro, fotpro, codtip from producto where codpro='$cod'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}

//método para buscar registro conociendo el codigo de tipo
function buscarProductoPorTipo($codTipo,$conn){
    $sql="select * from producto where codtip='$codTipo'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec; 
}

    
//método para listar registros
function listarProducto($conn){
    $sql="select codpro, nompro, prepro, fotpro, codtip from producto"; 
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

//Tabla tipo 
//método para agreegar registros
function agregarTipo($cod,$nom,$conn){
    $sql="insert into tipo values('$cod','$nom')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

//método para eliminar registros 
function eliminarTipo($cod,$conn){
    $sql="delete from tipo where codtip='$cod'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

//método para actualizar registros sin foto
function actualizarTipo($cod,$nom,$conn){
    $sql="update tipo set nomtip='$nom' where codtip='$cod'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

//método para buscar registro
function buscarTipo($cod,$conn){
    $sql="select nomtip from tipo where codtip='$cod'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}
    
//método para listar registros
function listarTipo($conn){
    $sql="select codtip, nomtip from tipo";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}
?>
