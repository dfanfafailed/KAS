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
  <form action="/kas" method="POST">
    @csrf
    <p>tanggal</p>

    <input type="text" name="tanggal" value="{{$tanggal}}">

    <p>bulan</p>
    <input type="text" name="bulan" value="{{$bulan}}">

    <label for="uang">
      <p>uang</p>
      <input type="number" name="uang" id="uang">
    </label>
    <button type="submit">send</button>
  </form>
</body>
</html>