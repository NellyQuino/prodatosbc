@extends('administrador.panel')

@section('panel_content')
<div class="container-fluid ">
    <div class="row  mt-3">
        <div class="text-left col ms-2">
            <label style="color: #848483 ;font-size:180%;font-family:inter;" for="">Ejes registrados</label>
        </div>
        <div class="text-right col-sm-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create-eje" style="background: #059B97;"><i class="fas fa-plus"></i>
                Agregar eje
            </button>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            @include('alertas.alerta')
            <!-- or use any other number .col-md- -->
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="width:20%;">Eje</th>
                        <th style="width:70%;">Objetivo</th>
                        <th >Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ejes as $eje)
                    <tr>
                        <td>{{ $eje->name }}</td>
                        <td class="align-top"> {{ $eje->description}}</td>
                        <td style="width:5%;">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-editar-eje-{{ $eje->id }}" style="background: #059B97;"> <i class="fas fa-edit"></i></button>
                        </td>
                        <td style="width:5%;">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-eliminar-eje-{{ $eje->id }}"><i class="fas fa-trash-alt"></i></button>
                            @include('administrador.ejes.eliminar_eje')
                        </td>
                        @include('administrador.ejes.editar_eje')
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('administrador.ejes.nuevo_eje')
</div>

<!----------MODAL-ELIMINAR/EJE--------->
@endsection