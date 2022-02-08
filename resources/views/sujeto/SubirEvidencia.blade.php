@extends('layouts.template_admin')

@section('content')
    <form action="{{ route('cargar_evidencia', ['user' => $usuario, 'eje' => $supereje, 'id' => $compromiso_id]) }}" method="POST" enctype="multipart/form-data" id="Forma">
        @csrf 
        @method('PUT')
        <input type="hidden" name="Archivo" id ="Archivo">
        <input type="hidden" name="Compromiso_id" id ="Compromiso_id" value ="{{$compromiso_id}}">
        <input type="file" name="Buscador" id="Buscador"  accept=".rar,.zip,.7z" class="EvidenciaCargar" onchange="this.form.submit()">
        <label for="Buscador" class="EvidenciaCapsula" name="Buscar" id ="Archivo_Boton">Subir .rar</label>
    </form>
@endsection