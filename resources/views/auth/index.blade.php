@extends('layouts.link')
@section('script')
  
      
<div class="container mx-auto px-6">
  <div class="mt-32 max-w-xl mx-auto h-90 rounded-xl shadow-xl">
    @if(session('success'))
    <p class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-200 " role="alert">{{ session('success') }}</p>
    @endif
    @if($errors->any()) 
    @foreach($errors->all() as $err)
    <p class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-300" role="alert">{{ $err }}</p>
    @endforeach 
    @endif

      <form action="/login" method="POST">
        @csrf
      <div class="bg-slate-900 shadow-md rounded-xl px-8 pt-6 pb-8 mb-4 flex flex-col">
        <div class="mb-4">
          <label class="block text-grey-darker text-sm font-bold text-white mb-2" for="id">
            Id
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="id" type="text" placeholder="Id" name="id">
        </div>
        <div class="mb-6">
          <label class="block text-grey-darker text-sm font-bold text-white mb-2" for="password">
            Password
          </label>
          <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3" id="password" type="password" placeholder="password" name="password">
        </div>
        <div class="flex items-center justify-between">
          <button class="bg-blue hover:bg-purple-900 bg-purple-700 text-white font-bold py-2 px-4 rounded-lg hover:ring-4" type="submit">
            Sign In
          </button>
        </div>
        </div>
      </form>
  </div>
</div>  

@endsection