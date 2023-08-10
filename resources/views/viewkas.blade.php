<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> <!--Replace with your tailwind.css once created-->
        <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body>
    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-xl text-white ">
            <div class="flex flex-wrap items-center">
                <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
                    <a href="#">
                        <span class="text-xl pl-2">Kas</span>
                    </a>
                </div>
                
                {{-- <div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2">
                    <span class="relative w-full">
                        <input type="search" placeholder="Search" class="w-full bg-gray-900 text-white transition border border-transparent focus:outline-none focus:border-gray-400 rounded py-3 px-2 pl-10 appearance-none leading-normal">
                        <div class="absolute search-icon" style="top: 1rem; left: .8rem;">
                            <svg class="fill-current pointer-events-none text-white w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                            </svg>
                        </div>
                    </span>
                </div> --}}
        
                <div class="flex flex-1 pt-2 content-center justify-end  md:justify-end">
                    <ul class="list-reset flex justify-between md:flex-none items-center">
                        <li class="flex-1 md:flex-none md:mr-3">
                            <div class="relative inline-block">
                                <button onclick="toggleDD('myDropdown')" class="drop-button text-white focus:outline-none"> <span class="pr-2"></span>{{auth()->user()->name}}<svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg></button>
                                <div id="myDropdown" class="dropdownlist absolute bg-gray-800 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
                                    <input type="text" class="drop-search p-2 text-gray-600" placeholder="Search.." id="myInput" onkeyup="filterDD('myDropdown','myInput')">
                                    <div class="border border-gray-800 p-2"></div> 
                                    <a href="{{ route('logout') }}" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
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
                @if ($kas->id_kategori == 1)
                <th scope="col" class="px-2 py-3">
                  kas
                </th>
                @endif
                
                <th scope="col" class="px-2 py-3">
                  {{$kas->kategori->title}} masuk
                </th>
                @if ($kas->id_kategori == 1)
                <th scope="col" class="px-2 py-3">
                    status
                  </th>
                @endif
                
            </tr>
        </thead>
        <tbody>
          @foreach ($dana as $item)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white kas_id">
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
                  @if ($kas->id_kategori == 1)
                  <td class="px-2 py-4">
                    {{$item->uang}}
                  </td>
                  @endif
                 
                  @if ($item->dana_masuk == $item->uang && $item->id_kategori == 1)
                  <td class="px-2 py-4">
                    {{$item->dana_masuk}}
                  </td>
                  <td class="px-2 py-4">
                    Lunas
                  </td>
                  @else
  
                  <td class="px-2 py-4">
                    
                    @if ($kas->id_kategori !=1 && $item->dana_masuk > 0)
                      <p>{{$item->dana_masuk}}</p>
                    @else
                    {{ $item->dana_masuk }}
                    @endif
                   
                   
                    
                    @if ($kas->id_kategori == 1)
                   
                    </td>
                      <td class="px-2 py-4">
                      <p>kurang {{$item->uang - $item->dana_masuk}}</p>
                    </td>
                    @endif
                    
                  
                  @endif
                 
                
  
                
            </tr>
          </form>
            @endforeach
        </tbody>
    </table>
</div>
<script>
            
    /*Toggle dropdown list*/
    function toggleDD(myDropMenu) {
        document.getElementById(myDropMenu).classList.toggle("invisible");
    }
    /*Filter dropdown options*/
    function filterDD(myDropMenu, myDropMenuSearch) {
        var input, filter, ul, li, a, i;
        input = document.getElementById(myDropMenuSearch);
        filter = input.value.toUpperCase();
        div = document.getElementById(myDropMenu);
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }
    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
            var dropdowns = document.getElementsByClassName("dropdownlist");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (!openDropdown.classList.contains('invisible')) {
                    openDropdown.classList.add('invisible');
                }
            }
        }
    }
</script>
</body>