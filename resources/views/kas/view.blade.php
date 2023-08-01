<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>rincian kas</title>
</head>
<body>
  <h1>Rincian kas</h1>
  <table>
    <tr>
      <th>id dana</th>
      <th>id kas</th>
      <th>nis</th>
      <th>nama</th>
      <th>kas</th>
      <th>kas masuk</th>
      <th>status</th>
      <th>edit</th>
    </tr>
    @foreach ($dana as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->id_kas}}</td>
        <td>{{$item->id_siswa}}</td>
        <td>{{$item->name}}</td>
      <form action="/kas/{{$item->id}}" method="POST">
        @csrf
        @method('PUT')
        <td>{{$item->uang}}</td>
        @if ($item->dana_masuk == $item->uang)
          <td>{{$item->dana_masuk}}</td>
          <td><p>Lunas</p></td>
        @else
          <td><input type="number" value="{{$item->dana_masuk}}" name="kas_masuk"></td> 
          <td><p>belum bayar</p></td>
          <td><button type="submit">edit</button></td>
        @endif
       
      </form>
      </tr>
    @endforeach
  </table>
</body>
</html>