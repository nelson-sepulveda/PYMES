<div class="modal fade" id="modalEmpleado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registro Empleado</h4>
      </div>
      <div id="data_ajax_emp_up"></div>
      <div class="modal-body">
        <form id="modificaEmpleado" method="post" action="page_part/actualiza_empleado.php">
          <div class="modal-body">
          <input type="hidden" name="id_emp" id="id_emp">
              <div class="form-group">
                <label for="codigo" class="control-label">Nombre:</label>
                <input type="text" class="form-control" id="emp_name" name="emp_name"  placeholder="Nombre">
              </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Email:</label>
                <input type="text" class="form-control" id="emp_email" name="emp_email"  placeholder="Email">
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Direccion:</label>
                <input type="text" class="form-control" id="emp_direccion" name="emp_direccion"  placeholder="Direccion " 
                >
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Telefono:</label>
                <input type="text" class="form-control" id="emp_telefono" name="emp_telefono"  maxlength="50" placeholder="Telefono">
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