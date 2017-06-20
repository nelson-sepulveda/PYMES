<div class="modal fade" id="modalProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modifica tu producto</h4>
      </div>
      <div id="data_ajax_producto_up"></div>
      <div class="modal-body">
        <form id="modificaProductoForm" method="post" action="page_part/update_producto.php">
          <div class="modal-body">
          <input type="hidden" name="idproducto" name="idproducto">
              <div class="form-group">
                <label for="codigo" class="control-label">Nombre:</label>
                <input type="text" class="form-control" id="productoname" name="productoname"  placeholder="Nombre Producto">
              </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Precio unitario:</label>
                <input type="text" class="form-control" id="productoprecio" name="productoprecio"  placeholder="Precio Unitario" >
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Descripcion:</label>
                <input type="text" class="form-control" id="productodescripcion" name="productodescripcion"  placeholder="Descripcion" 
                >
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Fecha:</label>
                <input type="text" class="form-control" id="Fecha" name="Fecha"  maxlength="50" placeholder="Fecha Registro" 
                value="<?php echo date("Y-m-d"); ?>" >
            </div>
          </div>  
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" id="update">Actualizar Producto!</button>
          </div>
      </form>
      </div>
    </div>
  </div>
</div>

