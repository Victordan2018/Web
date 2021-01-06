<?php
	/*$server="localhost";
	$username="root";
	$password="";
	$db="electronica";
*/
	//coexion a mysql
$servidor="localhost";
$database="electronica";
$user="root";
$password="";
//conex bad
//mysql_connect
//mysql_select_db
//mysqli_connect
$conexion=mysqli_connect($servidor, $user, $password, $database);
//testing
$banderaconexion=true;
if($conexion){
echo "Conexion realizada </br>";
}else{
echo "Conexiion fallida </br>";
$banderaconexion=false;//la bandera se apaga
}

	
	//$conexion=mysql_connect($server, $username, $password)or die("No se ha podido establecer la conexión");
	//$conexion=mysqli_connect($server, $username, $password, $db);
	//$sdb=mysql_select_db($db, $conexion)or die("La base de datos no existe");
?>