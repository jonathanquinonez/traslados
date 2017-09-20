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
    <title>Enviar Traslados</title>
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
    
    <link rel="stylesheet" href="../css/plugins/select2.css">
    <link rel="stylesheet" href="jquery-ui/jquery-ui.css">
    
    <script type="text/javascript" scr="jquery-ui/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" scr="jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" scr="jquery-ui/jquery-ui.jss"></script>
    <script type="text/javascript" scr="jquery-ui/external/jquery/jquery.js"></script>
      <script type="text/javascript" src="../js/all.js"></script>
    <script>
      $(document).ready(function(){
          
          var colores = [
              "rojo",
              "verde",
              "violeta",
              "azul",
              "amarillo",
              "negro",
              "blanco"
              ];
          
          $(".color").autocomplete({
              source: colores
          });
      });
    </script>
    
            <script type="text/javascript"> 
                var text = null; 
                 
                function mostrar() { 
                var textoEscogido = referencias.datalist1.value
                alert(textoEscogido) 
                } 
            </script>
            
            
            <script type="text/javascript">
            $(document).ready(function()
            	{
            	$("input[name=referencia]").change(function() {
            		alert($("input[name=referencia]").val());
            		});
            	});
            </script>
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
    
      <div class="other-verticalSections">
        <!-- ============================-->
        <!-- THEME SETTING-->
        <!-- ============================-->
        
        <!-- ============================-->
        <!-- RIGHT SIDEBAR NOTIFICATION SECTION-->
        <!-- ============================-->
        <!-- NOTIFICATION-SIDEBAR-->
        <div class="row notification-sidebar fixed animated" id="sb-notification">
          <div class="col s12">
            <ul class="tabs rsb-notifications">
              <li class="tab col s4"><a href="#rsb-shortcuts"><i class="material-icons small">widgets</i></a></li>
              <li class="tab col s4"><a href="#rsb-notifications"><i class="material-icons small">notifications</i><span class="badge-count white">10</span></a></li>
              <li class="tab col s4"><a href="#rsb-tasklist"><i class="material-icons small">playlist_add_check</i><span class="badge-count teal lighten-2 white-text">14</span></a></li>
            </ul>
            
           
            <div class="col s12" id="rsb-shortcuts">
              <ul class="tab-shortcut collection" id="psTabShortcut">
                <li class="collection-item waves-effect waves-set"><a class="shortcut-aItem" href="#"><i class="material-icons cyan-text">settings</i><span class="shortcut-name">Perfil</span></a></li>
                <li class="collection-item waves-effect waves-set"><a class="shortcut-aItem" href="#"><i class="material-icons red-text">power_settings_new</i><span class="shortcut-name">Salir</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main class="animated">
      <ul class="dropdown-content action-ex-opts" id="generalDropDown">
        <li><a class="waves-effect waves-set" href="#"><i class="material-icons">account_box</i><span>Account</span></a></li>
        <li><a class="waves-effect waves-set" href="#"><i class="material-icons">local_activity</i><span>Recent Activities</span></a></li>
        <li><a class="waves-effect waves-set" href="#"><i class="mdi mdi-wheelchair-accessibility"></i><span>Accessibility</span></a></li>
        <li class="divider"></li>
        <li><a class="waves-effect waves-set" href="#"><i class="material-icons">settings</i><span>All Settings</span></a></li>
      </ul>
      <!-- ============================-->
      <!-- MAIN HEADER-->
      <!-- ============================-->
      <div class="main-header">
        <div class="sec-page">
          <div class="page-title">
            <h2>Traslados</h2>
          </div>
          
        </div>
        <!-- ============================-->
        <!-- breadcrumb-->
        <!-- ============================-->
        
      </div>
      <!-- ============================-->
      <!-- Main container-->
      <!-- ============================-->
          
        <!-- Basic Text Inputs			-->
       
        <!-- Select-->
        
        <!-- Select 2-->
        <div class="row">
         
          <!-- 1. Single select-->
          <form class="col s12" method="POST"  name="form1" action="">
            <div class="card-panel">
              <div class="row box-title">
                <div class="col s12">
                  <h5 class="content-headline">Enviar un Traslado <?php 
                 
                  
                require"conexion.php";
                  
                  $sql3 = "select * from Usuarios where correo_electronico='".$_SESSION['username']."';";
                        $res3 = mysql_query($sql3)or die("Error en: $sql: " . mysql_error());
                        mysql_query("SET NAMES 'utf8'");
                        $fila3 = mysql_fetch_Array($res3);
                      ?>  </h5>
                  </div>
              </div>
              <div class="row">
                  
                <div class="select2-input col s12">
                  <label>Selecciona el Referente</label>
                  <select class="select2_select" id="single-select" name="referencia">
                   <?php  
                                require"conexion.php";
                                
                                $sql="select R.id , R.talla , referencia R , nombre C from Coleccion C, Referencias R where C.id = R.coleccion AND estado_translado=0 AND id_bodega=".$fila3['id_bodega'].";"; 
                                $res = mysql_query($sql);
                               
                                mysql_query("SET NAMES 'utf8'");  
                                    
                                
                                while ($fila = mysql_fetch_Array($res))
                                {   
                                    
                                echo "<option value=\"".$fila['id']."\">". $fila['R']." - ".$fila['C']." - ".$fila['talla']."</option>";
                                }
                       ?>
                  </select>
                </div>
                <div class="input-field col s6 ">
               <button class="btn mm-btn waves-effect waves-light sigin-submit" type="submit"  name="Entrar">Mostrar<i class="material-icons right white-text">search</i></button>
              </div></form>
              </div>
            </div>
            
            
            <?php
      
        if(isset($_POST["Entrar"])){
            $sql4 = "select R.id , R.referencia , C.nombre as \"nombre_coleccion\" , TC.nombre as  \"tipo_corte\" , M.nombre as \"marca\" , R.talla , R.cantidad
                    from Coleccion C, Referencias R ,tipo_corte TC , Marca M 
                    where C.id = R.coleccion AND TC.id=R.tipo_corte AND M.id=R.marca AND R.id=".$_POST["referencia"].";"; 
                        $res4 = mysql_query($sql4)or die("Error en: $sql4: " . mysql_error());
                        mysql_query("SET NAMES 'utf8'");
                        $fila4 = mysql_fetch_Array($res4);
                        $fila3['id_bodega']=$fila3['id_bodega']+1;
            
            
            
            echo "
                  
            <form class=\"col s12\" method=\"POST\"  name=\"form1\" action=\"ejecutartraslado.php\">
            <div class=\"card-panel\">
              <div class=\"col s4\">
                  <h5 class=\"content-headline\">
                  Referencia : ".$fila4['referencia']."<br>
                  
                  </h5></div> 
                  <div class=\"col s4\">
                  <h5 class=\"content-headline\">
                  
                  Talla : ".$fila4['talla']."
                  </h5></div>
                  <div class=\"col s4\">
                  <h5 class=\"content-headline\">
                  
                  Cantidad Maxima : ".$fila4['cantidad']."
                  </h5></div>
              <div class=\"row\">
                  
                <div class=\"input-field col s6\">
					<i class=\"material-icons prefix\">info</i>
					<input id=\"icon_prefix\" type=\"text\" value=\"".$fila4['marca']."\" readonly=\"readonly\" >
					<label for=\"icon_prefix\">Marca </label>
				</div>
                  
                <div class=\"input-field col s6\">
					<i class=\"material-icons prefix\">info</i>
					<input id=\"icon_prefix\" type=\"text\" value=\"".$fila4['nombre_coleccion']."\" readonly=\"readonly\" >
					<label for=\"icon_prefix\">Tipo de Colección </label>
				</div>
				 
				<div class=\"input-field col s6\">
					<i class=\"material-icons prefix\">info</i>
					<input id=\"icon_prefix\" type=\"text\" name=\"corte\" value=\"".$fila4['tipo_corte']."\" readonly=\"readonly\" >
					<label for=\"icon_prefix\">Tipo de Corte </label>
				</div>
				
				<div class=\"input-field col s6\">
					<i class=\"material-icons prefix\">info</i>
					<input id=\"icon_prefix\" type=\"text\" name=\"bodega\" value=\"".$fila3['id_bodega']."\" readonly=\"readonly\" >
					<label for=\"icon_prefix\">Esta referencia se envia a la bogeda : </label>
				</div>
				
				<div class=\"input-field col s12\">
					<i class=\"material-icons prefix\">info</i>
					<input id=\"icon_prefix\" type=\"number\" required=\"\" name=\"jeansenviados\" min=\"1\" max=\"".$fila4['cantidad']."\">
					
					<input id=\"icon_prefix\" type=\"hidden\" required=\"\" name=\"cantidad\" value=\"".$fila4['cantidad']."\">
					<input id=\"icon_prefix\" type=\"hidden\" required=\"\" name=\"ref\" value=\"".$fila4['referencia']."\">
					<input id=\"icon_prefix\" type=\"hidden\" required=\"\" name=\"id\" value=\"".$fila4['id']."\">
					<input id=\"icon_prefix\" type=\"hidden\" required=\"\" name=\"miid\" value=\"".$fila3['id']."\">
					<label for=\"icon_prefix\">Cantidad A Enviar </label>
				</div>
               
                <div class=\"input-field col s12 \">
               <button class=\"btn mm-btn waves-effect waves-light sigin-submit\" type=\"submit\"  name=\"Enviar\">Enviar<i class=\"material-icons right white-text\">send</i></button>
              </div></form>
              </div>
            </div>";
        }
        
        ?>
            
             
            
            
           


         
        <!-- Files-->
       
        <!-- FORM HELPER-->
       
      
      <!-- FOOTER-->
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
     
 ⁠⁠⁠<script type="text/javascript" src="../js/all.js"></script>
    <script>
      $(document).ready(function(){
      	$(".basic-select").material_select();
      });
    </script>
    <script type="text/javascript" src="../js/all.js"></script>
    <!-- SELECT 2-->
    <script type="text/javascript" src="../plugins/select2/select2.js"></script>
    <script>
      $(document).ready(function() {
      	$('select.select2_select').select2();
      	$('select.select2-placeholder').select2({
      		placeholder: "Select a state",
      		allowClear: true
      	});
      	$(".js-example-basic-multiple-limit").select2({
      		maximumSelectionLength: 2
      	});
      });
    </script>
  
    
   
  
    
    
    
    
    
    
   
    
    
  </body>
</html>