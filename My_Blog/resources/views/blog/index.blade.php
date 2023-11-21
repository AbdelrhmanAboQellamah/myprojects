
@extends('layouts.app')

@section('content')

@if (session()->has('message'))
<div class="bg-red-900 text-center py-4 lg:px-4">
    <div class="p-2 bg-red-800 items-center text-red-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
      <span class="flex rounded-full bg-red-500 uppercase px-2 py-1 text-xs font-bold mr-3">Delete</span>
      <span class="font-semibold mr-2 text-left flex-auto">{{session()->get('message')}}</span>
      <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
  </div>
@endif

<div class="container m-auto text-center pt-15 pd-5">
        <h1 class="text-6xl font-bold">All Postes</h1>
</div>



    @if (Auth::check())
                
        <div class="container sm:grid  mx-auto  p-5 border-b border-red-100">
            <a class="bg-blue-800 text-blue-l00 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start hover:bg-blue-500 hover:text-blue-100 transition duration-700" href="/blog/create">Create a new post</a>
        </div>
    @endif

@foreach ($posts as $post)
<div class=" container flex sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b border-red-100">

    <div class="flex">
        <img class="object-cover" src="/images/{{$post->image_path}}" alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-4xl py-5">{{$post->title}}</h2>
        <div>
            <span class="text-gray-500 italic">By : {{$post->user->name}}</span>
            <span class="text-gray-500 italic">On : {{date('d-m-Y',strtotime($post->updated_at))}}</span>
            <p class="text-l text-gray-800 py-7 leading-5">{{$post->description}}</p>
            <a class="bg-blue-700 text-blue-l00 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start hover:bg-blue-500 hover:text-blue-100 transition duration-400" href="/blog/{{$post->slug}}">Read More</a>
        </div>
    </div>

</div>

@endforeach




@endsection
