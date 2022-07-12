<!----------MODAL-NUEVO/AVISO--------->
<div class="modal fade" id="modal-create-notification">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Nuevo Aviso</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" arial-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('nuevo.aviso') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div  class="mt-2">
                            <label for="titulo"  class="col-md-4 col-form-label" style="font-size:120%;font-family:inter;">Titulo</label>
                            <input name="titulo" type="text" id="titulo"  class="form-control  @error('titulo') is-invalid @enderror"  placeholder="Titulo" value="{{ old('titulo') }}" required>
                            @error('titulo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div  class="mt-2">
                            <label for="descripcion"  class="col-md-4 col-form-label" style="font-size:120%;font-family:inter;">Mensaje</label>
                            <textarea type="text" name="descripcion" rows="5" class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" placeholder="Descripción"  required>{{ old('descripcion') }}</textarea>
                            @error('descripcion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div  class="mt-2">
                            <label for="importancia"  class="" style="font-size:120%;font-family:inter;">Importancia</label>
                            <select name="importancia" id="importancia">
                                <option value="success">Verde</option>
                                <option value="warning">Amarillo</option>
                                <option value="danger">Rojo</option>
                            </select>
                            @error('importancia')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer" justify-content-between>
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                @csrf
                <button type="submit" class="btn btn-outline-primary" data-dismiss="modal" style="color: white; background:#059B97;">Crear</button>
            </div>
            </form>
        </div>
    </div>
</div>