<?php

       $user = "labcowork_bless";
        $password = "123456789";
        $dbname = "labcowork_bless";
        $host = "127.0.0.1";

$link = mysql_connect($host, $user, $password)  or die('No se pudo conectar: ' . mysql_error());

mysql_select_db($dbname) or die('No se pudo seleccionar la base de datos');


?>