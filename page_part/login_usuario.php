<?php 

session_start();

$con=@mysqli_connect('localhost', 'root', '', 'pymes');

if(!$con)
{
  die("imposible conectarse: ".mysqli_error($con));
}
if (@mysqli_connect_errno())
{
  die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
}


$usuario = $_POST['usuario'];
$pass = $_POST['pass'];


$sql = "SELECT email , password FROM CLIENTE WHERE '$usuario'=email AND '$pass'=password";
$query_sql = mysqli_query($con,$sql);
$vec = mysqli_fetch_row($query_sql); 

if($vec==null || count($vec)==0)
{
  echo json_encode(array(
    'login'=>false,
    'error'=>geterror()
  )); 
}
else
{
  echo json_encode(array(
    'login'=>true
  ));
}

function geterror()
{
  return 
  '<div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Error!</strong>
    </div>';
}

