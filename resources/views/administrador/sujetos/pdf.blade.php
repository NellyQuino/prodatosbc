<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>

    <link href="css/pdf.css" rel="stylesheet" type="text/css">
    
  </head>
  
  <body>
    <header>

      <div class="container">
      
      <img src="{{ storage_path('/app/public/logos/1647372823-new.jpg') }}" style="width: 300px; height: 150px">
  
      <h1>Reporte de {{$user->username}}</h1>

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
    
    <table>
      <!-- <tr>
        <td>Nombre:</td>
        <td>{{$user->username}}</td>
      </tr> -->
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
    </table>
  </body>
</html>
