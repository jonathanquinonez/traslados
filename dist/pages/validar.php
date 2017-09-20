<?php

require"conexion.php";

$username = $_POST['email'];
$password = $_POST['password'];
if (empty($username) || empty($password)) { 
    header("location: index.php?res=Error123");
    exit();
}

if (isset($_POST["Entrar"])) {


    $sql = "SELECT correo_electronico,password FROM Usuarios WHERE correo_electronico='" . $username . "'";
    

    $res = mysql_query($sql)or die("Error en: $sql: " . mysql_error());
    

    if ($login = mysql_fetch_array($res)) {
        if ($login['correo_electronico'] == $username && $login['password'] == $password) {
            session_start();
            $_SESSION['username'] = $login['correo_electronico'];
            header("location: menu.php");
            EXIT();
        } else {
            header("Location: index.php?res=Error1");
            EXIT();
        }
    }else {
            header("Location: index.php?res=Error2");
            EXIT();
        }
}else{
   header("Location: index.php?res=Error3"); 
    EXIT();
}
?>

