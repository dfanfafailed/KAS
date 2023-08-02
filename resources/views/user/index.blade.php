<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>siswa</title>
</head>
<body>
  @foreach ($siswa as $item)
      <p>absen : {{$item->id}}</p>
      <p>nama : {{$item->name}}</p>
      <p>keanggotaan : {{$item->keanggotaan}}</p>
      <a href="/user/{{$item->id}}">edit</a>
      <hr>
  @endforeach
</body>
</html>