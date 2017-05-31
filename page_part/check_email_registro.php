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

    $username = $_REQUEST['username'];
    $query = "SELECT * FROM CLIENTE WHERE email='$username'";
    $results = mysqli_query($con,$query) or die('ok');
    $email_true = mysqli_fetch_row($results);
    $cantidad = count($email_true);

    if($cantidad > 0)
        echo '<div id="Error">Usuario ya existente</div>';
    else
        echo '<div id="Success">Disponible</div>';



?>

