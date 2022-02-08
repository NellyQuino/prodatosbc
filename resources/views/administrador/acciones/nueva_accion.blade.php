<!----------MODAL-NUEVO/ACCION--------->
<div class="modal fade" id="modal-create-accion">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Nueva línea de acción </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" arial-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('accion.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="mt-2">
                            <label for="name" class="col-md-4 col-form-label" style="font-size:120%;font-family:inter;"> Nombre</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nombre de la linea de acción" value="{{ old('name') }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <label for="estrategia_id" class="col-md-4 col-form-label" style="font-size:120%;font-family:inter;">Línea estratégica </label>
                        <div class="custom-select border">
                            <select name="estrategia_id" id="estrategia_id" class="form-control  @error('estrategia_id') is-invalid @enderror " aria-label="Default select example">
                                <option value="">-- Elige una línea estratégica --</option>
                                @foreach ($estrategias as $estrategia)
                                <option value="{{$estrategia -> id}}">{{ $estrategia -> name }}</option>
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
                        @csrf
                        <button type="submit" class="btn btn-outline-primary" data-dismiss="modal" style="color: white; background:#059B97;">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>