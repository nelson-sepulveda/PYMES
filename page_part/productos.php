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

  $sql = "SELECT * FROM PRODUCTO";

  $query = mysqli_query($con,$sql);

  if($query)
   {
    ?>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre Producto</th>
            <th>Precio unitario</th>
            <th>Descripcion</th>
            <th>Fecha</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
    <?php   
    while($row = mysqli_fetch_row($query))
    {
     if(empty($row))
     {
      ?>
      <div class="alert alert-info" role="alert">
       <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong></strong>
        <?php
        echo "No se encontraron Resultados!";
        ?>
      </div>
 <?php
      break;
    }
    else
    {
 ?>
    <tr>
    <td><?php echo $row[1];?></td> 
    <td><?php echo $row[2]; ?></td>
    <td><?php echo $row[3]; ?></td>
    <td><?php echo $row[4]; ?></td>
    <td>
        <button type="button" id="btnActualizar" data-toggle="modal" data-target="#modalProducto" class="btn btn-info" data-id="<?php echo $row[0];?>" data-nombre="<?php echo $row[1];?>" data-precio="<?php echo $row[2]; ?>" data-descripcion="<?php echo $row[3];?>" data-fecha="<?php echo $row[4];?>"><i class='glyphicon glyphicon-edit'></i> Modificar </button>
        <button type="button" id="btnEliminar" data-toggle="modal" data-target="#deleteProducto"class="btn btn-danger" data-id="<?php echo $row[0];?>"><i class='glyphicon glyphicon-trash'></i>Eliminar</button>
        
      </td>
     </tr>
    <?php
     }
    }
    ?>
     </tbody>
    </table>
    <?php
   }



?>