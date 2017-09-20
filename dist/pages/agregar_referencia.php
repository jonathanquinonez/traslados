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
    <meta name="msapplication-TileImage" content="../ima.ges/favicon/favicon-32x32.png">
    <meta name="theme-color" content="#2a56c6">
    <!-- ============================-->
    <!-- TITLE-->
    <!-- ============================-->
    <title>Agregar Referencia</title>
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
      <div class="horizontal-navigations navbar-fixed full-top-nav">
        <nav class="hide-on-med-and-down">
          <div class="nav-wrapper">
            <ul class="iconized left">
              <li class="menu-item"><a class="menu-link waves-effect waves-set" href="index.php"><i class="material-icons menu-icon left">dashboard</i><span class="menu-span">Dashboard</span></a></li>
              
              
              <li class="menu-item active"><a class="active open_hor_sub menu-link waves-effect waves-set" href="#"><i class="material-icons menu-icon left">format_paint</i><span class="menu-span">Components</span><i class="material-icons menu-icon right">arrow_drop_down</i></a>
                <div class="hor_sub full hide">
                  
                  
               
                  <ul class="collection">
                    
                   
               
                
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="other-verticalSections">
        <!-- ============================-->
        <!-- THEME SETTING-->
        <!-- ============================-->
        <div class="themeSetting z-depth-1" id="themeOptions"><a class="btn btn-small toggleThemesetting" href="#"><i class="material-icons">settings</i></a>
          <div class="settings">
            <div class="navigationSetting">
              <h2>Navigation Type</h2>
              <div class="navoptions row no-mrpd">
                <p class="navopt s6 col left">
                  <input class="rb-teal" type="radio" name="theme_nav" id="theme_nav_vertical" data-identfier="theme_nav" data-type="vertical">
                  <label class="theme-setting-sv-label" for="theme_nav_vertical"><img class="theme-svg" src="../images/theme-svg/V49_opt3.svg" alt=""></label>
                </p>
                <p class="navopt s6 col hide-on-med-and-down right">
                  <input class="rb-teal" type="radio" name="theme_nav" id="theme_nav_horizontal" data-identfier="theme_nav" data-type="horizontal">
                  <label class="theme-setting-sv-label" for="theme_nav_horizontal"> <img class="theme-svg" src="../images/theme-svg/V48_opt3.svg" alt=""></label>
                </p>
              </div>
              <h2>Navigation Options</h2>
              <div class="navoptions row no-mrpd">
                <p class="navopt s6 col left">
                  <input class="rb-teal" type="radio" name="theme_nav_opts" id="navOpts_default" data-identfier="theme_nav_opts" data-type="default">
                  <label class="theme-setting-sv-label" for="navOpts_default"> <img class="theme-svg horz-set-svg animated" src="../images/theme-svg/HD.svg" alt=""><img class="theme-svg vert-set-svg animated" src="../images/theme-svg/V.svg" alt=""></label>
                </p>
                <p class="navopt s6 col right">
                  <input class="rb-teal" type="radio" name="theme_nav_opts" id="navOpts_iconized" data-identfier="theme_nav_opts" data-type="iconized">
                  <label class="theme-setting-sv-label" for="navOpts_iconized"><img class="theme-svg vert-set-svg animated" src="../images/theme-svg/VI.svg" alt=""><img class="theme-svg horz-set-svg animated" src="../images/theme-svg/H.svg" alt=""></label>
                </p>
              </div>
            </div>
          </div>
        </div>
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
            <div class="col s12" id="rsb-notifications">
              <ul class="notification-list collection" id="psNotificationList">
                <li class="collection-item notification-item waves-effect waves-set">
                  <!-- REDIRECTION TO User-Profile--><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300g.jpg" alt=""></a>
                  <!-- Redirection to msg/chat--><a class="notify-content" href="#"><span class="title">Amazon<i class="material-icons notify-type blue-text">add_shopping_cart</i></span>
                    <div class="notify-desc">
                       Envato account subsciption is added to your cart.</div><span class="notify-time">5 Minutes ago.</span></a>
                </li>
                <li class="collection-item notification-item waves-effect waves-set">
                  <!-- REDIRECTION TO User-Profile--><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300g.jpg" alt=""></a>
                  <!-- Redirection to msg/chat--><a class="notify-content" href="#"><span class="title">Jack Jordan<i class="material-icons notify-type green-text">attach_money</i></span>
                    <div class="notify-desc">
                       Payment received from John Doe for theme.</div><span class="notify-time">30 Minutes ago.</span></a>
                </li>
                <li class="collection-item notification-item waves-effect waves-set">
                  <!-- REDIRECTION TO User-Profile--><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300t.jpg" alt=""></a>
                  <!-- Redirection to msg/chat--><a class="notify-content" href="#"><span class="title">Jenny Jordan<i class="material-icons notify-type blue-text">poll</i></span>
                    <div class="notify-desc">
                       Esi has polled you.</div><span class="notify-time">35 Minutes ago.</span></a>
                </li>
                <li class="collection-item notification-item waves-effect waves-set">
                  <!-- REDIRECTION TO User-Profile--><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300t.jpg" alt=""><span class="notify-status offline"></span></a>
                  <!-- Redirection to msg/chat--><a class="notify-content" href="#"><span class="title">Selena Morris<i class="material-icons notify-type purple-text">share</i></span>
                    <div class="notify-desc">
                       Jeo has shared documents with you.</div><span class="notify-time">38 Minutes ago.</span></a>
                </li>
                <li class="collection-item notification-item waves-effect waves-set">
                  <!-- REDIRECTION TO User-Profile--><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300g.jpg" alt=""></a>
                  <!-- Redirection to msg/chat--><a class="notify-content" href="#"><span class="title">Jessica<i class="material-icons notify-type orange-text">notifications</i></span>
                    <div class="notify-desc">
                       Reminder to pay bill.</div><span class="notify-time">42 Minutes ago.</span></a>
                </li>
                <li class="collection-item notification-item waves-effect waves-set">
                  <!-- REDIRECTION TO User-Profile--><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300g.jpg" alt=""></a>
                  <!-- Redirection to msg/chat--><a class="notify-content" href="#"><span class="title">Mira Dellon<i class="material-icons notify-type yellow-text">attachment</i></span>
                    <div class="notify-desc">
                       You have received documents from Oghie.</div><span class="notify-time">49 Minutes ago.</span></a>
                </li>
                <li class="collection-item notification-item waves-effect waves-set"><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300t.jpg" alt=""></a><a class="notify-content" href="#"><span class="title">Evi Willson<i class="material-icons notify-type amber-text">message</i></span>
                    <div class="notify-desc">
                       Review and share Envato new products.</div><span class="notify-time">53 Minutes ago.</span></a></li>
                <li class="collection-item notification-item waves-effect waves-set"><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300g.jpg" alt=""></a><a class="notify-content" href="#"><span class="title">Anisi Ojior<i class="material-icons notify-type red-text">battery_alert</i></span>
                    <div class="notify-desc">
                       10% battery remains.</div><span class="notify-time">54 Minutes ago.</span></a></li>
                <li class="collection-item notification-item waves-effect waves-set"><a class="notify-content full" href="#"><span class="title">Macbook<i class="material-icons notify-type cyan-text">network_wifi</i></span>
                    <div class="notify-desc">
                       Thoriseum network is connected.</div><span class="notify-time">2 Hours ago.</span></a></li>
                <li class="collection-item notification-item waves-effect waves-set"><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300t.jpg" alt=""></a><a class="notify-content" href="#"><span class="title">Macbook<i class="material-icons notify-type blue-text">wb_cloudy</i></span>
                    <div class="notify-desc">
                       Weather is cloudy.</div><span class="notify-time">2 Hours 30 Minutes ago.</span></a></li>
                <li class="collection-item notification-item waves-effect waves-set"><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300g.jpg" alt=""></a><a class="notify-content" href="#"><span class="title">Canon Printer<i class="material-icons notify-type red-text">print</i></span>
                    <div class="notify-desc">
                       Your Request document is not printed.</div><span class="notify-time">3 Hours ago.</span></a></li>
                <li class="collection-item notification-item waves-effect waves-set">
                  <!-- REDIRECTION TO User-Profile--><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300g.jpg" alt=""></a>
                  <!-- Redirection to msg/chat--><a class="notify-content" href="#"><span class="title">Apple<i class="material-icons notify-type blue-text">system_update_alt</i></span>
                    <div class="notify-desc">
                       New updates are ready to install.</div><span class="notify-time">3 Hours  5 Minutes ago.</span></a>
                </li>
                <li class="collection-item notification-item waves-effect waves-set">
                  <!-- REDIRECTION TO User-Profile--><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300g.jpg" alt=""></a>
                  <!-- Redirection to msg/chat--><a class="notify-content" href="#"><span class="title">Jack Jordan<i class="material-icons notify-type green-text">file_download</i></span>
                    <div class="notify-desc">
                       File download complete.</div><span class="notify-time">3 Hours  8 Minutes ago.</span></a>
                </li>
              </ul>
              <div class="footer"><a class="center tooltipped" href="#" data-position="top" data-tooltip="See all notifications"><i class="material-icons small">more_horiz</i></a></div>
            </div>
            <div class="col s12" id="rsb-tasklist">
              <div class="tab-notelist" id="psTabNotelist">
                <p>
                  <input type="checkbox" id="task1">
                  <label for="task1">Bring some milk</label>
                </p>
                <p>
                  <input type="checkbox" id="task2">
                  <label for="task2">Promote envato</label>
                </p>
                <p>
                  <input type="checkbox" id="task3">
                  <label for="task3">Make WP theme and submit for review</label>
                </p>
                <p>
                  <input type="checkbox" id="task4">
                  <label for="task4">Read atricle of Jeffrey. He has published a lots of tutorials for VueJS and Laravel 5.2. I want to learn unit-testing.</label>
                </p>
              </div>
              <div class="notes-footer"><a class="tooltipped left waves-effect waves-set" href="#" data-position="top" data-tooltip="Clear selected"><i class="material-icons small">delete</i></a><a class="tooltipped right waves-effect waves-set" href="#" data-position="top" data-tooltip="Add new task"><i class="material-icons small">add</i></a></div>
            </div>
            <div class="col s12" id="rsb-shortcuts">
              <ul class="tab-shortcut collection" id="psTabShortcut">
                <li class="collection-item waves-effect waves-set"><a class="shortcut-aItem" href="#"><i class="material-icons blue-text">photo_library</i><span class="shortcut-name">Gallary</span></a></li>
                <li class="collection-item waves-effect waves-set"><a class="shortcut-aItem" href="#"><i class="material-icons orange-text">mail</i><span class="shortcut-name">Mail</span></a></li>
                <li class="collection-item waves-effect waves-set"><a class="shortcut-aItem" href="#"><i class="material-icons yellow-text">file_download</i><span class="shortcut-name">Downloads</span></a></li>
                <li class="collection-item waves-effect waves-set"><a class="shortcut-aItem" href="#"><i class="material-icons green-text">event</i><span class="shortcut-name">Events</span></a></li>
                <li class="collection-item waves-effect waves-set"><a class="shortcut-aItem" href="#"><i class="material-icons purple-text">contacts</i><span class="shortcut-name">Contacts</span></a></li>
                <li class="collection-item waves-effect waves-set"><a class="shortcut-aItem" href="#"><i class="material-icons cyan-text">settings</i><span class="shortcut-name">Settings</span></a></li>
                <li class="collection-item waves-effect waves-set"><a class="shortcut-aItem" href="#"><i class="material-icons amber-text">lock</i><span class="shortcut-name">Lock Screen</span></a></li>
                <li class="collection-item waves-effect waves-set"><a class="shortcut-aItem" href="#"><i class="material-icons red-text">power_settings_new</i><span class="shortcut-name">Logout</span></a></li>
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
            <h2>Agregar Referencia</h2>
          </div>
          <div class="page-options"><a class="dropdown-button page-opt-dropBtn btn-floating waves-effect waves-set setWave" href="#" data-activates="generalDropDown" data-beloworigin="true" data-alignment="right" data-position="bottom" data-constrainwidth="false" data-delay="50" data-gutter="25"><i class="material-icons">perm_data_setting</i></a><a class="waves-effect waves-set page-opt-dropBtn setWave btn-floating" href="#"><i class="material-icons">chat_bubble_outline</i></a></div>
        </div>
        <!-- ============================-->
        <!-- breadcrumb-->
        <!-- ============================-->
        
      </div>
      <!-- ============================-->
      <!-- Main container-->
      <!-- ============================-->
      <div class="main-container">
        <!-- Basic Text Inputs			-->
       
        <!-- Select-->
        <div class="row">
          
         
          <form id="form" >
              
              
            <div class="card-panel">
              <!-- Basic Selects-->
              <div>
              <div class="row box-title">
                <div class="col s6">
                  <h5 class="content-headline">Referencia</h5>
                  
                </div>
                <div class="col s6">
                  <h5 class="content-headline">Colección</h5>
                  
                </div>
              </div>

              <div class="row">
                <div class="input-field col s6">
                    
                    <input type="number" id="maxvalue"  placeholder="ejemplo: 9845">
                    <label for="maxvalue" class="active">Escribir numero Ref#</label>
                 
                
                </div>
                
                <div class="input-field col s6">
                    
                  <select class="basic-select" name="selecter" id="single-select1">
                      <option value="" disabled selected>Seleccionar la Coleccion</option>
                      
                    <?php
                    require"conexion.php";
                    $sql3 = "select * from Coleccion";
                        $res3 = mysql_query($sql3)or die("Error en: $sql3: " . mysql_error());
                        mysql_query("SET NAMES 'utf8'");
                       while ($fila3 = mysql_fetch_Array($res3))
                                {   
                                    
                                echo "<option value=\"".$fila3['id']."\">".$fila3['nombre']."</option>";
                                
                                    
                                }
                    
                    ?>
                    
                    
                  
                  </select>
                  <label for="single-select1">Buscar Coleccion</label>
                </div>
                
              </div>
              
               <div class="row box-title">
                <div class="col s6">
                  <h5 class="content-headline">Tipo Corte</h5>
                  
                </div>
                <div class="col s6">
                  <h5 class="content-headline">Marca</h5>
                  
                </div>
              </div>
              </div>
             

              <div class="row">
                <div class="input-field col s6">
                    
                    <select class="basic-select" name="selecter" id="single-select1">
                    <option value="" disabled selected>Seleccionar El tipo de corte</option>
                    <?php
                    require"conexion.php";
                    $sql4 = "select * from tipo_corte";
                        $res4 = mysql_query($sql4)or die("Error en: $sql4: " . mysql_error());
                        mysql_query("SET NAMES 'utf8'");
                       while ($fila4 = mysql_fetch_Array($res4))
                                {   
                                    
                                echo "<option value=\"".$fila4['id']."\">".$fila4['nombre']."</option>";
                                
                                    
                                }
                    
                    ?>
                  </select>
                    <label for="maxvalue" class="active">Buscar Tipo de Corte</label>
                 
                
                </div>
                
                <div class="input-field col s6">
                  <select class="basic-select" name="selecter" id="single-select1">
                    <option value="" disabled selected>Seleccionar la Marca</option>
                    <?php
                    require"conexion.php";
                    $sql4 = "select * from Marca";
                        $res4 = mysql_query($sql4)or die("Error en: $sql4: " . mysql_error());
                        mysql_query("SET NAMES 'utf8'");
                       while ($fila4 = mysql_fetch_Array($res4))
                                {   
                                    
                                echo "<option value=\"".$fila4['id']."\">".$fila4['nombre']."</option>";
                                
                                    
                                }
                    
                    ?>
                  </select>
                  <label for="single-select1">Buscar Marca</label>
                </div>
                
              </div>

           


              <div class="row box-title">
                <div class="col s4">
                  <h5 class="content-headline">Confeccionista</h5>
                  
                </div>
                
                

              <div class="row">
                <div class="input-field col s12">
                  <select class="basic-select" name="selecter" id="single-select1">
                    <option value="" disabled selected>Seleccionar Confeccionista</option>
                    <?php
                    require"conexion.php";
                        $sql4 = "select * from  Confeccionista";
                        $res4 = mysql_query($sql4)or die("Error en: $sql4: " . mysql_error());
                        mysql_query("SET NAMES 'utf8'");
                       while ($fila4 = mysql_fetch_Array($res4))
                                {   
                                    
                                echo "<option value=\"".$fila4['id']."\">".$fila4['nombres']." ".$fila4['apellidos']."</option>";
                                
                                    
                                }
                    
                    ?>
                  </select>
                  <label for="single-select1">Buscar Confeccionista</label>
                </div>
                <div class="col s6">
                  <h5 class="content-headline">Talla</h5>
                  
                </div>
                
                <div class="col s6">
                  <h5 class="content-headline">Cantidad</h5>
                  
                </div>
              </div>
                <div class="input-field col s6">
                   
                    <input type="number" id="maxvalue"  placeholder="ejemplo: 9845">
                    <label for="maxvalue" class="active">Escribir Numero de talla</label>
                  
                </div>
                <div class="input-field col s6">
                    
                    <input type="number" id="maxvalue"  placeholder="ejemplo: 2000">
                    <label for="maxvalue" class="active">Escribir La Cantidad</label>
                 
                
                </div>

              </div>
              <div class="row">
               <div class="row box-title">
                
              </div>
           <html>
    <body>
  
    
                    <button class="btn waves-effect waves-light" type="submit" name="action">Crear
            		<i class="material-icons right">send</i>
            	</button>

              </div>
              
              
              
              
            </div>
                             
          </form>
       <!-- <input type="submit" id="btn">
          
            <script>

        $("#btn").addEventListener("click",function(){
        var element = document.createElement("Input");
        element.setAttribute("type","number");
        element.setAttribute("placeholder","01");
        element.setAttribute("id","maxvalue");
        element.setAttribute("name","tallas[]"); 
        element.setAttribute("class","input-field col s6");
        
      
        
        var div = document.createElement("div");
       
         div.appendChild(element);
         document.body.appendChild(div);
        
        
        })
        
        function $(selector){
        return document.querySelector(selector);
        }
        </script> 

-->

        </div>

      



    
         
        <!-- Files-->
       
        <!-- FORM HELPER-->
       
      </div>
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
    <script type="text/javascript" src="../js/all.js"></script>
    <script>
      $(document).ready(function(){
      	$(".basic-select").material_select();
      });
    </script>
    
    
    
  

  </body>
</html>