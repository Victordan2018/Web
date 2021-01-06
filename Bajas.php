<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include 'conexion.php';

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Baja de productos</title>
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
<center>
<form action="Bajas.php" method="post" name="borrar">
<h2>Inserta el nombre del producto que quiera eliminar</h2>
<input name="nom" type="text" value="" />

<input type="submit" name="hj" id="btn" value="Borrar" />
</form>
</center> 

<p>
  <?php
//
 if(isset ($_POST['nom'])){
$borrar=$_POST['nom'];
    $resultado=mysqli_query($conexion,"delete from producto where id_producto='$borrar'");
 }
 ?>
</p>
<h2><a href="Index.php">Salir de sesion </a><a href="Altas.php">Dar de alta productos</a>
<a href="Actualizar.php">Editar productos</a></h2>
<center><h2>Productos</h2></center> 
 	<table width="100%" border="2">
		<thead>
			<tr>
				<th ><h2>Id_Prod</h2></th>
				<th ><h2>Nombre</h2></th>
				<th ><h2>Descricion</h2></th>
				<th ><h2>Marca</h2></th>
				<th ><h2>Imagen</h2></th>
                <th ><h2>Categoria</h2></th>
                <th ><h2>Precio</h2></th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$can = mysqli_query($conexion,"SELECT * FROM producto ORDER BY id_producto");
				while($dato=mysqli_fetch_array($can)){
			?>
            <tr>
				<td><?php echo $dato['id_producto']; ?></td>
				<td><?php echo $dato['nombre']; ?></td>
				<td><?php echo $dato['descripcion']; ?></td>
				<td><?php echo $dato['marca']; ?></td>
				<td><?php echo $dato['imagen']; ?></td>
				<td><?php echo $dato['categoria']; ?></td>
                <td><?php echo $dato['precio']; ?></td>
             
			</tr>
			<?php } ?>
		</tbody>
</table>
 
</body>
</html>