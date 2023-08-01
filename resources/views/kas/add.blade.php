<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add Kas</title>  
</head>
<body>
  <h2>Form Kas</h2>
  <a href="/kategori">+kategori</a>
  <form action="/kas" method="POST">
    @csrf
    <p>tanggal</p>

    <input type="text" name="tanggal" value="{{$tanggal}}" readonly>

    <p>bulan</p>
    <input type="text" name="bulan" value="{{$bulan}}" readonly>

    <label for="kategori">kategori</label>

    <select name="id_kategori" id="kategori">
      @foreach ($kategori as $item)
       <option value="{{$item->id}}">{{$item->title}}</option>
      @endforeach
    </select>

    <label for="uang">
      <p>uang</p>
      <input type="number" name="uang" id="uang">
    </label>
    <button type="submit">send</button>
  </form>
</body>
</html>