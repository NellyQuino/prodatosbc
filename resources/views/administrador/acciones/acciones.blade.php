@extends('administrador.panel')

@section('panel_content')

<div class="row  mt-3">
    <div class="text-left col ms-2">
        <label style="color: #848483 ;font-size:180%;font-family:inter;" for="">Líneas de acción registradas</label>
    </div>
    <div class="text-right col-sm-2">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create-accion" style="background: #059B97;"><i class="fas fa-plus"></i>
            Agregar acción
        </button>
    </div>
</div>
<div class="row">
    <div class="col-md-12  mt-3">
        @include('alertas.alerta')
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Eje</th>
                    <th>Línea estratégica</th>
                    <th>Línea de acción</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($acciones as $accion)
                <tr>
                    <td style="width:25%;" class="align-top">{{$accion -> estrategia -> eje -> name}}</td>
                    <td style="width:25%;" class="align-top">{{$accion -> estrategia -> name}}</td>
                    <td style="width:40%;" class="align-top">{{$accion -> name}}</td>
                    <td style="width:5%;">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-editar-accion-{{ $accion->id }}" style="background: #059B97;"> <i class="fas fa-edit"></i></button>
                    </td>
                    <td style="width:5%;">
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-eliminar-accion-{{ $accion->id }}"><i class="fas fa-trash-alt"></i></button>
                        @include('administrador.acciones.eliminar_accion')

                    </td>
                    @include('administrador.acciones.editar_accion')
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <br>
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item">{{$acciones->links()}}</li>
            </ul>
        </nav>
       
    </div>
</div>
@include('administrador.acciones.nueva_accion')
@endsection