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

  $nombre = $_POST['emp_name'];
  $email = $_POST['emp_email'];
  $direccion = $_POST['emp_direccion'];
  $telefono = $_POST['emp_telefono'];
  $ID = $_POST['id_emp'];

  $sql = "UPDATE EMPLEADO SET nombre_empleado='$nombre', direccion='$direccion',telefono='$telefono', email='$email' WHERE id_empleado=$ID";

  $query_up = mysqli_query($con,$sql);
if($query_up)
  {
    $msg[]="La actualizacion se realizo de forma correcta";
  }
  else
  {
    $errors[] ="No se actualizacion los datos";
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
           echo $messages;
          }
        ?>
    </div>
    <?php
  }


?>