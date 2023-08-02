@extends('layouts.main')
@section('container')

<div class="bg-gray-800 pt-3">
  <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
      <h3 class="font-bold pl-2">Tambah pinjaman</h3>
  </div>
</div>

<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-10 my-5 ">

<form action="/pengeluaran" method="POST">
  @csrf
  <div class="relative z-0 w-full mb-6 group">
      <input type="date" name="tanggal" id="tanggal" value="{{ $tanggal }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
      <label for="tanggal" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal</label>
  </div>
  <div class="relative z-0 w-full mb-6 group">
      <input type="text" name="excerpt" id="excerpt" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
      <label for="excerpt" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Keterangan</label>
  </div>
  <div class="relative z-0 w-full mb-6 group">
    <div class="relative z-0 w-full mb-6 group ">
      <label for="countries" class="block mb-2 text-sm text-gray-900 dark:text-white">Nama Siswa</label>
        <select id="siswa" name="id_siswa" class="border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
          @foreach ($siswa as $item)
              <option value="{{ $item->id }}">{{ $item->name }}</option>
          @endforeach
        </select>
    </div>
  </div>
  <div class="relative z-0 w-full mb-6 group">
      <input type="number" name="uang" id="uang" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
      <label for="uang" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">uang</label>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">simpan</button>
</form>
</div>

    {{-- <form action="/pengeluaran" method="POST">
      @csrf
      <p>tanggal</p>
      <input type="date" name="tanggal" value="{{$tanggal}}">
      <label for="excerpt">
        <p>keterangan</p>
        <input type="text" name="excerpt" id="excerpt">
      </label>
      <label for="siswa">
        <p>nama siswa</p>
        <select name="id_siswa" id="siswa">
          @foreach ($siswa as $item)
           <option value="{{$item->id}}">{{$item->name}}</option>
          @endforeach
        </select>
      </label>
      <label for="uang">
        <p>uang digunakan</p>
        <input type="number" name="uang" id="uang">
      </label>
      <button type="submit">simpan</button>
    </form> --}}

@endsection