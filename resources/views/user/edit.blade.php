<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>+siswa</title>
</head>
<body>
  <h1>Form edit siswa</h1>
  <form action="/user/{{$siswa->id}}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">
      <p>nama</p>
      <input type="text" name="name" id="name" value="{{$siswa->name}}">
    </label>

    <label for="password">
      <p>keanggotaan</p>
      <input type="text" name="keanggotaan" id="password" value="{{$siswa->keanggotaan}}">
    </label>

    <label for="password">
      <p>password</p>
      <input type="password" name="password" id="password" value="{{$siswa->password}}">
    </label>

    <button type="submit">simpan</button>
  </form>
</body>
</html>