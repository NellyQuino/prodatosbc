<!----------MODAL-EDITAR/ACCION--------->
<div class="modal fade" id="modal-editar-accion-{{ $accion->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modificar línea de acción </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" arial-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="{{ route('accion.update', $accion) }}" method="POST">
                 @csrf @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                    <div class="mt-2">
                            <label for="name" class="col-md-4 col-form-label" style="font-size:120%;font-family:inter;"> Nombre</label>
                            <input type="text" name="name"  class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name', $accion->name) }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="description"  class="col-md-4 col-form-label" style="font-size:120%;font-family:inter;">Línea estratégica</label>
                            <select name="estrategia_id" id="estrategia_id"  class="form-control custom-select border @error('estrategia_id') is-invalid @enderror" aria-label="Default select example">
                                <option value="">-- Elige una línea estratégica --</option>
                                @foreach ($estrategias as $estrategia)
                                <option value="{{$estrategia -> id}}" {{$estrategia ->id == $accion -> estrategia_id ? 'selected' : '' }}>{{ $estrategia -> name }}</option>
                                @endforeach
                                </select>
                                @error('estrategia_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer" justify-content-between>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-outline-primary" data-dismiss="modal" style="color: white; background:#059B97;">Actualizar</button>
                    </div>
            </form>
        </div>
    </div>
</div>