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

      $nombre = $_POST['user'];
      $email = $_POST['email'];
      $direccion = $_POST['direccion'];
      $telefono = $_POST['telefono'];
      $cedula = $_POST['cedula'];
      $pass = $_POST['password'];


      $sql = "INSERT INTO CLIENTE(id_cliente,nombre_cliente,telefono,direccion,cedula,password,email) VALUES('$cedula','$nombre','$telefono','$direccion','$cedula','$pass','$email')";

      $query = mysqli_query($con , $sql);

      if($query)
      {
        $msg[]="Se registro Correctamente";
      }
      else
      {
        $errors[]="No se registro de forma correcta" . mysqli_error($con);
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