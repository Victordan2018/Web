<?php
	
	$conexion = mysqli_connect("localhost","root","1234","electronica");
	//mysqli_select_db("electronica",$conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Altas de productos</title>
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
		if (isset($_POST["accion"])){
			$accion = $_POST["accion"];
			if ($accion == -1){  //es un nuevo registro
				$insert = mysqli_query("INSERT INTO electronica.producto (nombre, descripcion, marca, imagen, categoria, precio ) VALUES ('".$_POST['nombre']."', '".$_POST['descripcion']."', '".$_POST['marca']."', '".$_POST['imagen']."','".$_POST['categoria']."','".$_POST['precio']."')") or die("no fue posible insertar el registro".mysqli_error());
			}
		}
	?>
	<h1 align="center">Altas de productos</h1>
<p>&nbsp;</p>
<center><h2>Productos</h2></center> 
<h2><a href="Index.php">Salir de sesion </a><a href="Actualizar.php">Editar los productos</a>
<a href="Bajas.php">Dar de baja productos</a></h2>
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
	
    <center><h2>Inserta los datos del producto que quieres agregar</h2></center> 
<form action="Altas.php" method="POST">
   	  <input type="hidden" name="accion" value="-1">
		<label for="nombre">Nombre : </label>
		<input type="text" name="nombre" />
		<br><br>
		<label for="Descripcion">Descripcion : </label>
		<input type="text" name="descripcion" />
		<br><br>
		<label for="Marca">Marca : </label>
		<input type="text" name="marca" />
		<br><br>
        <label for="imagen">Imagen : </label>
	  <input type="text" name="imagen" />
		<br><br>
        <label for="Categoria">Categoria : </label>
	  <input type="text" name="categoria" />
		<br><br>
        <label for="Precio">Precio : </label>
	  <input type="text" name="precio" />
		<br><br>
		
<label for="Click">Click Para : </label>
		<input type="submit" value="Crear" />                                														                                <input type="reset" value="Borrar" />
	</form>
</body>
</html>
