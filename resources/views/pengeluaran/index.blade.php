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
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative w-full max-w-2xl max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <!-- Modal header -->
          <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
              <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                  Tambah Pengeluaran
              </h3>
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                  <span class="sr-only">Close modal</span>
              </button>
          </div>
          <!-- Modal body -->
          <div class="p-0 space-y-6">
            <form action="/pengeluaran" method="POST">
            @csrf
            <div class="my-5 mx-10">
            <div class="relative z-0 w-full mb-6 group ">
                <input type="date" name="tanggal" id="tanggal" value="{{ $tanggal }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required />
                <label for="tanggal" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">tanggal</label>
            </div>
            <div class="relative z-0 w-full mb-6 group ">
                <input type="text" name="excerpt" id="excerpt" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required />
                <label for="excerpt" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">keterangan</label>
            </div>
            <div class="relative z-0 w-full mb-6 group ">
              <label for="countries" class="block mb-2 text-sm text-gray-900 dark:text-white">Nama Siswa</label>
                <select id="siswa" name="id_siswa" class="border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                  @foreach ($siswa as $item)
                      <option value="{{ $item->id }}">{{ $item->name }}</option>
                  @endforeach
                </select>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="number" name="uang" id="uang" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="uang" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">uang</label>
            </div>
          </div>
          
          </div>
          <!-- Modal footer -->
          <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
              <button data-modal-hide="defaultModal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
          </div>
      </div>
  </div>
</div>

  @foreach ($pengeluaran as $item)
  <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-10 my-5">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">tanggal : </label>
      <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$item->tanggal}}</p>
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">keterangan : </label>
      <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$item->excerpt}}</p>
      @if ($item->id_siswa != NULL)
      
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">nama :</label>
          <p>{{$item->user->name}}</p>
          <div class="my-5">
          <a href="/pembayaran/{{$item->id}}" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 my-10">bayar</a>
        </div>
      @endif
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">kas keluar : </label>
      <p>{{$item->uang}}</p>
  
    </a>
  </div>
  @endforeach

  {{-- <a href="/pengeluaran/add">+pengeluaran</a>
  @foreach ($pengeluaran as $item)
      <p>tgl pengeluaran: {{$item->tanggal}}</p>
      <p>keterangan: {{$item->excerpt}}</p>
      @if ($item->id_siswa != NULL)
          <p>{{$item->user->name}}</p>
          <a href="/pembayaran/{{$item->id}}">bayar</a>
      @endif
      <p>kas keluar: {{$item->uang}}</p>
  @endforeach --}}

@endsection
