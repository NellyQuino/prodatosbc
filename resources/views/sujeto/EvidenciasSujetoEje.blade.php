@extends('sujeto.EvidenciasSujeto')

@section('Evidencias_Sujeto_Obligado_Eje')
@foreach ($compromisos as $compromiso)
@foreach ($acciones as $accion)
@foreach ($estrategias as $estrategia)
    @if ($compromiso->accion_id == $accion->id && $accion->estrategia_id == $estrategia->id && $estrategia->eje_id == $eje->id)
        <div style="margin:20px;">
            <table class="ListaSujeto" cellspacing="0" cellpadding="0"  width="100%">
                <tr style="background-color: #FFFFFF;">
                    <td style="width: 10%"><p>Accion</p></td>
                    <td style="width: 30%"><p>{{ $compromiso->accion_id }}</p></td>
                    <td style="width: 5%"><p></p></td>
                    <td style="width: 5%"><p></p></td>
                    <td style="width: 30%"><p></p></td>
                </tr>
                <tr style="background-color: #FFFFFF;">
                    <td style="width: 10%"><p>Fecha de entrega</p></td>
                    <td style="width: 30%"><p>nose que va</p></td>
                    <td style="width: 5%"><p>Estado</p></td>
                    <td style="width: 5%"><p>Comentario</p></td>
                    <td style="width: 30%"><p></p></td>
                </tr>
                <tr>
                    <td style="width: 10%"><p>{{$compromiso->action_plan}}</p></td>
                    <td style="width: 30%"><p></p></td>
                    <td style="width: 5%"><p></p></td>
                    <td style="width: 5%"><p></p></td>
                    <td style="width: 30%"><p></p></td>
                </tr>
            </table>
        </div>
    @endif
@endforeach
@endforeach
@endforeach

@endsection
