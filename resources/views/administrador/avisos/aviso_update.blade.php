<!----------update/aviso--------->
<div class="modal fade" id="modal-update-aviso-{{ $aviso->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Editar Aviso</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" arial-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('aviso.update', $aviso) }}" method="POST">
                    @csrf @method('PUT')
                    <div class="form-group">
                        <div  class="mt-2">
                            <label for="titulo"  class="col-md-4 col-form-label" style="font-size:120%;font-family:inter;">Titulo </label>
                            <input name="titulo" type="text" id="titulo"  class="form-control  @error('titulo') is-invalid @enderror"  placeholder="Titulo del aviso" value="{{ old('titulo', $aviso->titulo) }}" required>
                            @error('titulo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="descripciom" class="col-md-4 col-form-label" style="font-size:120%;font-family:inter;">Descripción</label>
                            <textarea type="text"  id="descripcion" name="descripcion" cols="20" rows="1" class="form-control @error('descripcion') is-invalid @enderror" placeholder="Descripción del aviso"  required>{{ old('descripcion', $aviso->descripcion) }}</textarea>
                            @error('descripcion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div  class="mt-2">
                            <label for="importancia"  class="col-md-4 col-form-label" style="font-size:120%;font-family:inter;">Importancia</label>
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
                <button type="submit" class="btn btn-outline-primary" data-dismiss="modal" style="color: white; background:#059B97;">Actualizar</button>
            </div>
            </form>
        </div>
    </div>
</div>