<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>

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
      
      <img src="{{ storage_path('/app/public/logos/1647372823-new.jpg') }}" style="width: 300px; height: 150px;">
  
      <!-- <h1>Reporte de {{$user->username}}</h1> -->

      </div>

    </header>
    
    <footer></footer>
    
    <!-- <img src="{{ asset('/images/logo_PRODATOS.fw.png') }}"> -->
    <!-- <table style="width=100%">
      <tbody>
        <tr>
          <td><h1>Reporte de {{$user->username}}</h1></td>
          <td><img src="{{ public_path('Logo3.png') }}" style="width: 400px; height: 200px"></td>
        </tr>
      </tbody>
    </table> -->
    
    <h3 style="text-align: right">Fecha del reporte: 20/04/2022 </h3>
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
  <table style="width:100%">
  <tr>
    <th style="width:60%">Servidor público que reporta:	</th>
    <th>Correo electrónico: </th>
  </tr>
  <tr>
    <td>{{$user->slug}}</td>
    <td>{{$user->email}}</td>
  </tr>
    </table>

    <p>Ejes, estrategias y líneas de acción que se reportan:</p>
    <!-- <table style="width:100%">
    @foreach ($compromisos as $compromiso)
        <tr>
          <td id="titulo">Compromisos: </td>
          <td id="subtitulo">{{$compromiso->action_plan}}</td>
        </tr>
        <tr>
          <td id="titulo">Fecha: </td>
          <td id="subtitulo">{{$compromiso->created_at}}</td>
        </tr>
        <tr>
          <td id="titulo">Status: </td>
          <td id="subtitulo">{{$compromiso->detail}}</td>
          
        </tr>   
        @if($loop->iteration % 8 == 0)
        <p style="page-break-before: always;"></p>
        @endif
      @endforeach
    </table> -->
    
    <table style="width:100%">
    @foreach ($compromisos as $compromiso)
  <tr>
    <th colspan="2">Eje</th>
    <th colspan="2">Estrategia</th>
    <th colspan="2">Línea de acción {{$compromiso->accion_id}}</th>
</tr>
@endforeach
<!-- <tr>
<td colspan="2">Eje</td>
    <td colspan="2">Estrategia</td>
    <td colspan="2">Línea de acción</td>
</tr>
<tr>
<td colspan="2">Eje</td>
    <td colspan="2">Estrategia</td>
    <td colspan="2">Línea de acción</td>
</tr> -->
  <tr>
    <th style="width:20%">Total ejes:</th>
    <td></td>
    <th style="width:20%">Total estrategias:</th>
    <td></td>
    <th style="width:30%">Total líneas de acción:</th>
    <td></td>
  </tr>
    </table>

  <br>

    @foreach ($compromisos as $compromiso)
    <table style="width:100%">
  <tr>
    <th>Eje</th>
    <th>Estrategia</th>
    <th>Línea de acción</th>
</tr>
<tr>
    <td>Jill</td>
    <td>Jill</td>
    <td>Jill</td>
</tr>
<tr>
    <th colspan="3">Descripción de la actividad </th>
</tr>
<tr>
    <td colspan="3">{{$compromiso->action_plan}}</td>
</tr>
<tr>
    <th colspan="2">Fecha en que se adquirió el compromiso:</th>
    <td>{{$compromiso->created_at}}</td>
</tr>
<tr>
    <th colspan="2">Fecha de entrega de la evidencia:</th>
    <td>21/04/2022</td>
</tr>
<tr>
    <td colspan="2"></td>
    <td><b>Estatus:</b>
    @if ($compromiso->detail == NULL)
      Sin revisar
    @else
      {{$compromiso->detail}}
    @endif
    </td>
</tr>
    </table>
    <br>
    @endforeach
  </body>
</html>
