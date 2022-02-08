<!----------MODAL-EDITAR/ESTRATEGIA--------->
<div class="modal fade" id="modal-editar-estrategia-{{ $estrategia->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modificar línea estratégica </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" arial-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="{{ route('estrategia.update', $estrategia) }}" method="POST">
                @csrf @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <div class="mt-2">
                            <label for="name" class="col-md-4 col-form-label" style="font-size:120%;font-family:inter;"> Nombre</label>
                            <textarea type="text" name="name" cols="20" rows="5" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nombre de la línea estratégica"  required>{{ old('name', $estrategia->name) }}</textarea>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label for="eje_id"  class="col-md-4 col-form-label" style="font-size:120%;font-family:inter;"">Eje </label>
                            <div class="custom-select border">
                                <select name="eje_id" id="eje_id"  class="form-control @error('eje_id') is-invalid @enderror" aria-label="Default select example">
                                    <option value="">-- Elige una línea estratégica --</option>
                                    @foreach ($ejes as $eje)
                                    <option value="{{$estrategia -> id}}" {{$eje ->id == $estrategia -> eje_id ? 'selected' : '' }}>{{ $eje -> name }}</option>
                                    @endforeach
                                </select>
                                @error('eje_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="description"  class="col-md-4 col-form-label" style="font-size:120%;font-family:inter;">Problemática</label>
                            <textarea name="description" id="eje_description"  type="text"  class="form-control @error('description') is-invalid @enderror" cols="20" rows="5" >{{ old('description', $estrategia->description) }}</textarea>
                            @error('description')
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