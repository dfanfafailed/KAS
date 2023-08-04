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
  <hr>
  @foreach ($pengeluaran as $item)
      <p>tgl pengeluaran: {{$item->tanggal}}</p>
      <p>keterangan: {{$item->excerpt}}</p>
      @if ($item->id_siswa != NULL)
          <p>{{$item->name}}</p>
          @if ($item->uang_kembali < $item->uang)
            <a href="/pembayaran/{{$item->id}}">bayar</a>
            <p>dibayar : {{$item->uang_kembali}}</p>
          @endif
          
      @endif
      <p>kas keluar: {{$item->uang}}</p>
      <hr>
  @endforeach
</body>
</html>