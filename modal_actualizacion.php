<!-- Modal para actualizar los datos -->
<?php
$usuario = getPerfil();
?>
<div class="modal fade" id="myModalActualizacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualiza tus datos</h4>
      </div>
      <div id="data_update_ajax"></div>
      <div class="modal-body">
        <form id="actualizacionCliente" method="post" action="page_part/actualiza.php">
          <div class="modal-body">
              <div class="form-group">
                <label for="codigo" class="control-label">Nombre:</label>
                <input type="text" class="form-control" id="user_up" name="user_up"  placeholder="Nombre Cliente" value="<?php printf($usuario[1]); ?>">
              </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Email:</label>
                <input type="text" class="form-control" id="email_up" name="email_up"  placeholder="Email Cliente" value="<?php printf($usuario[6]); ?>">
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Direccion:</label>
                <input type="text" class="form-control" id="direccion_up" name="direccion_up"  placeholder="Direccion Cliente" value="<?php printf($usuario[3]); ?>">
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Telefono:</label>
                <input type="text" class="form-control" id="telefono_up" name="telefono_up"  maxlength="50" placeholder="Telefono Cliente" value="<?php printf($usuario[2]); ?>">
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Cedula:</label>
                <input type="text" class="form-control" id="cedula_up" name="cedula_up"  placeholder="Cedula" value="<?php printf($usuario[4]); ?>">
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Contraseña:</label>
                <input type="password" class="form-control" id="password_up" name="password_up"  placeholder="Contraseña" value="<?php printf($usuario[5]); ?>">
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

