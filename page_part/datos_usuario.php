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

function getEmpleado($ID)
{
  global $con;
  //$ID = $_SESSION['id_admin'];
  $sql = "SELECT  * FROM EMPLEADO WHERE id_empleado='$ID'";
  $query = mysqli_query($con , $sql);
  $datos_admin = mysqli_fetch_row($query);
  return $datos_admin;
}

function getAdministrador()
{
  global $con;
  $ID = $_SESSION['id_admin'];
  $sql = "SELECT  * FROM EMPLEADO WHERE id_empleado='$ID'";
  $query = mysqli_query($con , $sql);
  $datos_admin = mysqli_fetch_row($query);
  return $datos_admin;
}

function get_proveedores()
{
  global $con;
  $sql = "SELECT * FROM PROVEEDOR";
  $query_pro = mysqli_query($con,$sql);
  return $query_pro;
}