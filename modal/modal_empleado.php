<div class="modal fade" id="registroEmp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registro Empleado</h4>
      </div>
      <div id="data_ajax_emp"></div>
      <div class="modal-body">
        <form id="registroEmpleado" method="post" action="page_part/registro_emp.php">
          <div class="modal-body">
              <div class="form-group">
                <label for="codigo" class="control-label">Nombre:</label>
                <input type="text" class="form-control" id="name_emp" name="name_emp"  placeholder="Nombre">
              </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Email:</label>
                <input type="text" class="form-control" id="email_emp" name="email_emp"  placeholder="Email">
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Direccion:</label>
                <input type="text" class="form-control" id="direccion_emp" name="direccion_emp"  placeholder="Direccion " 
                >
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Telefono:</label>
                <input type="text" class="form-control" id="telefono_emp" name="telefono_emp"  maxlength="50" placeholder="Telefono">
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