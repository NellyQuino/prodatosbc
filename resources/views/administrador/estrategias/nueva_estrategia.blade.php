<!----------MODAL-NUEVO/ESTRATEGIA--------->
<div class="modal fade" id="modal-create-estretegia">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Nueva línea estratégica </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" arial-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('estrategia.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="mt-2">
                            <label for="name" class="col-md-4 col-form-label" style="font-size:120%;font-family:inter;"> Nombre</label>
                            <textarea type="text" name="name" cols="20" rows="5" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nombre de la línea estratégica"  required>{{ old('name') }}</textarea>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <label for="eje_id" class="col-md-4 col-form-label" style="font-size:120%;font-family:inter;">Eje</label>
                        <div class="custom-select border">
                            <select name="eje_id" id="eje_id"  class="align-top form-control @error('eje_id') is-invalid @enderror" aria-label="Default select example"  required>
                                <option value="">-- Elige un eje --</option>
                                @foreach ($ejes as $eje)
                                <option value="{{$eje -> id}}">{{ $eje -> name }}</option>
                                @endforeach
                            </select>
                            @error('eje_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label for="description" class="col-md-4 col-form-label" style="font-size:120%;font-family:inter;">Problemática</label>
                            <textarea name="description" id="description" type="text"  class="form-control @error('description') is-invalid @enderror"  cols="20" rows="5"  placeholder="Problemática" required>{{ old('description') }}</textarea>
                            @error('description')
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
                <button type="submit" class="btn btn-outline-primary" data-dismiss="modal" style="color: white; background:#059B97;">Guardar</button>
            </div>
            </form>
        </div>
    </div>
</div>