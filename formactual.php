<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
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
<h2>Ingresa los datos que se te piden para actualizar los productos</h2>
<form action="Actualizar.php" method="post" name="act">
  <p>Ingresa el id del producto que quieras actualizar     </p>
  <p>
    <label for="id"></label>
    <input type="text" name="id" id="textfield" />
  </p>
  <p>&nbsp;</p>
  <p>Ingresa el nombre del producto</p>
  <p>
    <label for="nombre"></label>
    <input type="text" name="nombre" id="textfield2" />
  </p>
  <p>Ingresa la descripcion del producto</p>
  <p>
    <label for="descripcion"></label>
    <input type="text" name="descripcion" id="textfield3" />
  </p>
  <p>Ingresa la marca del producto  </p>
  <p>
    <label for="marca"></label>
    <input type="text" name="marca" id="textfield4" />
  </p>
  <p>Ingresa la imagen</p>
  <p>
    <label for="imagen"></label>
    <input type="text" name="imagen" id="textfield5" />
  </p>
  <p>Ingresa la categoria</p>
  <p>
    <label for="categoria"></label>
    <input type="text" name="categoria" id="textfield6" />
  </p>
  <p>Ingresa el precio</p>
  <p>
    <label for="precio"></label>
    <input type="text" name="precio" id="textfield7" />
  </p>
  <p>
    <input type="submit" name="btn" id="button" value="Enviar" />
  </p>


</form>
<p><a href="Altas.php">Dar de alta productos</a></p>
<p><a href="Bajas.php">Dar de baja productos</a></p>
</body>
</html>