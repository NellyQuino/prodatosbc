@extends('sujeto.EvidenciasSujeto')

@section('Evidencias_Sujeto_Obligado_Eje')

@php
$fila = 0; $numero = 0;
@endphp

@foreach ($acciones as $accion)
    @php
    $numero = $numero + 1;
    @endphp
        <div style="margin:20px;">
            <table class="ListaSujeto" cellspacing="0" cellpadding="0"  width="100%">
                <tr style="background-color: #FFFFFF;">
                    <td style="width: 10%">
                        <p>Accion</p>
                    </td>
                    @php
                    $stringconversor = ""; $intconversor = 0; $intconversor2 = 0; $paquete = 0; 
                    $stringconversor = (string)$accion['Nombre']
                    @endphp
                    <td style="width: 30%"><p>{{ $stringconversor }}</p></td>
                    <td style="width: 5%"><p></p></td>
                    <td style="width: 5%"><p></p></td>
                    <td style="width: 30%"><p></p></td>
                </tr>
                <tr style="background-color: #FFFFFF;">
                    <td style="width: 10%">
                        <p>Fecha de entrega</p>
                    </td>
                    @php
                    $stringconversor = "";
                    $stringconversor = (string)$accion['Fecha_Entrega']
                    @endphp
                    <td style="width: 30%"><p>{{ $stringconversor }}</p></td>
                    <td style="width: 5%"><p>Estado</p></td>
                    <td style="width: 5%"><p>Comentario</p></td>
                    <td style="width: 30%"><p></p></td>
                </tr>
                @php
                $renglon = 0;
                $stringconversor = ""
                @endphp


                @foreach ($archivos as $archivo)
                    @if ($fila == $renglon)

                        @php
                        $intconversor2 = (int)$archivo['Id2'];
                        @endphp
                    @endif

                    @if ( (int)$archivo['Id'] == (int)$accion['Id'])
                        @if ($renglon % 2 === 0)
                            <tr style="background-color: #F1F1F1;">
                                @php
                                $stringconversor = (string)$archivo['Archivo'];
                                @endphp
                                <td style="width: 35%">
                                    @php
                                    $separador = explode('.',$stringconversor);
                                    @endphp
                                    @if (count($separador) -1 > 0)
                                        @if ($separador[1] == "png" || $separador[1] == "jpg")
                                            <p><img src="{{url('images/Icon_File_Image.png')}}" alt="">{{$stringconversor}}</p>
                                        @elseif ($separador[1] == "pdf")
                                            <p><img src="{{url('images/Icon_File_Pdf.png')}}" alt="">{{$stringconversor}}</p>
                                        @elseif ($separador[1] == "mp3" || $separador[1] == "wav" || $separador[1] == "ogg")
                                            <p><img src="{{url('images/Icon_File_Audio.png')}}" alt="">{{$stringconversor}}</p>
                                        @elseif ($separador[1] == "mp4" || $separador[1] == "mov" || $separador[1] == "wmv" || $separador[1] == "avi")
                                           <p> <img src="{{url('images/Icon_File_Video.png')}}" alt="">{{$stringconversor}}</p>
                                        @elseif ($separador[1] == "zip" || $separador[1] == "rar" || $separador[1] == "7z")
                                            <p><img src="{{url('images/Icon_File_Zip.png')}}" alt="">{{$stringconversor}}</p>
                                        @elseif ($separador[1] == "txt" || $separador[1] == "docx" || $separador[1] == "ppt" || $separador[1] == "xlsx")
                                            <p><img src="{{url('images/Icon_File_Text.png')}}" alt="">{{$stringconversor}}</p>
                                        @else 
                                            <p><img src="{{url('images/Icon_File_Vacio.png')}}" alt="">{{$stringconversor}}</p>
                                        @endif
                                    @else
                                        @php
                                        $stringconversor = "";
                                        @endphp
                                    @endif
                                </td>
                                <td style="width: 5%">
                                    @if ($stringconversor != "")
                                        @php
                                        $intconversor = (int)$archivo['Id2'];
                                        @endphp
                                        
                                        <form action="{{ route('evidencia.eliminar', ['user' => $usuario, 'eje' => $supereje, 'id' => $intconversor]) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="image" src="{{url('images/Trash.png')}}" alt="" value="{{ $intconversor }}" id="Objeto" onclick="return confirm('Seguro de eliminar esta evidencia? {{$intconversor}}')">
                                        </form>
                                    @endif
                                </td>
                                <td style="width: 5%">
                                    @if ((string)$archivo['Detalle'] == NULL && (int)$archivo['Estado'] == 0)
                                        <p><img src="{{url('images/Icon_estado0.png')}}" alt=""></p>
                                    @elseif ((string)$archivo['Detalle'] == "Incompleto" && (int)$archivo['Estado'] == 0)
                                        <p><img src="{{url('images/Icon_estado2.png')}}" alt=""></p>
                                    @elseif ((string)$archivo['Detalle'] == "Fuera de Tiempo" && (int)$archivo['Estado'] == 0)
                                        <p><img src="{{url('images/Icon_estado3.png')}}" alt=""></p>
                                    @elseif ((string)$archivo['Detalle'] == "Aceptado" && (int)$archivo['Estado'] == '1')
                                        <p><img src="{{url('images/Icon_estado1.png')}}" alt=""></p>
                                    @endif
                                </td>
                                <td style="width: 55%"><p>{{(string)$archivo['Comentario']}}</p></td>
                            </tr>
                        @else
                            <tr style="background-color: #FFFFFF;">
                                @php
                                $stringconversor = (string)$archivo['Archivo'];
                                @endphp
                                <td style="width: 35%">
                                    @php
                                    $separador = explode('.',$stringconversor);
                                    @endphp
                                    @if (count($separador) -1 > 0)
                                        @if ($separador[1] == "png" || $separador[1] == "jpg")
                                            <p><img src="{{url('images/Icon_File_Image.png')}}" alt="">{{$stringconversor}}</p>
                                        @elseif ($separador[1] == "pdf")
                                            <p><img src="{{url('images/Icon_File_Pdf.png')}}" alt="">{{$stringconversor}}</p>
                                        @elseif ($separador[1] == "mp3" || $separador[1] == "wav" || $separador[1] == "ogg")
                                            <p><img src="{{url('images/Icon_File_Audio.png')}}" alt="">{{$stringconversor}}</p>
                                        @elseif ($separador[1] == "mp4" || $separador[1] == "mov" || $separador[1] == "wmv" || $separador[1] == "avi")
                                           <p> <img src="{{url('images/Icon_File_Video.png')}}" alt="">{{$stringconversor}}</p>
                                        @elseif ($separador[1] == "zip" || $separador[1] == "rar" || $separador[1] == "7z")
                                            <p><img src="{{url('images/Icon_File_Zip.png')}}" alt="">{{$stringconversor}}</p>
                                        @elseif ($separador[1] == "txt" || $separador[1] == "docx" || $separador[1] == "ppt" || $separador[1] == "xlsx")
                                            <p><img src="{{url('images/Icon_File_Text.png')}}" alt="">{{$stringconversor}}</p>
                                        @else 
                                            <p><img src="{{url('images/Icon_File_Vacio.png')}}" alt="">{{$stringconversor}}</p>
                                        @endif
                                    @else
                                        @php
                                        $stringconversor = "";
                                        @endphp
                                    @endif
                                </td>
                                <td style="width: 5%">
                                    @if ($stringconversor != "")
                                        @php
                                        $intconversor = (int)$archivo['Id2'];
                                        @endphp
                                        <form action="{{ route('evidencia.eliminar', ['user' => $usuario, 'eje' => $supereje, 'id' => $intconversor]) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="image" src="{{url('images/Trash.png')}}" alt="" value="{{ $intconversor }}" id="Objeto" onclick="return confirm('Seguro de eliminar esta evidencia?')">
                                        </form>
                                    @endif
                                </td>
                                <td style="width: 5%">
                                    @if ((string)$archivo['Detalle'] == NULL && (int)$archivo['Estado'] == 0)
                                        <p><img src="{{url('images/Icon_estado0.png')}}" alt=""></p>
                                    @elseif ((string)$archivo['Detalle'] == "Incompleto" && (int)$archivo['Estado'] == 0)
                                        <p><img src="{{url('images/Icon_estado2.png')}}" alt=""></p>
                                    @elseif ((string)$archivo['Detalle'] == "Fuera de Tiempo" && (int)$archivo['Estado'] == 0)
                                        <p><img src="{{url('images/Icon_estado3.png')}}" alt=""></p>
                                    @elseif ((string)$archivo['Detalle'] == "Aceptado" && (int)$archivo['Estado'] == 1)
                                        <p><img src="{{url('images/Icon_estado1.png')}}" alt=""></p>
                                    @endif
                                </td>
                                <td style="width: 55%"><p>{{(string)$archivo['Comentario']}}</p></td>
                            </tr>
                        @endif
                    @endif
                    @php
                    $renglon += 1
                    @endphp
                @endforeach
            </table>
        </div>
        
        <div style = "display: flex; justify-content: center; align-items: center;">
            @if ($stringconversor == "")
                <form action="{{ route('pantalla_evidencia', ['user' => $usuario, 'eje' => $supereje, 'id' => $intconversor2]) }}" method="POST">
                    @csrf
                    <input type="submit" value="+ Añadir" class="EvidenciaCapsula" name = "boton">
                </form>
            @else
                <input type="button" value="No se permite añadir más archivos" class="EvidenciaBoton2" name="Buscar">
            @endif
        </div>
        <div>
            @if  ((int)session('deteccion') == (int)$accion['Id2'])
                @if (session('estado'))
                    <p>{{ session('estado') }}</p>
                @endif
                @if (count($errors)>0)
                    <p>{{ (int)$accion['Id2'] }} - Archivo Incorrecto, favor de subir un archivo de extensión .rar, .zip o .7z</p>
                @endif
            @endif
        </div>
        @php
        $fila += 1
        @endphp
    @endforeach

@endsection