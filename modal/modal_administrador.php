<!-- Modal para actualizar los datos -->
<?php
$usuario = getAdministrador();
?>
<div class="modal fade" id="actualizacion_admin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualiza tus datos</h4>
      </div>
      <div id="data_update_ajax_am"></div>
      <div class="modal-body">
        <form id="actualizacionAdmin" method="post" action="page_part/actualiza_admin.php">
          <div class="modal-body">
             <input type="hidden" name="id_admon" id="id_admon" value="<?php echo $_SESSION['id_admin']; ?>"> 
              <div class="form-group">
                <label for="codigo" class="control-label">Nombre:</label>
                <input type="text" class="form-control" id="name_admin" name="name_admin"  placeholder="Nombre Cliente" value="<?php printf($usuario[1]); ?>">
              </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Email:</label>
                <input type="text" class="form-control" id="email_admin" name="email_admin"  placeholder="Email Cliente" value="<?php printf($usuario[5]); ?>">
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Direccion:</label>
                <input type="text" class="form-control" id="direccion_admin" name="direccion_admin"  placeholder="Direccion Cliente" 
                value="<?php printf($usuario[2]); ?>">
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Telefono:</label>
                <input type="text" class="form-control" id="telefono_admin" name="telefono_admin"  maxlength="50" placeholder="Telefono Cliente" value="<?php printf($usuario[3]); ?>">
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Contraseña:</label>
                <input type="text" class="form-control" id="password_admin" name="password_admin"  placeholder="Contraseña" value="<?php printf($usuario[6]); ?>">
            </div>
            
          </div>  
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" id="update">Actualizar!</button>
          </div>
      </form>
      </div>
    </div>
  </div>
</div>

