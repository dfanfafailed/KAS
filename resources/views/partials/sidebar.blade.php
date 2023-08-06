<div class="bg-gray-800 shadow-xl h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48">
    
    <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
        <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
            <li class="mr-3 flex-1">
                <a href="/" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 {{$title == 'Dashboard' ? 'border-b-2 border-blue-600':'border-b-2 border-gray-800 hover:border-pink-500'}}">
                    <i class="fas fa-home pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base {{$title == 'Dashboard' ? 'text-white md:text-white block': ' text-gray-600 md:text-gray-400'}} block md:inline-block">Dashboard</span>
                </a>
            </li>
            <li class="mr-3 flex-1">
                <a href="{{ route('daftar.kas') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white {{$title == 'Kas' ? 'border-b-2 border-blue-600':'border-b-2 border-gray-800 hover:border-pink-500'}}">
                    <i class="fas fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base {{$title == 'Kas' ? 'text-white md:text-white block': ' text-gray-600 md:text-gray-400'}}  block md:inline-block">Kas</span>
                </a>
            </li>
            <li class="mr-3 flex-1">
                <a href="{{ route('siswa') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white {{$title == 'Siswa' ? 'border-b-2 border-blue-600':'border-b-2 border-gray-800 hover:border-pink-500'}} ">
                    <i class="fas fa-chart-area pr-0 md:pr-3 {{$title == 'Siswa' ? 'text-blue-600':''}} "></i><span class="pb-1 md:pb-0 text-xs md:text-base {{$title == 'Siswa' ? 'text-white md:text-white block': ' text-gray-600 md:text-gray-400'}}  md:inline-block">Siswa</span>
                </a>
            </li>
            <li class="mr-3 flex-1">
                <a href="/pengeluaran" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white {{$title == 'Pengeluaran' ? 'border-b-2 border-blue-600':'border-b-2 border-gray-800 hover:border-pink-500'}}">
                    <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base {{$title == 'Pengeluaran' ? 'text-white md:text-white block': ' text-gray-600 md:text-gray-400'}}   md:inline-block">Pengeluaran</span>
                </a>
            </li>
        </ul>
    </div>
</div>