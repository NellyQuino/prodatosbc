@extends('layouts.template_sujeto')
@section('content')
<h1>Información</h1>
<div class="row" style="margin-bottom: 3rem; margin-top: 1rem;">
    <div class="col-sm-3">
        <div class="card text-white" style="max-width: 18rem; background-color: #d270ab">
        <div class="card-header">Implementación</div>
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">En este formato los sujetos obligados responsables seleccionarán los ejes y las acciones que desarrollarán durante el ejercicio anual; asimismo, remitirán la descripción de las actividades concretas que llevarán a cabo en cada línea de acción. </p>
        </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card text-white" style="max-width: 18rem; background-color: #cc5b9f">
        <div class="card-header">ABC (altas, bajas, cambios)</div>
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">En este formato, los sujetos obligados que así lo requieran podrán modificar la ruta de implementación inicial, ya que permite seleccionar ejes, estrategias y/o acciones adicionales, dar de baja alguno de los previamente seleccionados y/o cambiar la descripción de las actividades propuestas. </p>
        </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card text-white" style="max-width: 18rem; background-color: #c54793">
        <div class="card-header">Seguimiento</div>
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">Este formato será la vía para que los responsables remitan al Instituto, las evidencias que respalden las acciones y actividades realizadas a lo largo del ejercicio.
                Las evidencias deberán estar contenidas en archivos con formato .rar, .zip y/o .7z.  
            </p>
        </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card text-white" style="max-width: 18rem; background-color: #bf3287">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        </div>
    </div>
</div>
<h1>Avisos</h1>
    @forelse ($avisos as $aviso)
        @if($aviso->importancia == "success")
        <div class="card text-dark alert-success mb-3">
            <div class="card-header"><h5 class="card-title">{{$aviso->titulo}}</h5></div>
            <div class="card-body">
                <p class="card-text">{{$aviso->descripcion}}</p>
            </div>
        </div>
        @elseif($aviso->importancia == "danger")
        <div class="card text-dark alert-danger mb-3">
            <div class="card-header"><h5 class="card-title">{{$aviso->titulo}}</h5></div>
            <div class="card-body">
                <p class="card-text">{{$aviso->descripcion}}</p>
            </div>
        </div>
        @elseif($aviso->importancia == "warning")
        <div class="card text-dark alert-warning mb-3">
            <div class="card-header"><h5 class="card-title">{{$aviso->titulo}}</h5></div>
            <div class="card-body">
                <p class="card-text">{{$aviso->descripcion}}</p>
            </div>
        </div>
        @endif
    @endforeach
@endsection