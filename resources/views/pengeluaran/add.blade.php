<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>+pengeluaran</title>
</head>
<body>
    <form action="/pengeluaran" method="POST">
      @csrf
      <p>tanggal</p>
      <input type="date" name="tanggal" value="{{$tanggal}}">
      <label for="excerpt">
        <p>keterangan</p>
        <input type="text" name="excerpt" id="excerpt">
      </label>
      <label for="siswa">
        <p>nama siswa</p>
        <select name="id_siswa" id="siswa">
          <option value="">-none-</option>
          @foreach ($siswa as $item)
           <option value="{{$item->id}}">{{$item->name}}</option>
          @endforeach
        </select>
      </label>
      <label for="uang">
        <p>uang digunakan</p>
        <input type="number" name="uang" id="uang">
      </label>
      <button type="submit">simpan</button>
    </form>
</body>
</html>