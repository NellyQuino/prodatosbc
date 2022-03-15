<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>

    <link href="css/pdf.css" rel="stylesheet" type="text/css">
    
  </head>
  <body>
    <header>
      <h1>Reporte de {{$user->username}}</h1>
    </header>
    <footer></footer>
    <table>
      <!--<tr>
        <td>Nombre:</td>
        <td>{{$user->username}}</td>
      </tr>-->
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
        @if($loop->iteration % 10 == 0)
        <p style="page-break-before: always;"></p>
        @endif
      @endforeach
    </table>
  </body>
</html>
