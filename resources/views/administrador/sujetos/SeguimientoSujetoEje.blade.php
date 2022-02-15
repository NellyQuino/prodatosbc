@extends('administrador.sujetos.SeguimientoSujeto')

@section('Seguimiento_Sujeto_Obligado_Ejes')
    <div class="SeguimientoEncabezado">
        <div class="SeguimientoAcomodo">
            <div class="SeguimientoBordeado3">
                <p class="SeguimientoTextual">{{ $supereje->name }}</p>
            </div>
        </div>
        <div class="SeguimientoAcomodo" style="background-color: #E9ECEF;">
            <div class="SeguimientoBordeado1">
                <p class="SeguimientoTextual">Objetivo</p>
            </div>
            <div class="SeguimientoBordeado2">
                <p class="SeguimientoTextual">{{ $supereje->description }}</p>
            </div>
        </div>
    </div>

    <div class="">
        <div class="" style="background-color: #FFFFFF;">
            <form action="{{ route('sujeto.seguimiento.eje', ['user' => $usuario, 'eje' => $supereje]) }}" method="POST">
                @csrf
                <select name="campox" id="">
                    <option value="Todo">Todo</option>
                    <option value="Sin Revision">Sin Revision</option>
                    <option value="Incompleto">Incompleto</option>
                    <option value="Aceptado">Aceptado</option>
                </select>
                <input type="submit" value="Buscar" class="EvidenciaCapsula"> <br><br>
            </form>
        </div>
    </div>

    <div class="SeguimientoEncabezado">
        <div>
            <table class="ListaSujeto" cellspacing="0" cellpadding="0"  width="100%" >
                <tr style="background-color: #FFFFFF;">
                    <td style="width: 15%">
                        <p>Accion</p>
                    </td>
                    <td style="width: 10%">
                        <p></p>
                    </td>
                    <td style="width: 40%">
                        <p>Actividad a Desarrollar</p>
                    </td>
                    <td style="width: 25%">
                        <p>Fecha Implementacion</p>
                    </td>
                    <td style="width: 10%">
                        <p>Estado</p>
                    </td>
                </tr>
                @php
                $renglon = 0;
                $stringconversor = ""
                @endphp
                @foreach ($acciones as $accion)

                    @if ($renglon % 2 === 0)
                        <tr style="background-color: #F1F1F1;">
                            <td>
                                @php
                                $stringconversor = (string)$accion['Nombre']
                                @endphp
                                <p>{{ $stringconversor }}</p>
                            </td>
                            <td>
                                @if ((string)$accion['Registro'] != NULL)
                                    @php
                                    $stringconversor = (int)$accion['Id']
                                    @endphp
                                    <form action="{{ route('sujeto.seguimiento.eje.accion', ['user' => $usuario, 'eje' => $supereje, 'accion' => $stringconversor]) }}" method="POST">
                                        @csrf
                                        <input type="image" src="{{url('images/Visible.png')}}" alt="">
                                    </form>
                                @endif
                            </td>
                            <td>
                                @php
                                $stringconversor = (string)$accion['Plan_Accion']
                                @endphp
                                <p>{{ $stringconversor }}</p>
                            </td>
                            <td>
                                @php
                                $stringconversor = (string)$accion['Fecha_Implementacion']
                                @endphp
                                <p>{{ $stringconversor }}</p>
                            </td>
                            <td>
                                @php
                                $stringconversor = (string)$accion['Estado']
                                @endphp
                                    @if ((string)$accion['Detalle'] == NULL && (int)$accion['Estado'] == 0)
                                        <p><img src="{{url('images/Icon_estado0.png')}}" alt=""></p>
                                    @elseif ((string)$accion['Detalle'] == "Incompleto" && (int)$accion['Estado'] == 0)
                                        <p><img src="{{url('images/Icon_estado2.png')}}" alt=""></p>
                                    @elseif ((string)$accion['Detalle'] == "Fuera de Tiempo" && (int)$accion['Estado'] == 0)
                                        <p><img src="{{url('images/Icon_estado3.png')}}" alt=""></p>
                                    @elseif ((string)$accion['Detalle'] == "Aceptado" && (int)$accion['Estado'] == 1)
                                        <p><img src="{{url('images/Icon_estado1.png')}}" alt=""></p>
                                    @endif
                            </td>
                        </tr>
                    @else
                        <tr style="background-color: #FFFFFF;">
                        <td>
                                @php
                                $stringconversor = (string)$accion['Nombre']
                                @endphp
                                <p>{{ $stringconversor }}</p>
                            </td>
                            <td>
                                @if ((string)$accion['Registro'] != NULL)
                                    @php
                                    $stringconversor = (int)$accion['Id']
                                    @endphp
                                    <form action="{{ route('sujeto.seguimiento.eje.accion', ['user' => $usuario, 'eje' => $supereje, 'accion' => $stringconversor]) }}" method="POST">
                                        @csrf
                                        <input type="image" src="{{url('images/Visible.png')}}" alt="">
                                    </form>
                                @endif
                            </td>
                            <td>
                                @php
                                $stringconversor = (string)$accion['Plan_Accion']
                                @endphp
                                <p>{{ $stringconversor }}</p>
                            </td>
                            <td>
                                @php
                                $stringconversor = (string)$accion['Fecha_Implementacion']
                                @endphp
                                <p>{{ $stringconversor }}</p>
                            </td>
                            <td>
                                @php
                                $stringconversor = (string)$accion['Estado']
                                @endphp
                                    @if ((string)$accion['Detalle'] == NULL && (int)$accion['Estado'] == 0)
                                        <p><img src="{{url('images/Icon_estado0.png')}}" alt=""></p>
                                    @elseif ((string)$accion['Detalle'] == "Incompleto" && (int)$accion['Estado'] == 0)
                                        <p><img src="{{url('images/Icon_estado2.png')}}" alt=""></p>
                                    @elseif ((string)$accion['Detalle'] == "Fuera de Tiempo" && (int)$accion['Estado'] == 0)
                                        <p><img src="{{url('images/Icon_estado3.png')}}" alt=""></p>
                                    @elseif ((string)$accion['Detalle'] == "Aceptado" && (int)$accion['Estado'] == 1)
                                        <p><img src="{{url('images/Icon_estado1.png')}}" alt=""></p>
                                    @endif
                            </td>
                        </tr>
                    @endif
                    @php
                    $renglon += 1
                    @endphp
                @endforeach
            </table>
        </div>
    </div>
    <!--@if (!empty($archivos))
        @yield('Seguimiento_Sujeto_Obligado_Ejes_Accion')
    @endif-->
@endsection