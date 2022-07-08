<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reporte</title>

    <link href="css/pdf.css" rel="stylesheet" type="text/css">
    
    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  table-layout: fixed;
}

th, td {
    width: 100px;
    word-wrap: break-word;
}

th{
  text-align:left;
}
</style>
  </head>
  
  <body>
    <header>
      <div class="container">
      @if($logoa != null)
      <img src="{{ storage_path('/app/public/logos/' . $logoa->image) }}" style="width: 300px; height: 150px;">
      @endif
     
      </div>

    </header>
    
    <footer></footer>
    
  
    @php 
        $date = date('d-m-Y');
    @endphp 
    <h3 style="text-align: center; margin-top:-12px">Acuse de carga</h3>
    <h3 style="text-align: right; font-size:17px">Fecha del reporte: {{$date}}</h3>
    <table style="width:100%">
  <tr>

    <th style="width:75%">Nombre del sujeto obligado:	</th>
    <th>ID</th>
  </tr>
  <tr>
    
    <td>{{$user->username}}</td>
    <td>{{$user->number_user}}</td>
  </tr>
  </table>
  <br> 

    <p style="text-align:center">Tipo de movimiento: (implementación, ABC, seguimiento)</p>

    <p>Fecha de carga: {{$compromiso->date_delivery}}</p>
    
  <br>

  <p>Desglose:</p>

    
    <table style="width:100%">
    
  <tr>
    <th>Eje</th>
    <th>Problematica</th>
    <th>Estrategia</th>
    <th>Línea de acción</th>
</tr>
<tr>
    <td>{{$eje->name}}</td>
    <td>{{$problematica->name}}</td>
    <td>{{$estrategia->name}}</td>
    <td>{{$accion->name}}</td>
</tr>
<tr>
    <th colspan="4">Descripción de la actividad </th>
</tr>
<tr>
    <td colspan="4">{{$compromiso->action_plan}}</td>
</tr>
<tr>
    <th colspan="3">Fecha en que se adquirió el compromiso:</th>
    <td>{{$compromiso->created_at}}</td>
</tr>
<tr>
    <th colspan="3">Fecha de entrega de la evidencia:</th>
    <td>{{$compromiso->date_delivery}}</td>
</tr>
<tr>
    <td><b>Fecha en que se validó la evidencia:</b></td>
    <td>{{$compromiso->date_implementation}}</td>
    <td><b>Estatus:</b></td>
    <td>
    @if ($compromiso->detail == NULL)
      Sin revisar
    @else
      {{$compromiso->detail}}
    @endif
    </td>
</tr>
    </table>
    <br>
    
  </body>
</html>
