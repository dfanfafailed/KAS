<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>login</title>
</head>
<body>
  <h1>Form Login</h1>
  <form action="/login" method="POST">
    @csrf
    <label for="id-user">
      <p>id</p>
      <input type="text" name="id" id="id-user">
    </label>
    <label for="password">
      <p>password</p>
      <input type="password" name="password" id="password">
    </label>
    <button type="submit">login</button>
  </form>
</body>
</html>