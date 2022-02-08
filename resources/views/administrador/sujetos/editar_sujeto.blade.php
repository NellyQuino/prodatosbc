<!----------MODAL-NUEVO/EJE--------->
<div class="modal fade" id="modal-update-user-{{ $user->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Editar Sujeto</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" arial-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('user.update', $user) }}" method="POST">
                    @csrf @method('PUT')
                    <div class="form-group">
                        <div class="mt-3">
                            <label for="username" class="col-md-4 col-form-label" style="font-size:120%;font-family:inter;">Sujeto obligado</label>
                            <textarea type="text"  id="username" name="username" cols="20" rows="5" class="form-control @error('username') is-invalid @enderror" placeholder="Nombre del sujeto obligado"  required>{{ old('username', $user->username) }}</textarea>
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="email" class="col-md-4 col-form-label" style="font-size:120%;font-family:inter;">Correo electónico </label>
                            <input  name="email" id="email_id" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email',$user->email) }}" required></input>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div  class="mt-2">
                            <label for="number_user"  class="col-md-4 col-form-label" style="font-size:120%;font-family:inter;">ID </label>
                            <input name="number_user" type="text" id="number_user"  class="form-control  @error('number_user') is-invalid @enderror"  placeholder="ID del sujeto obligado" value="{{ old('number_user', $user->number_user) }}" required>
                            @error('number_user')
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