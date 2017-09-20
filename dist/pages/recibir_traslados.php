<?php header('Content-Type: text/html; charset=UTF-8'); ?><?php
session_start();
if (isset($_SESSION['username'])) {
    
} else {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html class="loading" lang="en">
  <!-- Item Name: Forge - Material Design Admin Template
  Version: 1.0
  Author: CodigoForge
  Author URL: https://themeforest.net/user/codigoforge
  WebSite : http://www.codigoforge.com
  -->
  <head>
    <link rel="icon" href="../images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon-precomposed" href="../images/favicon/favicon-32x32.png">
    <!-- ============================-->
    <!-- META DATA-->
    <!-- ============================-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="title" content="Forge is modern, responsive Material Admin Template.">
    <meta name="description" content="Forge Material Admin Template is modern, responsive and based on Material Design by Google.It's Material Design Admin Template powered by MaterialCSS.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, materialcss, admin pages, material CMS, forge admin template, resoponsive material admin">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="../images/favicon/favicon-32x32.png">
    <meta name="theme-color" content="#2a56c6">
    <!-- ============================-->
    <!-- TITLE-->
    <!-- ============================-->
    <title>Recibir Traslados</title>
    <link type="text/css" rel="stylesheet" href="../plugins/datatable/jquery.dataTables.min.css">
    <link type="text/css" rel="stylesheet" href="../plugins/datatable/select.dataTables.min.css">

    <!-- ============================-->
    <!-- FONTS-->
    <!-- ============================-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Inconsolata" type="text/css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- ============================-->
    <!-- CSS-->
    <!-- ============================-->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/dynamic.min.css">
    <link rel="stylesheet" href="../css/markup.min.css">
    <link rel="stylesheet" href="../plugins/scrollbar/perfect-scrollbar.min.css">
            
  </head>
  <body>
      
      
    <!-- ============================-->
    <!-- PRELOAD-->
    <!-- ============================-->
    <div id="preloader">
      <div class="preloader-center">
        <div class="dots-loader dot-circle"></div>
      </div>
    </div>
    <!-- ============================-->
    <!-- CONTENT AREA-->
    <!-- ============================-->
    <header>
      <!-- ============================-->
      <!-- TOP NAV-->
      <!-- ============================-->
      <div class="navbar-fixed full-top-nav">
        <div id="current-menu" data-menu="default">
          <nav><a class="morph menu small mob-menu button-collapse top-nav waves-effect waves-light circle hide-on-large-only" href="javascript:void(0)" id="sidebar-default-collapse" data-activates="nav-default"><span><span class="s1"></span><span class="s2"></span><span class="s3"></span></span></a>
            <div class="nav-wrapper">
              <!-- LOGO Set--><a class="animated brand-logo hide-on-large-only nav-logo" href="menu.php"><i class="material-icons logo-icon left base-text">whatshot</i><span class="left" style="margin-left:20px;">Bless</span></a><a class="animated brand-logo hide-on-med-and-down defaultMenu-logo" href="menu.php"><i class="material-icons logo-icon left white-text">whatshot</i><span class="left" style="margin-left:20px;">Bless</span></a>
              <!-- Left menu options at top-nav-->
              <ul class="left topnav-Menu-ls hide-on-med-and-down">
                <li><a class="morph small iconizedToggle waves-effect waves-light" href="javascript:void(0)"><span><span class="s1"></span><span class="s2"></span><span class="s3"></span></span></a>
                </li>
                
              </ul>
              <!-- Right Menu-->
              <ul class="right">
                
                <!-- MESSAGE SECTION-->
                
                
                <li class="hide-on-med-and-down"><a class="dropdown-button waves-effect waves-set" href="#" data-beloworigin="true" data-activates="top-nav-msgsweb"><i class="material-icons">email</i><span class="badge-count">5</span></a></li>
                <!-- ADMIN SETTINGS SECTION-->
                
                
                <li><a class="dropdown-button waves-effect waves-set" href="#" data-beloworigin="true" data-activates="top-nav-userProfile"><img class="circle admin-profile-img-small" src="../images/placeholder/50x50g.jpg" alt=""></a></li>
                
               
              </ul>
              <?php
                                  require"conexion.php";
                                    
                                             $sql="select id, nombres , apellidos , img from Usuarios where correo_electronico='".$_SESSION['username']."'";
                                          
                                             $res = mysql_query($sql)or die (mysql_error());
                                            if ($fila = mysql_fetch_array($res)) {
                                                
                                                $nombres=utf8_encode($fila['nombres']);
                                                $apellidos=utf8_encode($fila['apellidos']);
                                                $img=utf8_encode($fila['img']);
                                            }
                                        
                                      
                                    ?>
              
              <!-- Mobile Screen Nav Options-->
              
              
              <ul class="right hide-on-large-only topnav-hidden-menu hide">
               
                <li class="right"><a class="waves-effect waves-set toggle-topnav-hidden-menu" href="#"><i class="material-icons">more_vert</i></a></li>
                <li class="right"><a class="morph notify small notification-toggle-open waves-effect waves-light" href="javascript:void(0)"><span><span class="s1"></span><span class="s2"></span><span class="s3"></span></span></a>
                </li>
                <li class="right"><a class="dropdown-button waves-effect waves-set" href="#" data-beloworigin="true" data-activates="top-nav-msgs"><i class="material-icons">email</i><span class="badge-count">5</span></a></li>
              </ul>
              <!-- DROP-DOWN-->
              
              
              <div class="drop-down-bucket">
                <ul class="collection dropdown-content" id="top-nav-msgsweb">
                  <li class="collection-item msg-header">
                    <ul>
                      <li class="left"><span>Messages</span><a class="right" href="#"><i class="material-icons small">create</i></a></li>
                    </ul>
                  </li>
                  <li class="collection-item msg-content">
                    <ul class="collection" id="psTopNavMmsgsWeb">
                      
                     <!--inicio de notificaciones -->
                                      <li class="collection-item msg-items">
                                          <a class="chat-user" href="#"> <img class="circle" src="../images/placeholder/300x300t.jpg" alt="">
                                      <span class="chat-status with-badge online">10
                                      </span>
                                      </a>
                                      
                                         <?php  
                                                /*    require"conexion.php";
                                                    
                                                    $sql11="select * from notificaciones where id=".$fila['id'].""; 
                                                    $res11 = mysql_query($sql11);
                                                   
                                                    mysql_query("SET NAMES 'utf8'");  
                                                        
                                                    
                                                    while ($fila11 = mysql_fetch_Array($res11))
                                                    {   
                                                        
                                                        require"conexion.php";
                                                    
                                                            $sql10="select * from Usuarios where id=".$fila['id'].""; 
                                                            $res10 = mysql_query($sql10);
                                                           
                                                            mysql_query("SET NAMES 'utf8'");
                                                            if($res11){
                                                                echo " Traslado enviado de ".$fila['nombres']."";   
                                                            }
                                                         
                                                    }*/
                                        ?>
                                      
                                      <a class="chat-content" href="#">
                                          <span class="title">Traslado</span>
                                          <div class="notify-desc">
                                           
                                             
                                             </div>
                                             <span class="chat-time">5 Minutes ago.</span>
                                             </a>
                                             
                                    </li>
                    </ul>
                  </li>
                  <li class="collection-item msg-footer pos-relative"><a class="center tooltipped" href="#" data-position="top" data-tooltip="See all messages" style="padding:7px 16px;"><i class="material-icons small clear-style">more_horiz</i></a></li>
                </ul>
               
                
                
                <ul class="collection dropdown-content" id="top-nav-userProfile">
                  <li class="collection-item">
                    <div class="admin-profile-content"><img class="circle user-profile-img" src="<?php echo $img;?>" alt="">
                      <p class="user-name primary-text"><?php echo $nombres; echo " ";echo $apellidos; ?></p>
                      
                      <div class="divider"></div>
                      <ul class="profile-ul">
                        <li class="profile-li"><a class="btn waves-light collection-item" href="#"><i class="material-icons left">settings</i><span class="text-items">Perfil</span></a></li>
                        
                        <li class="profile-li"><a class="btn waves-light collection-item" href="salir.php"><i class="material-icons left">power_settings_new</i><span class="text-items">Salir</span></a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- Searchbar-->
              <form class="inactive animated" id="app-search">
                <div class="input-field">
                  <input type="search" id="search">
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label><i class="material-icons app-search-Cls">close</i>
                </div>
              </form>
            </div>
          </nav>
        </div>
      </div>
      <!-- ============================-->
      <!-- Vertical Navigation (Default and Iconized)-->
      <!-- ============================-->
      
      


      <div class="vertical-navigations animated">
        <ul class="side-nav fixed animated collapsible collapsible-accordion" id="nav-default">
          <li class="logo"><a class="brand-logo hide-on-large-only" id="logo-container" href="/"></a></li>
          <li class="usr-profile">
              
              
               <?php
                                  require"conexion.php";
                                    
                                             $sql="select nombres , apellidos , img from Usuarios where correo_electronico='".$_SESSION['username']."'";
                                          
                                             $res = mysql_query($sql)or die (mysql_error());
                                            if ($fila = mysql_fetch_array($res)) {
                                                
                                                $nombres=utf8_encode($fila['nombres']);
                                                $apellidos=utf8_encode($fila['apellidos']);
                                                $img=utf8_encode($fila['img']);
                                            }
                                        
                                      
                                    ?>
                                    
                                    
            <div class="usr-profile-header"><a href="#"><img class="circle" src="<?php echo $img;?>" alt="Thor"></a></div>
            <ul class="user-options">
                
                
              <li class="waves-effect waves-set"><span class="usr-name"><?php echo $nombres; echo " ";echo $apellidos; ?></span></li>
              <li class="user-option-item waves-effect waves-set"><a class="btn-floating btn-small waves-effect waves-light" href="#"><i class="material-icons">lock</i></a></li>
              <li class="user-option-item waves-effect waves-set"><a class="btn-floating btn-small waves-effect waves-light" href="#"><i class="material-icons">settings</i></a></li>
              <li class="user-option-item waves-effect waves-set"><a class="btn-floating btn-small waves-effect waves-light" href="#"><i class="material-icons">power_settings_new</i></a></li>
            </ul>
          </li>
          <li><a class="collapsible-header no-col-body waves-effect waves-set" href="agregar_referencia.php"><i class="material-icons">dashboard</i><span>Agregar Ref.</span></a></li>
          

        <li><a class="collapsible-header waves-effect waves-set active current" href="#"><i class="material-icons">list</i><span>Traslados</span><i class="material-icons mdi-navigation-chevron-left open-aside">keyboard_arrow_left</i></a>
            <div class="collapsible-body">
              <ul>
                <li class="menu-item"><a class="waves-effect waves-set active" href="enviar_traslados.php"><span>Enviar</span></a></li>

                <li class="menu-item"><a class="waves-effect waves-set active" href="recibir_traslados.php"><span>Recibir</span></a></li>
              </ul>
            </div>
          </li>


          <li><a class="collapsible-header no-col-body waves-effect waves-set" href="#"><i class="material-icons">web</i><span>Diseño</span></a></li>

          <li><a class="collapsible-header no-col-body waves-effect waves-set" href="#"><i class="material-icons">view_list</i><span>Producción</span></a></li>

          <li><a class="collapsible-header no-col-body waves-effect waves-set" href="#"><i class="material-icons">settings_ethernet</i><span>Confección</span></a></li>

          <li><a class="collapsible-header no-col-body waves-effect waves-set" href="#"><i class="material-icons">view_week</i><span>Lavanderia</span></a></li>

          <li><a class="collapsible-header no-col-body waves-effect waves-set" href="#"><i class="material-icons">done</i><span>P. Terminado</span></a></li>

         
          
         
        </ul>
      </div>



      <!-- ============================-->
      <!-- Horizontal Navigation (Default and Iconized)-->
      <!-- ============================-->
   
    </header>
    <main class="animated">
      
      <!-- ============================-->
      <!-- MAIN HEADER-->
      <!-- ============================-->
      <div class="main-header">
        <div class="sec-page">
          <div class="page-title">
            <h2>Recibir Traslados</h2>
          </div>
          
        </div>
        <!-- ============================-->
        <!-- breadcrumb-->
        <!-- ============================-->
        <div class="sec-breadcrumb">
          <nav class="breadcrumbs-nav left">
          
          </nav>
        </div>
      </div>
      <!-- ============================-->
      <!-- Main container-->
      <!-- ============================-->
     
      
      <div class="main-container">
        
          <!-- With Checkbox-->
          <div class="col s12">
            <div class="card-panel">
              
              <div class="row">
                <div class="col s12">
                  <div class="datatable-wrapper">
                    <table class="datatable-selection-single display cell-border">
                      <thead>
                        <tr>
                          <th>Usuario traslada</th>
                          <th>Referencia</th>
                          <th>C. enviada</th>
                          <th>C. total Ref</th>
                          <th>C. faltante ref</th>
                          <th>Aprobado</th>
                          <th>Rechazado</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                 
                          <?php
                          echo $_SESSION['username'];
                        require"conexion.php";
                        
                        $sql3 = "select * from Usuarios where correo_electronico='".$_SESSION['username']."'";
                        $res3 = mysql_query($sql3);
                        mysql_query("SET NAMES 'utf8'");
                        $fila3 = mysql_fetch_Array($res3);
                       
                        
                        require"conexion.php";
                        
                        $sql = "select * from Translados where usuario_recibe=".$fila3['id']." and aprobacion=0 and rechazado=0;";
                        $res = mysql_query($sql);
                        mysql_query("SET NAMES 'utf8'");
                        $contador=1;
                        while ($fila = mysql_fetch_Array($res)) 
                        {
                            
                             require"conexion.php";
                            $sql1 = "select nombres, apellidos from Usuarios where id=".$fila['usuario_transalada']."";
                            $res1 = mysql_query($sql1);
                            mysql_query("SET NAMES 'utf8'");
                            $fila2=mysql_fetch_Array($res1);
                       
                           
                                       echo "
                                        
                                    <tr>
                                        
                                        <td>".$fila2['nombres']." ".$fila2['apellidos']."</td>
                                        <td>".$fila['referencia']."</td>
                                        <td>".$fila['cantidad']."</td>
                                        <td>".$fila['valor_antes']."</td>
                                        <td>".$fila['valor_nuevo']."</td>
                                        <td><div 
                                        class=\"action-btns\">
                                        <a class=\"btn-floating warning-bg\" href=\"#modal". $contador."\">
                                        <i class=\"material-icons green\" name=\"aprobado\">
                                        done
                                        </i>
                                        </a>
                                        <div class=\"modal modal-fixed-footer\" id=\"modal". $contador."\">
                                            <div class=\"modal-content\">
                                              <h4>Aprobar Traslado</h4>
                                              <p> Despues de aprobado solo un administrado puede deshacer el traslado que se realizara  ".$fila['id']."  ".$fila['referencia']."</p>
                                             </div>
                                            <div class=\"modal-footer\">
                                            <a class=\"modal-action modal-close waves-effect waves-light btn\" href=\"#!\">
                                            Volver
                                            </a>
                                            <a class=\"modal-action modal-close waves-effect waves-light btn\" href=\"traslado_aprobado.php?id_traslado=".$fila['id']."&id_referencia=".$fila['referencia']."\">
                                            Aprobar Traslado
                                            </a>
                                            </div>
                                          </div>
                                         </div>
                                        </td>";
                                        
                                        
                                        
                                         $contador= $contador+1;
                                       echo " <td>
                                        <div class=\"action-btns\">
                                        <a class=\"btn-floating error-bg\" href=\"#modal". $contador."\">
                                        <i class=\"material-icons red\" name=\"rechazado\">
                                        not_interested
                                        </i>
                                        </a>
                                        
                                        <div class=\"modal modal-fixed-footer\" id=\"modal". $contador."\">
                                        <div class=\"modal-content\">
                                          <h4>Rechazar El Traslado</h4>
                                          <p> Despues de rechazar  la bodega que traslado debe volver a enviar o realizar el traslado  ".$fila['id']." ".$fila['referencia']."</p>
                                        </div>
                                        <div class=\"modal-footer\">
                                        <a class=\"modal-action modal-close waves-effect waves-light btn\" href=\"#!\">
                                        Volver
                                        </a>
                                        <a class=\"modal-action modal-close waves-effect waves-light btn\" href=\"traslado_rechazado.php?id_traslado=".$fila['id']."&id_referencia=".$fila['referencia']."\">
                                        Rechazar Traslado
                                        </a>
                                        </div>
                                      </div>
                                        
                                        </div></td>
                                        
                                    </tr>";
                                         $contador= $contador+1;
                                        
                                    }
                        
                        ?>
                            
                          </td>
                        
                      </tbody>
                      <tfoot>
                           
                      
                      </tfoot>
                    </table>
                  </div>
                </div>

                <a href="ver_informes.php" class="waves-effect waves-light btn">Ver Informes</a>
                
                
       <br>
          
         
            <!-- Modals HTML Structure    Ventana emergente -->
            
              
                
                  
                  
                  
                
          <!-- Single row selection-->
          
          <!-- Multiple rows selection-->
          
   
          
      <!-- FOOTER-->
       <br>
      <footer class="page-footer no-mrpd grey lighten-4">
        <div class="footer-copyright">
           
          <div class="container primary-text">© 2017 Bless, Todos los derechos reservados.
           
          </div>
        </div>
      </footer>
    </main>
    <!-- ============================-->
    <!-- SCRIPTS-->
    <!-- ============================-->
    <script type="text/javascript" src="../js/all.js"></script>
    <script type="text/javascript" src="../plugins/datatable/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../plugins/datatable/dataTables.select.min.js"></script>
    <script type="text/javascript" src="../plugins/datatable/templates.js"></script>
    <script type="text/javascript" src="../plugins/datatable/using-api.js"></script>
    <script>
      $(document).ready(function(){
        $('select').material_select();
      });
    </script>
    

    
  </body>
</html>