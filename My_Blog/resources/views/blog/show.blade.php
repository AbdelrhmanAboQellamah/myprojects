@extends('layouts.app')

@section('content')

@if (session()->has('message'))
<div class="bg-indigo-900 text-center py-4 lg:px-4">
    <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
      <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
      <span class="font-semibold mr-2 text-left flex-auto">{{session()->get('message')}}</span>
      <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
  </div>
@endif

<div class="container m-auto text-center pt-15 pd-5">
    <h1 class="text-6xl font-bold">{{$post->title}}</h1>
</div>

<div class="container m-auto text-center pt-15 pd-5">
    <span class="text-gray-500 italic">By : {{$post->user->name}}</span>
    <span class="text-gray-500 italic">On : {{date('d-m-Y',strtotime($post->updated_at))}}</span>
</div>

<div class="container m-auto  pt-15 pd-5">
    <div class="flex h-96">
        <img class="object-cover w-full" src="/images/{{$post->image_path}}" alt="">
    </div>
    <p class="text-l text-gray-800 py-7 leading-5">{{$post->description}}</p>

    @if (Auth::user()&& Auth::user()->id==$post->user_id)
    <a class="bg-blue-700 text-blue-l00 py-4 px-5 mt-6 inline-block
    rounded-lg font-bold uppercase text-l place-self-start 
    hover:bg-blue-500 hover:text-blue-100 transition duration-600" 
    href="/blog/{{$post->slug}}/edit">Edit Post</a>
    
    <form action="/blog/{{$post->slug}}"
        method="post"
        class="inline-block">
        @csrf
        @method('delete')

        <button class="bg-red-700 text-red-l00 py-4 px-5 mt-6 inline-block
    rounded-lg font-bold uppercase text-l place-self-start 
    hover:bg-red-500 hover:text-red-100 transition duration-600" >Delete Post</button>

    </form>

    @endif
</div>


@endsection


