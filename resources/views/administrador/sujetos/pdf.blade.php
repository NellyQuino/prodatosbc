<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Reporte ...</h1>
    <table>
      <tr>
        <td>Nombre:</td>
        <td>{{$user->username}}</td>
      </tr>
      @foreach ($compromisos as $compromiso)
      <tr>
        <td>Compromisos: </td>
        <td>{{$compromiso->action_plan}}</td>
      </tr>
      <tr>
        <td>Fecha: </td>
        <td>{{$compromiso->created_at}}</td>
      </tr>
      <tr>
        <td>Status: </td>
        <td>{{$compromiso->detail}}</td>
      </tr>
      @endforeach
    </table>
  </body>
</html>
