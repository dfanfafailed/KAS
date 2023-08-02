<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>+kategori</title>
</head>
<body>
  <h1>Form +kategori</h1>
  <form action="/kategori" method="POST">
    @csrf
    <label for="nama-kategori">
      <p>Kategori</p>
      <input type="text" name="title">
    </label>
    <button type="submit">simpan</button>
  </form>
</body>
</html>