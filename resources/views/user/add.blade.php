<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>+siswa</title>
</head>
<body>
  <h1>Form +siswa</h1>
  <form action="/user" method="POST">
    @csrf
    <label for="name">
      <p>nama</p>
      <input type="text" name="name" id="name">
    </label>

    <label for="password">
      <p>password</p>
      <input type="password" name="password" id="password">
    </label>
    <button type="submit">simpan</button>
  </form>
</body>
</html>