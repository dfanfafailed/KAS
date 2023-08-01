<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>+dana</title>
</head>
<body>
  <form action="/pembayaran" method="POST">
    @csrf
    <p>tanggal</p>

    <input type="text" name="tanggal" value="{{$tanggal}}" readonly>
    <input type="text" name="id_pengeluaran" value="{{$pengeluaran->id}}" hidden>
    <input type="text" name="id_siswa" value="{{$pengeluaran->id_siswa}}" hidden>

    <label for="kategori">nama siswa</label>
    <input type="text" name="" id="" value="{{$nama}}">
    </select>

    <label for="oetang">
      <p>hutang</p>
      <input type="number" id="oetang" value="{{$pengeluaran->uang}}">
    </label>

    <label for="uang">
      <p>bayar</p>
      <input type="number" name="uang" id="uang">
    </label>
    <button type="submit">send</button>
  </form>
</body>
</html>