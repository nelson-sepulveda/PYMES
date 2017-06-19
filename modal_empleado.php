<?php
$ID = $_SESSION['id_empleado'];
$usuario = getEmpleado($ID);
?>
<div class="modal fade" id="myModalActualizacionEmpleado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualiza tus datos</h4>
      </div>
      <div id="data_update_ajax_emp_emp"></div>
      <div class="modal-body">
        <form id="actualizacionEmpleado" method="post" action="page_part/actualiza_empleado.php">
          <div class="modal-body">
              <div class="form-group">
                <label for="codigo" class="control-label">Nombre:</label>
                <input type="text" class="form-control" id="user_up_emp" name="user_up_emp"  placeholder="Nombre Empleado" value="<?php printf($usuario[1]); ?>">
              </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Email:</label>
                <input type="text" class="form-control" id="email_up_emp" name="email_up_emp"  placeholder="Email Empleado" value="<?php printf($usuario[5]); ?>">
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Direccion:</label>
                <input type="text" class="form-control" id="direccion_up_emp" name="direccion_up_emp"  placeholder="Direccion Empleado" value="<?php printf($usuario[2]); ?>">
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Telefono:</label>
                <input type="text" class="form-control" id="telefono_up_emp" name="telefono_up_emp"  maxlength="50" placeholder="Telefono Empleado" value="<?php printf($usuario[3]); ?>">
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Contraseña:</label>
                <input type="password" class="form-control" id="password_up_emp" name="password_up_emp"  placeholder="Contraseña" value="<?php printf($usuario[6]); ?>">
            </div>
            <input type="hidden" value="<?php echo $ID; ?>" name="ID_emp">
          </div>  
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" id="update_emp">Actualizar!</button>
          </div>
      </form>
      </div>
    </div>
  </div>
</div>

