<?php
  $proveedores = get_proveedores();
?>

<div class="modal fade" id="registroProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registra tu producto</h4>
      </div>
      <div id="data_ajax_producto"></div>
      <div class="modal-body">
        <form id="registroProductoForm" method="post" action="page_part/registro_producto_callback.php">
          <div class="modal-body">
              <div class="form-group">
                <label for="codigo" class="control-label">Nombre:</label>
                <input type="text" class="form-control" id="nameproducto" name="nameproducto"  placeholder="Nombre Producto">
              </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Precio unitario:</label>
                <input type="text" class="form-control" id="precioproducto" name="precioproducto"  placeholder="Precio Unitario" >
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Descripcion:</label>
                <input type="text" class="form-control" id="descripcionproducto" name="descripcionproducto"  placeholder="Descripcion" 
                >
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Proveedor:</label>
                <select class="form-control" name="proveedor[]">
              <?php
                while($row = mysqli_fetch_row($proveedores))
                {
                  ?>
                    <option value="<?php echo $row[0].'-'.$row[1]; ?>"><?php echo $row[1] . ' - '. $row[2]; ?></option>
                  <?php
                }
              ?>
              </select>
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Fecha:</label>
                <input type="text" class="form-control" id="Fecha" name="Fecha"  maxlength="50" placeholder="Fecha Registro" 
                value="<?php echo date("Y-m-d"); ?>" >
            </div>
          </div>  
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" id="update">Rgistrar Producto!</button>
          </div>
      </form>
      </div>
    </div>
  </div>
</div>

