<?php

require"conexion.php";


if (isset($_POST["validar"])) {

    $id_referencia=$_POST['referencias'];

    
    header("Location: enviar_traslados2.php?id=$id_referencia"); 

    
}else{
   header("Location: enviar_traslados.php"); 
    EXIT();
}
?>

