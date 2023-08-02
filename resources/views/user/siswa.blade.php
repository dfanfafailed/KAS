@extends('layouts.main')
@section('container')
 
  <div class="bg-gray-800 pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h3 class="font-bold pl-2">Daftar Kas</h3>
    </div>
  </div>

  <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-3 my-5">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-2 py-3">
                    nis
                </th>
                <th scope="col" class="px-2 py-3">
                    nama
                </th>
                <th scope="col" class="px-2 py-3">
                    anggota
                </th>
            </tr>
        </thead>
        <tbody>
          @foreach ($siswa as $item)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{$item->id}}
                </td>
                <td class="px-2 py-4">
                  {{$item->name}}
                </td>
                <td class="px-2 py-4">
                  {{$item->keanggotaan}}
                </td>
                @endforeach
            </tr>
        </tbody>
    </table>
  </div>


  @endsection