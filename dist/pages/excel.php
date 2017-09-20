<?php 
$excel=$_POST['export']; 
header("Content-type: application/vnd.ms-excel"); 
header("Content-disposition: attachment; filename=tablatraslados.xls"); 

print $excel; 
exit; 
?>