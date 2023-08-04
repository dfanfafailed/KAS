@extends('layouts.main')
@section('container')
    
<div class="bg-gray-800 pt-3">
  <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
      <h3 class="font-bold pl-2">Daftar Pengeluaran</h3>
  </div>
</div>

<button href="" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="mx-10 mt-5 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  Tambah Pengeluaran
</button>

<!--Modal main-->
@include('pengeluaran.add')

<div class="flex flex-wrap">
  @foreach ($pengeluaran as $item)
<div class="w-full md:w-1/2 xl:w-1/3 p-6">
  <!--Metric Card-->
  <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mx-2 my-0 ">
  
    <h1 class="mb-5 font-semibold text-xl">Datar Pinjaman</h1>
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">tanggal : </label>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$item->tanggal}}</p>

    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ket : </label>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$item->excerpt}}</p>

    @if ($item->id_siswa != NULL)
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">nama :</label>
          <p>{{$item->name}}</p>
          
        @if ($item->uang_kembali < $item->uang)
        <div class="my-5">
          <a href="/pembayaran/{{$item->id}}" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 my-10">bayar</a>
        </div>
        @endif  
        
      @endif

    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">keluar : </label>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Rp.{{$item->uang}}</p>
   
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">nominal : </label>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Rp.{{$item->uang_kembali}}</p>

  </div>
  <!--End Metric Card-->
</div>


 

@endsection
