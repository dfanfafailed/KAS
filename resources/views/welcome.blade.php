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

    <body class=" font-sans leading-normal tracking-normal">
    
                <div class="bg-gray-800 pt-3">
                    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-xl text-white ">
                        <div class="flex flex-wrap items-center">
                            <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
                                <a href="#">
                                    <span class="text-xl pl-2">Kas</span>
                                </a>
                            </div>
                    
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
               
                <div class="flex flex-wrap">
                    @foreach ($kas as $item)
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mx-2 my-0 ">
                        
                          <h1 class="mb-5 font-semibold text-xl">Datar {{$item->kategori->title}}</h1>
                          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$item->tanggal}}</p>
                          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$item->bulan}}</p>
                          @if ($item->uang == 0)
                          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">seikhlasnya</p>
                          @else
                          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Rp.{{$item->uang}}</p>
                          @endif
                          
                         
                          <a href="{{ route('detail.kas',$item->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                              Detail
                              <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                              </svg>
                          </a>
                        </div>
                        <!--End Metric Card-->
                    </div>
                    @endforeach
                  </div>
    
    
                
            </div>
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
</html>
