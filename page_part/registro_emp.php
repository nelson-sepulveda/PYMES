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

  $MAX = "SELECT MAX(ID_EMPLEADO) FROM EMPLEADO";
  $query_max = mysqli_query($con,$MAX);
  $max = mysqli_fetch_row($query_max);
  $valor = (int)$max[0];
  $id_last = $valor+1;

 $nombre = $_POST['name_emp'];
 $email = $_POST['email_emp'];
 $dire = $_POST['direccion_emp'];
 $telefono = $_POST['telefono_emp'];

 $sql = "INSERT INTO EMPLEADO (id_empleado,nombre_empleado,direccion,telefono,id_tipo,email,pass) values('$id_last','$nombre','$dire','$telefono',3,'$email','$telefono')";

 $query_insert = mysqli_query($con,$sql);

 if($query_insert)
  {
    $msg[]="Se registro de forma correcta el empleado, su contraseña sera enviada por correo electronico donde esta es su numero telefonico";
  }
  else
  {
    $errors[] ="No se registro de forma correcta el empleado". mysqli_error($con);
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