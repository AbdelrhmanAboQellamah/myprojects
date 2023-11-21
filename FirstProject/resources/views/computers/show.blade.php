
@extends('layout')
@section('title','computer')   
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            computer  
        </div>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <div class="flex items-center">
                        <h3>{{$computer['name']}} made in <strong>{{$computer['origin']}}</strong>{{$computer['price']}}$</h3>
                <div class="flex items-center"></div>
        </div>
        <a class="edi-bu" href="{{route('computers.edit', $computer->id)}}"></a>
    </div>
</div>

<a class="edi-bun"  href="{{route('computers.edit', $computer->id)}}">edit</a>
<form class="deee" action="{{route('computers.destroy', $computer->id)}}" method="POST">
@csrf
@method('delete')
<input type="submit" value="delete">
</form>
@endsection
