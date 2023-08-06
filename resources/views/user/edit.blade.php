@extends('layouts.main')
@section('container')
 
  <div class="bg-gray-800 pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h3 class="font-bold pl-2">Edit Siswa</h3>
    </div>
  </div>
  
<form class="my-10 mx-10" action="/user/{{ $siswa->id }}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-6 ">
    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
    <input type="text" name="name" id="name" value="{{$siswa->name}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>

  

  <label for="password">
    <p>keanggotaan</p>
    <select name="keanggotaan" id="peran">
      <option value="1" {{$siswa->keanggotaan == 1 ? 'selected' : ''}}>siswa</option>
      <option value="2" {{$siswa->keanggotaan == 2 ? 'selected' : ''}}>bendahara</option>
    </select>
  </label>


  <button type="submit" onclick="toggle()" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center submit dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>
  <script type="text/javascript">
    const submit = document.querySelector(".submit");
    function toggle(){
      alert('Data berhasil di edit')
    }
  </script>
@endsection