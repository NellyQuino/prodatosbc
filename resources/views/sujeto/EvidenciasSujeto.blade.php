@extends('layouts.template_sujeto')

@section('content')
<div>
    <div class="SeguimientoAcomodo, SeguimientoCentrado" style="margin: 20px;">

       
        @foreach ($ejes as $eje)
            
            @if ($eje->state == 1)
                <form action="{{ route('evidencias_eje', ['user' => $usuario, 'eje' => $eje]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="{{ $usuario }}" value="{{ $usuario }}">
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
    @yield('Evidencias_Sujeto_Obligado_Eje')
</div>


@endsection
