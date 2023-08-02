<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>index pengeluaran</title>
</head>
<body>
  <h1>Daftar Pengeluaran</h1>
  <a href="/pengeluaran/add">+pengeluaran</a>
  @foreach ($pengeluaran as $item)
      <p>tgl pengeluaran: {{$item->tanggal}}</p>
      <p>keterangan: {{$item->excerpt}}</p>
      @if ($item->id_siswa != NULL)
          <p>{{$item->user->name}}</p>
          <a href="/pembayaran/{{$item->id}}">bayar</a>
      @endif
      <p>kas keluar: {{$item->uang}}</p>
  @endforeach
</body>
</html>