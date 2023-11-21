@extends('layouts.app')

@section('content')



<div class="container m-auto text-center pt-15 pd-5">
    <h1 class="text-6xl font-bold">Create a new post</h1>
</div>

<div class="container m-auto pt-15 pd-5">
    <form 
        action="/blog" 
        method="POST"
        enctype="multipart/form-data">
        @csrf
    
        <input 
            type="text"
            class="w-full h-20 text-3xl rounded-lg shadow-lg border-b p-15 mb-5"
            name="title"
            placeholder="Title"
        >


        
        <textarea  
        class=" w-full h-60  text-xl rounded-lg shadow-lg border-b p-15 mb-5" 
        placeholder="Write Your Artical Here..." 
        name="description" ></textarea>

        <div class="py-15">
            <label class="bg-gray-200 hover:bg-gray-700 text-gray-700 hover:text-gray-200 transition duration-500 cursor-pointer p-5 rounded-lg font-bold uppercase">
                <span>select an image to uploud </span>
                <input type="file" name="image" class="hidden">
            </label>
        </div>    
    
    
         <button 
         type="submit" 
         class="bg-green-700 hover:bg-green-200
          text-green-200 hover:text-green-700 
          transition duration-500 cursor-pointer
           p-5 rounded-lg font-bold uppercase"
           >Submit The Post</button>
    </form>
</div>



@endsection


