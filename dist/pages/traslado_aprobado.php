<?php
$traslado = $_GET['id_traslado'];

$id_referencia = $_GET['id_referencia'];
 
$hoy= getdate();
$fecha= $hoy['year']."-".$hoy['mon']."-".$hoy['mday']." ".$hoy['hours'].":".$hoy['minutes'].":".$hoy['seconds'];



$aprobacion=1;

$estado_translado=0;

$completo=1;

$incompleto=0;

$cantidadnueva=0;
                        //se consultan el treas lado con el id que me envian por metodo get

                        require"conexion.php";
                        $sql1 = "select * from Translados where id=$traslado"; 
                        mysql_query("SET NAMES 'utf8'");
                        $res1 = mysql_query($sql1)or die("Error en: $sql1: " . mysql_error());
                        $fila1=mysql_fetch_Array($res1);
                        
                        //se consulta la referencia que existe con el id de la referencia, para actualizar la referencia sque fue aprobada
                        
                        require"conexion.php";
                        $sql2 = "select * from Referencias where id=$id_referencia"; 
                        mysql_query("SET NAMES 'utf8'");
                        $res2 = mysql_query($sql2)or die("Error en: $sql2: " . mysql_error());
                        $fila2=mysql_fetch_Array($res2);
                        
                        
                        
                        //se consultael usuario que recibe, con el valor de usuario recibe del traslado
                        
                        require"conexion.php";
                        $sql3 = "select * from Usuarios where id=".$fila1['usuario_recibe'].""; 
                        mysql_query("SET NAMES 'utf8'");
                        $res3 = mysql_query($sql3);
                        $fila3=mysql_fetch_Array($res3)or die("Error en: $sql3: " . mysql_error());
                        
                        
                        
                        //se consuta la referencia que estan en mi bodega, el valor de id_bodega se obtiene de la informacion de la tabla usuario
                        
                        require"conexion.php";
                        $sql10 = "select * from Referencias where id_bodega=".$fila3['id_bodega'].""; 
                        mysql_query("SET NAMES 'utf8'");
                        $res10 = mysql_query($sql10)or die("Error en: $sql0: " . mysql_error());
                        $fila10=mysql_fetch_Array($res10);
                        
                    /*
                        require"conexion.php";
                        $sql5 = "select * from Referencias where id=".$fila2['id']." and talla=".$fila2['talla']." and id_bodega=".$fila1['id_bodega']." and tipo_corte=".$fila['tipo_corte'].""; 
                        mysql_query("SET NAMES 'utf8'");
                        $res5 = mysql_query($sql5);
                        $fila5=mysql_fetch_Array($res5);
                      */  
                        
                        //$id_referencia = la referecia que me llega por metodo get, optenida desde el traslado que se realizo
                        //$fila[id] = las referencias existentes con ese id en mi bodega, solo puede haber una referencia, por que siempre se esta actualizando
                        //$fila3['id_bodega'] = la bodega de mi usuario, mi usuario solo tiene un bodega, busca en todas las referencias con ese id que pertenezcan a mi bodega
                        //$fila2['id_bodega'] = la bodega de la referencia, para comparar si esa referencia esta en mi bodega
                        
                        
                        // $cantiddnueva = es la suma de la canitdad del traslado mas el valor de la referencia, con esta se hace update en referencia del id especifico
                       // echo $cantidadnueva= $fila10['cantidad'] + $fila1['cantidad'];
                         
                         
                         
                        require"conexion.php";
                        $sql = "Update Translados Set aprobacion=". $aprobacion." where id=".$traslado."";
                        mysql_query("SET NAMES 'utf8'");
                        $res = mysql_query($sql);
                        
                        // el update de aprobacion se hace en cualquiera de los casos, el recibe el traslado entonces el traslado cambia a aprobado
                        
                       // echo $id_referencia, $fila2['id'], $fila3['id_bodega'], $fila10['id_bodega'];
                        
                        if(!$fila10['referencia'] == $id_referencia)
                        {
                            //echo "entro por que no existe en mi bodega";
                            
                            if($fila1['valor_nuevo'] == 0)
                            {
                                //echo "entro por que no existe en mi bodega y la enviaron completa";
                                require"conexion.php"; 
                                $sql8 = "insert into Referencias (coleccion, referencia, tipo_corte, marca,talla, confeccionista, cantidad, fecha_inicial, utlima_actualización, usuario_bodega, estado_translado, usuario_transladando,  completo, id_bodega) values('" . $fila2['coleccion'] .
                                "','" . $fila2['referencia'] .
                                "','" .$fila2['tipo_corte'] .
                                "','" .$fila2['marca'] .
                                "','" .$fila2['talla'] .
                                 "','" .$fila2['confeccionista'] .
                                "','" .$fila1['cantidad'] .
                                "','" .$fecha.
                                "','" .$fecha.
                                "','" .$fila1['usuario_recibe'].
                                "','" .$estado_translado.
                                "','" .$fila1['usuario_recibe'].
                                "','" .$completo.
                                "','".$fila3['id_bodega']."');";
                                mysql_query("SET NAMES 'utf8'");
                                $res8 = mysql_query($sql8)or die("Error en: $sql8: " . mysql_error());
                        
                            }else{
                                
                            //    echo "entro por que no existe en mi bodega y la enviaron incompleta";
                                require"conexion.php"; 
                                $sql9 = "insert into Referencias (coleccion, referencia, tipo_corte, marca,talla, confeccionista, cantidad, fecha_inicial, utlima_actualización, usuario_bodega, estado_translado, usuario_transladando,  completo, id_bodega) values('" . $fila2['coleccion'] .
                                "','" . $fila2['referencia'] .
                                "','" .$fila2['tipo_corte'] .
                                "','" .$fila2['marca'] .
                                "','" .$fila2['talla'] .
                                 "','" .$fila2['confeccionista'] .
                                "','" .$fila1['cantidad'] .
                                "','" .$fecha.
                                "','" .$fecha.
                                "','" .$fila1['usuario_recibe'].
                                "','" .$estado_translado.
                                "','" .$fila1['usuario_recibe'].
                                "','" .$incompleto.
                                "','" .$fila3['id_bodega']."');";
                                mysql_query("SET NAMES 'utf8'");
                                $res9 = mysql_query($sql9)or die("Error en: $sql9: " . mysql_error());
                            }
                             
                                
                            
                        }else{
                            
                       //    echo "entro por que existe";
                            if($fila1['valor_nuevo'] == 0)
                                {
                                    // si el valor nuevo es cero entonces esta enviando los faltantes de la referecia, se cambia el estado de la referencia a completo,
                                    //se le suma la cantidad enviada y si ya habia sido enviada se deja el estado de translado en cero para volverla a enviar
                                    
                                //echo "entro por que el valor es igual a cero";
                                    
                                    require"conexion.php";
                                    $sql6 = "Update Referencias Set completo=1 , cantidad=$cantidadnueva , estado_translado=0 where id_bodega=".$fila10['id_bodega']."";
                                    mysql_query("SET NAMES 'utf8'");
                                    $res6 = mysql_query($sql6)or die("Error en: $sql6: " . mysql_error());
                                }else{
                                    
                                    
                                 //  echo "entro por que el valor es mayor a cero";
                                   
                                    
                                   require"conexion.php";
                                    $sql7 = "Update Referencias Set completo=0 , cantidad=$cantidadnueva , estado_translado=0 where id_bodega=".$fila10['id_bodega']."";
                                    mysql_query("SET NAMES 'utf8'");
                                    $res7 = mysql_query($sql7)or die("Error en: $sql7: " . mysql_error());
                                }
                       
                            
                        }
                    
                    
                     
                       
                        
                         
                       /* if($fila2['valor_nuevo'] == 0){
                            require"conexion.php";
                            $sql5 = "Update Referencias Set estado_translado=1 where id='$id_referencia'";
                            mysql_query("SET NAMES 'utf8'");
                            $res5 = mysql_query($sql5);
                        }
                           */ 
                        
                    
                        if($res)
                        {  //echo "entro 1";
                           if($res1 ){ /*echo "entro 1";*/}
                                if($res2){ /*echo "entro 1";*/}
                                    if($res3){ 
                                        /*echo "entro 1";*/
                                    }
                            
                            header("Location: recibir_traslados.php?referencia%20aprobada%20con%20exito");
                            EXIT();
                        }else{
                            
                            echo "erro2342r";
                            header("Location: recibir_traslados.php?error");
                            EXIT();
                        }
?>

