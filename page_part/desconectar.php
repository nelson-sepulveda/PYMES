<?php

    if($_SESSION['id_cliente'] || $_SESSION)
    { 
      session_destroy();
      header("Location:../index.php");
    }
    else
    {
      header("Location:../index.php");
    }

?>