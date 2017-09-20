<?php
$traslado = $_GET['id_traslado'];

$id_referencia = $_GET['id_referencia'];

$estado=0;
$rechazado=1;



                        require"conexion.php";
                        $sql = "select * from Translados where id=$traslado";
                        $res = mysql_query($sql);
                        mysql_query("SET NAMES 'utf8'"); 
                        $fila = mysql_fetch_Array($res);

                        


                        require"conexion.php";
                        $sql1 = "Update Referencias Set estado_translado='$estado' , cantidad='".$fila['valor_antes']."' where id='$id_referencia'";
                        $res1 = mysql_query($sql1);
                        
                        
                        
                        require"conexion.php";
                        $sql2 = "Update Translados Set rechazado='$rechazado'  where id='$traslado'";
                        $res2 = mysql_query($sql2);
                        
                        
                        
                        if($res && $res1 && $res2)
                        {
                            
                            header("Location: recibir_traslados.php?Rechazo%20realizado%20con%20exito");
                            EXIT();
                        }else{
                            header("Location: recibir_traslados.php");
                            EXIT();
                        }
?>

