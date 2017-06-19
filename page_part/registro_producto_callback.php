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

  $last = "SELECT MAX(id_producto) FROM producto";
  $query_last = mysqli_query($con,$last);
  $max = mysqli_fetch_row($query_last);
  $suma= (int)$max[0];
  $id_last=$suma+1;

  $fecha = date("Y-m-d");
  $nombre = $_POST['nameproducto'];
  $precio = $_POST['precioproducto'];
  $descripcion = $_POST['descripcionproducto'];
  $proveedor = $_POST['proveedor'];
  $pro = $proveedor[0];
  $split = explode("-",$pro);

  $id_proveedor = $split[0];


  $sql_producto = "INSERT INTO PRODUCTO (id_producto,nombre,precio_unitario,descripcion,fecha) values('$id_last','$nombre','$precio','$descripcion','$fecha')";

  $sql_producto_proveedor = "INSERT INTO PRODUCTO_PROVEEDOR (id_producto,id_proveedor) values('$id_last','$id_proveedor')";

  $query_producto = mysqli_query($con,$sql_producto);
  $query_producto_proveedor = mysqli_query($con,$sql_producto_proveedor);


  if($query_producto && $query_producto_proveedor)
    {
        $msg[]="Se registro Correctamente el Producto";
    }
    else
    {
     $errors[]="No se registro de forma correcta el producto" . mysqli_error($con);
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

