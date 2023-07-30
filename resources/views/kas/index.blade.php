<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Kas</title>
</head>
<body>
  <h1>Form Kas</h1>
  @foreach ($kas as $item)
      <div>
        <h5>{{ $item->tanggal }}</h5>
        <p>id kas : {{ $item->id }}</p>
      </div>
  @endforeach
</body>
</html>