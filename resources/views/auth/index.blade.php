@extends('layouts.link')
@section('script')
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0"/>
<div class="login">
  
  <h2>Login</h2>

  <form class="login-form" action="/login" method="POST" id="login-form">
    @csrf
    <div class="textbox">
      <input type="text" placeholder="Masukan Nis" name="id" id="id"/>
      <span class="material-symbols-outlined"> account_circle </span>
    </div>
    <div class="textbox">
      <input type="password" placeholder="Masukan Password" id="password" name="password"/>
      <span class="material-symbols-outlined"> lock </span>
    </div>
    <button type="submit">LOGIN</button>
  </form>
</div>

      
{{-- <div class="container mx-auto px-6">
  <div class="mt-32 max-w-xl mx-auto h-90 rounded-xl shadow-xl">

      <form action="/login" method="POST" id="login-form">
        @csrf
      <div class="bg-slate-900 shadow-md rounded-xl px-8 pt-6 pb-8 mb-4 flex flex-col">
        <div class="mb-4">
          <label class="block text-grey-darker text-sm font-bold text-white mb-2" for="id">
            Id
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="id" type="text" placeholder="Id" name="id">
        </div>
        <div class="mb-6">
          <label class="block text-grey-darker text-sm font-bold text-white mb-2" for="password">
            Password
          </label>
          <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3" id="password" type="password" placeholder="password" name="password">
        </div>
        <div class="flex items-center justify-between">
          <button id="btn-login" class="bg-blue hover:bg-purple-900 bg-purple-700 text-white font-bold py-2 px-4 rounded-lg hover:ring-4" type="submit">
            Sign In
          </button>
        </div>
        </div>
      </form>

      <div id="alert"></div>

  </div>
</div>   --}}

<script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            var loginForm = document.getElementById('login-form');

            loginForm.addEventListener('submit', function (event) {
                event.preventDefault();
                var formData = new FormData(loginForm);

                fetch('/login', {
                    method: 'POST',
                    body: formData
                })
                .then(function (response) {
                    return response.json();
                })
                .then(function (data) {
                    if (data.success) {
                        Swal.fire({
                            title: 'Login Berhasil!',
                            text: data.message,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(function() {
                            window.location.href = '/'; 
                        });
                    } else {
                        Swal.fire({
                            title: 'Login Gagal!',
                            text: data.message,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                })
                .catch(function (error) {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Terjadi kesalahan. Silakan coba lagi.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                });
            });
        });
</script>

@endsection