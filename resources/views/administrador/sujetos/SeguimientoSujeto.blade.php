@extends('layouts.template_admin')

@section('content')
<div>
    <div class="SeguimientoEncabezado">
        <div class="SeguimientoAcomodo">
            <div class="SeguimientoBordeado1">
                <p class="SeguimientoTextual">Sujeto Obligado</p>
            </div>
            <div class="SeguimientoBordeado2">
                <p class="SeguimientoTextual"> {{$usuario -> username}}</p>
            </div>
        </div>
    </div>
    <div class="SeguimientoAcomodo, SeguimientoCentrado">
        
        @foreach ($ejes as $eje)
        
            @if ($eje->state== 1)
                <form action="{{ route('sujeto.seguimiento.eje', ['user' => $usuario, 'eje' => $eje]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="campox" value="Todo">
                    <input type="hidden" name="datapack" value="normal">
                    <input type="hidden" name="{{ $usuario }}" value = "{{ $usuario }}">
                    @if (empty($supereje))
                        <input type="submit" value="Eje {{ $eje->number }}" class="SeguimientoBoton" name="Eje {{ $eje->number }}">
                    @else
                        @if ($supereje->Id == $eje->number)
                            <input type="button" value="Eje {{ $eje->number }}" class="SeguimientoBotonSeleccionado" name="Eje {{ $eje->number }}">
                        @else
                            <input type="submit" value="Eje {{ $eje->number }}" class="SeguimientoBoton" name="Eje {{ $eje->number }}">
                        @endif
                    @endif
                </form>
            @endif
            
        @endforeach
    </div>
    <div>
        @if ($supereje == NULL)
            <div class="SeguimientoEncabezado">
                <div class="SeguimientoAcomodo">
                    <div class="SeguimientoBordeado3">
                        <p class="SeguimientoTextual">Seleccione un eje</p>
                    </div>
                </div>
                <div class="SeguimientoAcomodo" style="background-color: #E9ECEF;">
                    <div class="SeguimientoBordeado1">
                        <p class="SeguimientoTextual">Objetivo</p>
                    </div>
                    <div class="SeguimientoBordeado2">
                        <p class="SeguimientoTextual">Descripción del eje seleccionado</p>
                    </div>
                </div>
            </div>
        @else
            @if ($supereje->id != NULL)
                @yield('Seguimiento_Sujeto_Obligado_Ejes')
            @else
                <div class="SeguimientoEncabezado">
                    <div>
                        <p class="SeguimientoTextual">Seleccione un eje</p>
                    </div>
                    <div>
                        <div class="SeguimientoBordado1">
                            <p class="SeguimientoTextual">Objetivo</p>
                        </div>
                        <div class="SeguimientoBordado2">
                            <p class="SeguimientoTextual">Descripcion del eje seleccionado</p>
                        </div>
                    </div>
                </div>
            @endif
        @endif
    </div>
</div>
@endsection