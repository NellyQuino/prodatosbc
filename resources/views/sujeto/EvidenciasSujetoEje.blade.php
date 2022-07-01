@extends('sujeto.EvidenciasSujeto')

@section('Evidencias_Sujeto_Obligado_Eje')
@foreach ($compromisos as $compromiso)
@foreach ($acciones as $accion)
@foreach ($estrategias as $estrategia)
@foreach ($problematicas as $problematica)
    @if ($compromiso->accion_id == $accion->id && $accion->estrategia_id == $estrategia->id && $estrategia->problematica_id == $problematica ->id && $problematica-> eje_id == $eje->id)
        <div style="margin:20px;">
            <table class="ListaSujeto" cellspacing="0" cellpadding="0"  width="100%">
                <tr style="background-color: #FFFFFF;">
                    <td style="width: 10%"><p>Acción</p></td>
                    <td style="width: 30%"><p>{{ $accion->name }}</p></td>
                    <td style="width: 5%"><p></p></td>
                    <td style="width: 5%"><p></p></td>
                    <td style="width: 30%"><p><a type="button" data-toggle="tooltip" title="Generar PDF" class="btn btn-primary" style="background: #059B97;"  href="{{ route('sujeto.seguimiento.pdf', $compromiso->user_id) }}"><i class="fa fa-file-text"></i></a></p></td>
                </tr>
                <tr style="background-color: #FFFFFF;">
                    <td style="width: 10%"><p>Archivo</p></td>
                    <td style="width: 30%"><p>Fecha de entrega</p></td>
                    <td style="width: 5%"><p>Estado</p></td>
                    <td style="width: 5%"><p>Comentario</p></td>
                    <td style="width: 30%"><p></p></td>
                </tr>
                <tr>
                    <td style="width: 15%"><p>
                        {{$compromiso->archive}}
                        @if ((string)$compromiso->archive != "")
                            <form action="{{ route('evidencia.eliminar', ['user' => $usuario, 'eje' => $eje, 'id' => $compromiso->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input type="image" src="{{url('images/Trash.png')}}" alt="" value="{{ $compromiso->id }}" id="Objeto" onclick="return confirm('Seguro de eliminar esta evidencia? {{$compromiso->archive}}')">
                            </form>
                        @endif
                    </p></td>
                    <td style="width: 15%;">
                        {{$compromiso->date_delivery}}
                    </td>
                    <td style="width: 10%">
                        @if ($compromiso->detail == NULL && $compromiso->state == 0)
                            <p><img src="{{url('images/Icon_estado0.png')}}" alt=""></p>
                        @elseif ($compromiso->detail == NULL && $compromiso->state == 1)
                            <p><img src="{{url('images/Icon_estado0.png')}}" alt=""></p>
                        @elseif ($compromiso->detail == "No cumplido" && $compromiso->state == 1)
                            <p><img src="{{url('images/Icon_estado2.png')}}" alt=""></p>
                        @elseif ($compromiso->detail == "Cumplido" && $compromiso->state == '1')
                            <p><img src="{{url('images/Icon_estado1.png')}}" alt=""></p>
                        @endif
                    </td>
                    <td style="width: 30%"><p>{{$compromiso->comment}}</p></td>
                    <td style="width: 0%"><p></p></td>
                </tr>
            </table>
        </div>
        <div style = "display: flex; justify-content: center; align-items: center;">

            @if ((string)$compromiso->archive == "")
                <form action="{{ route('pantalla_evidencia', ['user' => $usuario, 'eje' => $eje, 'id' => $compromiso->id]) }}" method="POST">
                    @csrf
                    <input type="submit" value="+ Añadir" class="EvidenciaCapsula" name = "boton">
                </form>
            @else
                <input type="button" value="No se permite añadir más archivos" class="EvidenciaBoton2" name="Buscar">
            @endif
        </div>
    @endif
@endforeach
@endforeach
@endforeach
@endforeach

@endsection
