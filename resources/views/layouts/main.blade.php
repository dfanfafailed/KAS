@include('layouts.link')
    <body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">
        
        @include('partials.navbar')
        
        
        <div class="flex flex-col md:flex-row">

            @include('partials.sidebar')
    
            <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
                @yield('container')
            </div>
        </div>

        
        @stack('scripts')
    </body>
</html>
