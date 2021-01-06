<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cableado</title>
</head>

<body bgcolor="#33FF99">


                            
    <a href="carritodecompras.php"><img src="img/carrito.png" width="61" height="60" align="right"/></a>                                                
  <h1>Todos los detalles del producto</h1></center>
                            <?php
							  
							  include 'conexion.php';
							  
							  $resultado=mysqli_query($conexion,"select * from producto where id_producto=".$_GET['id'])or die(mysqli_error());
							  while($f=mysqli_fetch_array($resultado)){
							
							?>
                            
                            <div>
                              <center>
                              <img src="imagenesproductos/<?php echo $f['imagen']; ?>" width="500px" heighth="400px" ref><br>
                              <h2><span>Nombre <?php echo $f['nombre']; ?></span><br>
                              <span>Descripcion: <?php echo $f['descripcion']; ?></span><br>
                              <span>Precio: <?php echo $f['precio']; ?></span><br>
                              <a href="./carritodecompras.php?id=<?php echo $f['id_producto']; ?>">Añadir al carrito de compras</a></h2>
                              </center>
</div>
                            
                            <?php
                              }       
                            ?>
                           

                            
</body>
</html>