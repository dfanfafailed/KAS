@extends('layouts.link')
@section('script')
  
<body>

  <div class="mt-32 max-w-xl mx-auto h-96 bg-slate-400 rounded-lg">

    <div class="my-20 mx-10 mx-auto">
      
      <h1 class="">Form Login</h1>
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
     
    </div>
  </div>
</body>




@endsection