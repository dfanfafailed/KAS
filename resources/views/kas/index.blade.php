<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>daftar kas</title>
</head>
<body>
  <h1>Daftar Kas</h1>
  <a href="/kas/add">+kas</a>
  @foreach ($kas as $item)
      <p>{{$item->tanggal}}</p>
      <p>{{$item->bulan}}</p>
      <p>{{$item->uang}}</p>
      <p>kategori : {{$item->kategori->title}}</p>
      <a href="/kas/{{$item->id}}">detail</a>
  @endforeach
</body>
</html>