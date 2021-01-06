<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Iluminación</title>
<link href="../real/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#FFFF33">
<center>
                            <h1>BUSQUEDA DE PRODUCTOS DE ILUMINACION</h1>
                            <form action="iluminacion.php" method="post">
               <input name="producto" type="text">
                            <button type="button" class="btn btn-primary">Buscar</button><br>
                            </form>
                            <?php
						   include 'conexion.php'; 
						   if(isset ($_POST['producto'])){
                           $buscar=$_POST['producto'];
   
    $bsql="SELECT * FROM producto WHERE nombre='$buscar'";
    $resultado=mysqli_query($conexion,$bsql);
    if($row=mysqli_fetch_array($resultado)){
      ?>
     <table width="568" height="102" border='3'>
     
      <tr>
        <td width="17" height="37">ID</td>
        <td width="51">Nombre</td>
        <td width="72">Descripción</td>
        <td width="40">Marca</td>
        <td width="59">Categoría</td>
        <td width="39">Precio</td>
        <td width="240"></td>
       </tr>
     
      <?php
      mysqli_field_seek($resultado,0);

      while($field = mysqli_fetch_field($resultado)){
        }      
     
      do{
		  ?>
            <td height="53"><?php echo $row['id_producto']; ?>    </td>
            <td><?php echo $row['nombre']; ?> </td>
            <td><?php echo $row['descripcion'];    ?></td>
            <td><?php echo $row['marca'];  ?></td>
            <td><?php echo $row['categoria'];   ?></td>
            <td><?php echo $row['precio'];     ?></td>
            <td>              
            <a href="./detalles.php?id=<?php echo $row['id_producto']; ?>">Ver</a>
                            
              <?php       
                            ?></td>
            
             
            <?php

      }while ($row= mysqli_fetch_array($resultado));
            ?>
			 </table>
			 <?php
       
    }else{
         echo "<p>no se encontro ningún registro!</p>\n";
      }


}

?>
                            
                            
                            
                            
                            
                           <h1>TODOS LOS PRODUCTOS DE ILUMINACION</h1></center>
                            <?php
							
							  
							  $resultado=mysqli_query($conexion,"select * from producto where categoria like 'iluminacion'")or die(mysqli_error());
							  while($f=mysqli_fetch_array($resultado)){
							
							?>
                            
                            <div class="producto">
                              <center>
                              <img src="imagenesproductos/<?php echo $f['imagen']; ?>" width="100px" heighth="50px" ref><br>
                              <span><?php echo $f['nombre']; ?></span><br>
                              <a href="./detalles.php?id=<?php echo $f['id_producto']; ?>">Ver</a>
                              </center>
                            </div>
                            
                            <?php
                              }       
                            ?>
                           

                            
</body>
</html>