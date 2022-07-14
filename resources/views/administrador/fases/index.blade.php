@extends('layouts.template_admin')
@section('content')
<div class="btn-group col-xl-12 my-3" role="group" aria-label="Basic radio toggle button group">
        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
        <label class="btn btn-outline-prim" for="btnradio1">Implementación</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
        <label class="btn btn-outline-prim" for="btnradio2">ABC</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
        <label class="btn btn-outline-prim" for="btnradio3">Seguimiento</label>
    </div>
<div class="row justify-content-end">
    <div class="text-left">
        <label style="color: #848483 ;font-size:250%;font-family:inter;" for="">Fases</label>
    </div>
    <div class="col-xl-12 my-3">
        <form action="{{ route('fases.index') }}" method="GET">
            @csrf
            <div class="form-row d-flex">
                <div class="col-sm-4">
                    <input class="form-control me-2" type="search" name="text" placeholder="Buscar" value="{{$text}}" aria-label="Search">

                </div>
                <div class="col-auto">
                    <input class="btn btn-primary" type="submit" data-toggle="tooltip" title="Buscar" style="background: #059B97;" value="Buscar">
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row justify-content-end mt-2">
    <div class="col-2 align-self-end">
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
                    <th>ID</th>
                    <th>Sujeto Obligado</th>
                    <th>Nombre del Oficial</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @if(count($users)<=0) <tr>
                    <td colspan="4">
                        <p>No hay resultados</p>
                    </td>
                    @else
                    @forelse ($users as $user)
                    <tr>
                        <td style="width:15%;" class="align-top">
                            <p>{{$user->number_user}}</p>
                        </td>
                        <td style="width:15%;" class="align-top">
                            <p>{{$user->username}}</p>
                        </td>
                        <td style="width:50%;" class="align-top">
                            <p>{{$user->name}} </p>
                        </td>
                        <td style="width:20%;" class="align-top"></td>
                    </tr>
                    @endforeach
                    @endif
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">{{$users->links()}}</li>
            </ul>
        </nav>
    </div>
</div>
@endsection