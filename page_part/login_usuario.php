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


$sql = "SELECT  id_cliente , nombre_cliente, email , password FROM CLIENTE WHERE '$usuario'=email AND '$pass'=password";
$sql_admin = "SELECT id_empleado,nombre_empleado,id_tipo,email,pass FROM EMPLEADO WHERE '$usuario'=email and '$pass'=pass";

$query_empleado = mysqli_query($con,$sql_admin);
$vec_emp = mysqli_fetch_row($query_empleado);

$query_cliente = mysqli_query($con,$sql);
$vec = mysqli_fetch_row($query_cliente); 



if(count($vec_emp)!=0)
{
   $id_emp = $vec_emp[0];
   $nombre_emp = $vec_emp[1];
   $id_tipo = $vec_emp[2];
   $email = $vec_emp[3];
   $pass = $vec_emp[4];
   // Adminstrador
   if($id_tipo==1)
   {
     $_SESSION['id_admin']=$id_emp;
     $_SESSION['nombre_admin']=$nombre_emp;
     echo json_encode(
       array(
        'id_tipo'=>1,
        'login'=>true
       ));
   }
   // Gerente
   else if($id_tipo==2)
   {
     $_SESSION['id_gerente']=$id_emp;
     $_SESSION['nombre_gerente']=$nombre_emp;
     echo json_encode(array(
       'id_tipo'=>2,
       'login'=>true
     ));
   }
   // empleado - ya esta la pagina
   else if($id_tipo==3)
   {
     $_SESSION['id_empleado']=$id_emp;
     $_SESSION['nombre_empleado']=$nombre_emp;
    echo json_encode(array(
      'id_tipo'=>3,
      'login'=>true
    ));
   }
   //contador
   else if($id_tipo==4)
   {
     $_SESSION['id_contador']=$id_emp;
     $_SESSION['nombre_contador']=$nombre_emp;
     echo json_encode(
       array(
         'id_tipo'=>4,
         'login'=>true
       )
     );
   }
   else
   {
     echo json_encode(array(
       'error'=>geterror()
     ));
   }
}

else if($vec!=null || count($vec)!=0)
{
  $_SESSION['id_cliente'] = $vec[0];
  $_SESSION['nombre_cliente'] = $vec[1];
  echo json_encode(array(
    'id_tipo'=>0,
    'login'=>true
  ));
}
else
{
  echo json_encode(array(
    'login'=>false,
    'error'=>geterror()
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

