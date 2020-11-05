<form class="form-horizontal"  method="post">
<!-- Modal -->
<div id="remove-stock" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h4 class="modal-title">Retirar de Stock</h4>
      </div>
      <div class="modal-body">
        
          <div class="form-group">
            <label for="quantity" class="col-sm-2 control-label">Cantidad: </label>
            <div class="col-sm-6">
              <input type="number" min="1" name="quantity_remove" class="form-control" id="quantity_remove" value="" placeholder="Cantidad" required="">
            </div>
          </div>
          <div class="form-group">
            <label for="reference" class="col-sm-2 control-label">Referencia: </label>
            <div class="col-sm-6">
              <input type="text" name="reference_remove" class="form-control" id="reference_remove" value="" placeholder="Referencia">
            </div>
          </div>
          <div class="form-group">
            <label for="reference" class="col-sm-2 control-label">Usuario: </label>
            <div class="col-sm-6">
              <input type="text" name="name_user_remove" class="form-control" id="name_user_remove" value="" placeholder="Nombre del trabajador" required="">
            </div>
          </div>
          <div class="form-group">
            <label for="reference" class="col-sm-2 control-label">Cliente: </label>
            <div class="col-sm-6">
              <input type="text" name="name_client_remove" class="form-control" id="name_client_remove" value="" placeholder="Factura o Nombre del cliente">
            </div>
          </div>
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		<button type="submit" class="btn btn-primary">Guardar datos</button>
      </div>
    </div>

  </div>
</div>
</form>