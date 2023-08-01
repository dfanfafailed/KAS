@extends('layouts.main')
@section('container')

<div class="bg-gray-800 pt-3">
  <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
      <h3 class="font-bold pl-2">Rincian Kas</h3>
  </div>
</div>
  
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-3 my-5">
  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
              <th scope="col" class="px-2 py-3">
                  id dana
              </th>
              <th scope="col" class="px-2 py-3">
                  id kas
              </th>
              <th scope="col" class="px-2 py-3">
                  nis
              </th>
              <th scope="col" class="px-2 py-3">
                  nama
              </th>
              <th scope="col" class="px-2 py-3">
                  kas
              </th>
              <th scope="col" class="px-2 py-3">
                kas masuk
              </th>
              <th scope="col" class="px-2 py-3">
                status
              </th>
              <th scope="col" class="px-2 py-3">
                  <span class="sr-only">Edit</span>
              </th>
          </tr>
      </thead>
      <tbody>
        @foreach ($dana as $item)
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$item->id}}
              </td>
              <td class="px-2 py-4">
                {{$item->id_kas}}
              </td>
              <td class="px-2 py-4">
                {{$item->id_siswa}}
              </td>
              <td class="px-2 py-4">
                {{$item->name}}
              </td>
              <form action="/kas/{{$item->id}}" method="POST">
                @csrf
                @method('PUT')
                <td class="px-2 py-4">
                  {{$item->uang}}
                </td>
                <td class="px-2 py-4">
                  <input type="number" value="{{$item->dana_masuk}}" name="kas_masuk">
                </td>
                <td class="px-2 py-4">
                  {{$item->status}}
                </td>

              <td class="px-2 py-4 text-right">
                  <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</button>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
</div>
@endsection