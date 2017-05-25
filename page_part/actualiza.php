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

  $nombre = $_POST['user_up']; 
  $email = $_POST['email_up'];
  $direccion = $_POST['direccion_up'];
  $telefono = $_POST['telefono_up'];
  $cedula = $_POST['cedula_up'];
  $pass_up = $_POST['password_up'];

  $sql = "UPDATE CLIENTE SET id_cliente='$cedula' , nombre_cliente='$nombre', telefono='$telefono',direccion='$direccion', cedula='$cedula', password='$pass_up', email='$email' WHERE id_cliente='$cedula'";

  $query = mysqli_query($con,$sql);
  
  if($query)
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

