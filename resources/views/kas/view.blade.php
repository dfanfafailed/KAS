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
      <th>id kas</th>
      <th>nis</th>
      <th>kas masuk</th>
      <th>status</th>
    </tr>
    @foreach ($dana as $item)
      <tr>
        <td>{{$item->id_kas}}</td>
        <td>{{$item->id_siswa}}</td>
        <td>{{$item->dana_masuk}}</td>
        <td>{{$item->status}}</td>
      </tr>
    @endforeach
  </table>
</body>
</html>