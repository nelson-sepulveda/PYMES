<!-- Modal Inicio Sesion-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Inicio Sesion</h4>
      </div>
      <div class="modal-body">
        <form id="loginData" method="post" action="">
          <div class="modal-body">
              <div class="form-group">
                <label for="codigo" class="control-label">Email:</label>
                <input type="text" class="form-control" id="usuario" name="usuario"  maxlength="8" placeholder="Digite su Email">
              </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Contraseña:</label>
                <input type="text" class="form-control" id="pass" name="pass"  maxlength="50" placeholder="Digite su contraseña">
            </div>
          </div>  
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" id="login">Ingresar!</button>
          </div>
      </form>
      </div>
    </div>
  </div>
</div>


<!-- Registro de clientes -->
<div class="modal fade" id="myModalRegistro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registrate</h4>
      </div>
      <div id="success"></div>
      <div class="modal-body">
        <form id="registroCliente" method="post" action="registroCliente.php">
          <div class="modal-body">
              <div class="form-group">
                <label for="codigo" class="control-label">Nombre:</label>
                <input type="text" class="form-control" id="user" name="user"  maxlength="8" placeholder="Nombre Cliente">
              </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Email:</label>
                <input type="text" class="form-control" id="email" name="email"  maxlength="50" placeholder="Email Cliente">
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Direccion:</label>
                <input type="text" class="form-control" id="direccion" name="direccion"  maxlength="50" placeholder="Direccion Cliente">
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Telefono:</label>
                <input type="text" class="form-control" id="telefono" name="telefono"  maxlength="50" placeholder="Telefono Cliente">
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Cedula:</label>
                <input type="text" class="form-control" id="cedula" name="cedula"  maxlength="50" placeholder="Cedula">
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password"  maxlength="50" placeholder="Contraseña">
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Rectificar Contraseña:</label>
                <input type="password" class="form-control" id="password_re" name="password_re"  maxlength="50" placeholder="Repetir Contraseña">
            </div>
          </div>  
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" id="login">Registrar!</button>
          </div>
      </form>
      </div>
    </div>
  </div>
</div>