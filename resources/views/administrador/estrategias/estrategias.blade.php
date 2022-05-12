@extends('administrador.panel')

@section('panel_content')
<div class="row justify-content-end mt-3">
    <div class="text-left col ms-2">
        <label style="color: #848483 ;font-size:180%;font-family:inter;" for="">Líneas estratégicas registradas</label>
    </div>
    <div class="text-right col-sm-2">
        <a type="button" class="btn btn-primary" style="background: #059B97;"  href="{{ route('estrategia.create') }}"><i class="fas fa-plus"></i>
            Agregar estrategia
        </a>
    </div>
</div>
<div class="row justify-content-end mt-2">
    <div class="col-2 align-self-end">
    <div class="form-check form-switch">
        <input class="form-check-input" style="width: 50px; height: 25px;" type="checkbox" value="" id="myCheckBoxID">
            <label class="form-check-label" for="myCheckBoxID" style="color: #848483 ;font-size:20px;font-family:inter;">
            Activar eliminar
            </label>
        </div>

    </div>
</div>
<div class="row  mt-3">
    <div class="col-md-12">
        @include('alertas.alerta')
        <!-- or use any other number .col-md- -->
        <table class="table table-striped table-bordered" id="myTable">
            <thead>
                <tr>
                    <th>Eje</th>
                    <th>Problemática</th>
                    <th>Línea estratégica</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
            @php
                $row = 0;
                $buttonName = "button_eliminar_";
                @endphp
                @foreach($estrategias as $estrategia)
                <tr>
                    <td style="width:20%;" class="align-top"> {{ $estrategia-> eje -> number}} {{ $estrategia-> eje -> name}}</td>
                    <td style="width:40%;" class="align-top"> {{ $estrategia-> number}} {{ $estrategia->description}}</td>
                    <td style="width:30%;" class="align-top">{{ $estrategia->name }}</td>
                    <td style="width:5%;">
                        <a type="button" class="btn btn-primary" style="background: #059B97;"  href="{{ route('estrategia.edit', $estrategia->id) }}"> <i class="fas fa-edit"></i></a>
                    </td>
                    <td style="width:5%;">
                    @php
                        $btnNameRow = $buttonName.$row;
                        $row += 1;
                        @endphp
                        <button type="button" id="<?php echo $btnNameRow; ?>" disabled class="btn btn-danger" data-toggle="tooltip" title="Eliminar" data-bs-toggle="modal" data-bs-target="#modal-eliminar-estrategia-{{ $estrategia->id }}"><i class="fas fa-trash-alt"></i></button>

                        @include('administrador.estrategias.eliminar_estrategia')

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    {{$estrategias->links()}}
                </li>
            </ul>
        </nav>
    </div>
</div>
</div>
@endsection