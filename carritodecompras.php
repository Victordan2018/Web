<?php
    session_start();
	include 'conexion.php';
	if(isset($_SESSION['carrito'])){
		if(isset($_GET['id'])){
		$arreglo=$_SESSION['carrito'];
		$encontro=false;
		$numero=0;
		
		for($i=0;$i<count($arreglo);$i++){
			if($arreglo[$i]['Id']==$_GET['id']){
				$encontro=true;
				$numero=$i;
			}
		}
		
		if($encontro==true){
			$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
			$_SESSION['carrito']=$arreglo;
		}else{
		$nombre="";
		$precio=0;
		$imagen="";
		$re=mysqli_query($conexion,"select * from producto where id_producto=".$_GET['id']);
		while($f=mysqli_fetch_array($re)){
			  $nombre=$f['nombre'];
			  $precio=$f['precio'];
			  $imagen=$f['imagen'];
		}
		$datosNuevos=array('Id'=>$_GET['id'],
						'Nombre'=>$nombre,
						'Precio'=>$precio,
						'Imagen'=>$imagen,
						'Cantidad'=>1);
						
		array_push($arreglo, $datosNuevos);
		$_SESSION['carrito']=$arreglo;
		
		}
		}
		
	
	}else{
		if(isset($_GET['id'])){
		$nombre="";
		$precio=0;
		$imagen="";
		$re=mysqli_query($conexion,"select * from producto where id_producto=".$_GET['id']);
		while($f=mysqli_fetch_array($re)){
			  $nombre=$f['nombre'];
			  $precio=$f['precio'];
			  $imagen=$f['imagen'];
		}
		$arreglo[]=array('Id'=>$_GET['id'],
						'Nombre'=>$nombre,
						'Precio'=>$precio,
						'Imagen'=>$imagen,
						'Cantidad'=>1);
						
		$_SESSION['carrito']=$arreglo;
		}
	}
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mi carrito de compras</title>
<link href="../real/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#FF0000">
	<h1 align="center">Mi <img src="img/carrito.png" width="54" height="54" /></h1>

<?php
	$total=0;
	if(isset($_SESSION['carrito'])){
		$datos=$_SESSION['carrito'];
		$total=0;
		for($i=0;$i<count($datos);$i++){
			
		?>
        <div class="producto">
        	<center>
            <img src="./imagenesproductos/<?php echo $datos[$i]['Imagen'];?>"  />
            <span><?php echo $datos[$i]['Nombre']; ?></span><br>
            <span>Precio: <?php echo $datos[$i]['Precio']; ?></span><br>
            <span>Cantidad: <input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"></span><br>
            <span>SubTotal: <?php echo $datos[$i]['Precio']*$datos[$i]['Cantidad']; ?></span><br>
            
            </center>
        </div>
        <?php
		$total=($datos[$i]['Precio']*$datos[$i]['Cantidad'])+$total;
		}
	}else{
	  echo '<center><h2>El carrito de compras está vacío</h2></center>';
	}
	echo '<center><h2>Total: '.$total.' </h2</center>';
	
	
?>

<center><a href="index.php#portfolio">Ver el catalogo</a></center>

</body>
</html>