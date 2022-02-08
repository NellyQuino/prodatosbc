@extends('administrador.panel')

@section('panel_content')
<div class="row  mt-3">
        <div class="text-left col ms-2">
            <label style="color: #848483 ;font-size:180%;font-family:inter;" for="">Líneas estratégicas registradas</label>
        </div>
        <div class="text-right col-sm-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create-estretegia" style="background: #059B97;"><i class="fas fa-plus"></i>
                Agregar estrategia
            </button>
        </div>
 </div>
<div class="row  mt-3">
        <div class="col-md-12">
            @include('alertas.alerta')
            <!-- or use any other number .col-md- -->
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Eje</th>
                        <th>Problemática</th>
                        <th>Línea estratégica</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($estrategias as $estrategia)
                    <tr>
                        <td style="width:20%;" class="align-top"> {{ $estrategia-> eje -> name}}</td>
                        <td style="width:40%;" class="align-top"> {{ $estrategia->description}}</td>
                        <td style="width:30%;" class="align-top">{{ $estrategia->name }}</td>
                        <td style="width:5%;">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-editar-estrategia-{{ $estrategia->id }}" style="background: #059B97;"> <i class="fas fa-edit"></i></button>
                        </td>
                        <td style="width:5%;">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-eliminar-estrategia-{{ $estrategia->id }}"><i class="fas fa-trash-alt"></i></button>
                            @include('administrador.estrategias.eliminar_estrategia')

                        </td>
                        @include('administrador.estrategias.editar_estrategia')
                    </tr>

                    @endforeach
                </tbody>
            </table>
            <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item">       
            {{$estrategias->links()}}</li>
            </ul>
        </nav>
        </div>
    </div>
    @include('administrador.estrategias.nueva_estrategia')
</div>
@endsection