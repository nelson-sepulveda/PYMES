<?php

$con=@mysqli_connect('localhost', 'root', '', 'pymes');

  if(!$con)
  {
      die("imposible conectarse: ".mysqli_error($con));
  }
  if (@mysqli_connect_errno())
  {
      die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
  }

  
  $fecha = date("Y-m-d");
  $nombre = $_POST['productoname'];
  $precio = $_POST['productoprecio'];
  $descripcion = $_POST['productodescripcion'];
  $ID = $_POST['idproducto'];  


  $sql = "UPDATE PRODUCTO SET nombre='$nombre',precio_unitario='$precio',descripcion='$descripcion' WHERE id_producto='$ID'";
  

  $query_producto = mysqli_query($con,$sql);


  if($query_producto)
    {
        $msg[]="Se actualizo Correctamente el Producto";
    }
    else
    {
     $errors[]="No se actualizo de forma correcta el producto" . mysqli_error($con);
    }

  if (isset($errors))
  {
    ?>
    <div class="alert alert-danger" role="alert">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Error!</strong>
        <?php
          foreach ($errors as $error)
          {
            echo $error;
          }
        ?>
    </div>
    <?php
  }


 else if (isset($msg)){
    ?>
    <div class="alert alert-success" role="alert">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
       <strong>¡Bien hecho!</strong><br>
        <?php
          foreach ($msg as $messages) {
           echo $messages. "<br>";
          }
        ?>
    </div>
    <?php
  }

