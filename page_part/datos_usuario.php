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

function getPerfil()
{
  global $con;
  $ID = $_SESSION['id_cliente'];
  $sql = "SELECT * FROM CLIENTE WHERE id_cliente='$ID'";
  $query = mysqli_query($con,$sql);
  $datos_usuario = mysqli_fetch_row($query);
  return $datos_usuario;
}

