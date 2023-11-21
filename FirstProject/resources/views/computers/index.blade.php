@extends('layout')
@section('title','computer')   
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <h1> computers  </h1>
        </div>
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <div class="flex items-center">
                       @if (count($computers)>0)
                       <ul>
                       @foreach ($computers as $computer)
                            <a href="{{route('computers.show',['computer'=>$computer['id']])}}">
                            <li>
                                 <h3>{{$computer['name']}}</h3> made in <strong>{{$computer['origin']}} </strong>{{$computer['price']}}$
                            </li></a>
                       @endforeach
                        </ul>
                        @else
                            <p>no computer here</p>
                       @endif
                    </div>
                <div class="flex items-center"></div>
        </div>
    </div>
</div>
@endsection