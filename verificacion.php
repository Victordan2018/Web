<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ya hecho</title>
<style type="text/css">
body,td,th {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	color: #030;
}
body {
	background-color: #FFFFEC;
}
h1 {
	font-size: 36px;
	color: #600;
}
h2 {
	font-size: 24px;
	color: #303;
}
h1,h2,h3,h4,h5,h6 {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}
h3 {
	font-size: 18px;
	color: #C03;
}
</style>
</head>

<body>
<?php
$user1="vittorio";
$contra1="1234";
$user2="miguelangel";
$contra2="lkjhu";
$u1= $_POST['use'];
$c1= $_POST['contra'];
$u2= $_POST['use'];
$c2= $_POST['contra'];
if(($user1==$u1)&&($contra1==$c1)){
?>
<h2>
<a href="Altas.php">Ir a dar de alta productos</a><br/>
<a href="Bajas.php">Ir a dar de baja los productos</a><br/>
<a href="formactual.php">Ir a actualizar productos</a><br/>
</h2>
<?php
}else if(($user2==$u2)&&($contra2==$c2)){
?>
<h2>
<a href="Alta de prod">Ir a dar de alta productos</a><br/>
<a href="Baja de prod">Ir a dar de baja los productos</a><br/>
<a href="formactual.php">Ir a actualizar productos</a><br/>
</h2>
<?php
}else{
echo "tu no eres administrador y te vamos a demandar.... Estamos rastreando tu I.P.";
?>
<h2><a href="Index.php">Regresar a la tienda</a></h2>
<?php
}
?>
</body>
</html>
