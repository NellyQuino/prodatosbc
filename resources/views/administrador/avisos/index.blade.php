@extends('layouts.template_admin')
@section('content')
<div class="row justify-content-end">
    <div class="text-left col ms-2">
        <label style="color: #848483 ;font-size:250%;font-family:inter;" for="">Avisos</label>
    </div>
    <div class="text-right col-sm-2">
        <button type=" button" class="btn btn-primary" data-bs-toggle="modal" data-toggle="tooltip" title="Agregar aviso" data-bs-target="#modal-create-notification" style="background: #059B97;"><i class="fas fa-plus"></i>
            Crear aviso
        </button>
    </div>
    <div class="col-xl-12 my-3">
        <form action="#" method="GET">
            @csrf
            <div class="form-row d-flex">
                <div class="col-sm-4">
                    <input class="form-control me-2" type="search" name="text" placeholder="Buscar" value="" aria-label="Search">

                </div>
                <div class="col-auto">
                    <input class="btn btn-primary" type="submit" data-toggle="tooltip" title="Buscar" style="background: #059B97;" value="Buscar">
                </div>
            </div>
        </form>
    </div>
    @include('alertas.alerta')
    @if ($errors->any())
    <div class="alert alert-warning alert-dismissible fade show" id="error_alert" role="alert">
        <div class="errors">
            Por favor corrige los siguientes errores
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
</div>
@include('administrador.avisos.crear_aviso')
@endsection