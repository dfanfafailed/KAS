@extends('layouts.main')
@section('container')
 
  <div class="bg-gray-800 pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h3 class="font-bold pl-2">Daftar Siswa</h3>
    </div>
  </div>

  

  <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-3 my-5">
    <a href="/user/add">+siswa</a>
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
                    peran
                </th>
                <th scope="col" class="px-2 py-3">
                  edit
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
                  @if ($item->keanggotaan == 2)
                      <p>Bendahara</p>
                  @else
                      <p>Siswa</p>
                  @endif
                </td>
                <td class="px-2 py-4"><a href="/user/{{$item->id}}">edit</a></td>
                @endforeach
            </tr>
        </tbody>
    </table>
  </div>


  @endsection