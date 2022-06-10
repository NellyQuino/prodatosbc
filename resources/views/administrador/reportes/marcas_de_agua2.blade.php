<!----------MODAL-MARCAS DE AGUA--------->
<div class="modal fade" id="modal-marcas-agua">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Marcas de agua </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" arial-label="Close">
                    <!-- <span aria-hidden="true">&times;</span> -->
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
              <form action="{{ route('reportes.marcas.store2') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <div class="mt-2">
                    <label for="description">Descripcion</label>
                    <input type="text" name="description" class="form-control" id="description">
                  </div>
                  <div class="mt-2">
                    <label for="image">Imagen</label>
                    <input type="file" name="image" class="form-control" id="image" accept=".jpg,.png">
                  </div>
                  </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer" justify-content-between>
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                    @csrf
                    <button type="submit" class="btn btn-outline-primary" data-dismiss="modal" style="color: white; background:#059B97;">Guardar</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
