<?php header('Content-Type: text/html; charset=UTF-8'); ?><?php
session_start();
if (isset($_SESSION['username'])) {
    
} else {
    header("Location: index.php");
}


if (isset($_POST["Enviar"])) {
    require"conexion.php";
$sql3 = "select * from Usuarios where id_bodega='".$_POST["bodega"]."';";
                        $res3 = mysql_query($sql3)or die("Error en: $sql: " . mysql_error());
                        mysql_query("SET NAMES 'utf8'");
                        $fila3 = mysql_fetch_Array($res3);
                        $hoy= getdate();
                         $fecha= $hoy['year']."-".$hoy['mon']."-".$hoy['mday']."-".$hoy['hours']."-".$hoy['minutes']."-".$hoy['seconds'];
$total= $_POST["cantidad"]-$_POST["jeansenviados"];
 
if($total==0){
    $sql="INSERT INTO Translados (id, usuario_transalada, usuario_recibe, referencia, cantidad,  valor_antes, valor_nuevo, fecha_creacion) 
                        VALUES ('NULL','"                                                    
                                                    .$_POST["miid"]."','"
                                                    .$fila3['id']."','"
                                                    .$_POST["id"]."','"
                                                    .$_POST["jeansenviados"]."','"
                                                     .$_POST["cantidad"]."','"
                                                     .$total."','"
                                                     .$fecha."'
                                            );";
     $res = mysql_query($sql)or die("Error en: $sql: " . mysql_error());
     
     
                         
     
                                    $sql2 = "Update Referencias Set estado_translado='1', cantidad='0' where id='" . $_POST["id"] . "'";
                                    $res2 = mysql_query($sql2)or die("Error en: $sql: " . mysql_error());
                                    header("Location:enviar_traslados.php?res=exito");
                                      EXIT();
     
}else{
    
     $sql="INSERT INTO Translados (id, usuario_transalada, usuario_recibe, referencia, cantidad,  valor_antes, valor_nuevo, fecha_creacion) 
                         VALUES ('NULL','"                                                    
                                                    .$_POST["miid"]."','"
                                                    .$fila3['id']."','"
                                                    .$_POST["id"]."','"
                                                    .$_POST["jeansenviados"]."','"
                                                     .$_POST["cantidad"]."','"
                                                     .$total."','"
                                                     .$fecha."'
                                            );";
                                            
     $res = mysql_query($sql)or die("Error en: $sql: " . mysql_error());
     
     

     
     
                     $sql2 = "Update Referencias Set estado_translado='0', cantidad='".$total."' where id='" . $_POST["id"] . "'";
                                    $res2 = mysql_query($sql2)or die("Error en: $sql: " . mysql_error());
                                    
                                    header("Location:enviar_traslados.php?res=exito2");
                                      EXIT();
    
}
    
header("Location: enviar_traslados.php?res=Error");
            EXIT();
}
header("Location: enviar_traslados.php?res=Error2");
            EXIT();
?>