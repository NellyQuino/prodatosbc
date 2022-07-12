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
    <div class="row">
    <div class="col-md-12 mt-3">
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
    <table class="table table-striped table-bordered" id="myTable">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Descripción</th>
                    <th>Importancia</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @if(count($avisos)<=0) 
                <tr>
                <td colspan="4">
                    <p>No hay resultados</p>
                </td>
                @else
                @forelse ($avisos as $aviso)
                <tr>
                    <td style="width:25%;" class="align-top">
                            <p>{{$aviso->titulo}}</p>
                    </td>
                    <td style="width:25%;" class="align-top">
                        <p>{{$aviso->descripcion}}</p>
                    </td>

                    <td style="width:25%;" class="align-top">
                        @if($aviso->importancia == "success")
                            <p>Verde</p>
                        @elseif($aviso->importancia == "warning")
                            <p>Amarillo</p>
                        @elseif($aviso->importancia == "danger")
                            <p>Rojo</p>
                        @endif
                    </td>
                    <td>
                    <button type="button" class="btn" data-bs-toggle="modal" data-toggle="tooltip" title="Editar sujeto aviso" data-bs-target="#modal-update-aviso-{{ $aviso->id }}" style="background: #BD3284; color:white;"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-toggle="tooltip" title="Eliminar" data-bs-target="#modal-delete-aviso-{{ $aviso->id }}" ><i class="fas fa-trash-alt"></i></button>
                    </td>
                    @include('administrador.avisos.aviso_update')
                    @include('administrador.avisos.aviso_delete')
                </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">{{$avisos->links()}}</li>
            </ul>
        </nav>
    </div>
</div>
@include('administrador.avisos.crear_aviso')
@endsection