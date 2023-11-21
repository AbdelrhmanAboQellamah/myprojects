
@extends('layout')
@section('title','create')   
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            creates computer  
        </div>
        <div>
            <form action="{{route('computers.store')}}" method="POST">
                @csrf
                {{-- @method('put') --}}
                <div>
                    <label for="computer-name">Computer name</label>
                    <input id="computer-name" name="computer-name" value="{{old('computer-name')}}" type="text">
                    @error('computer-name')
                        <div class="form-error">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="computer-origin">Computer origin</label>
                    <input id="computer-origin" name="computer-origin" value="{{old('computer-origin')}}" type="text">
                    @error('computer-origin')
                    <div class="form-error">
                        {{$message}}
                    </div>
                @enderror
                </div>
                <div>
                    <label for="computer-price">Computer price</label>
                    <input id="computer-price" name="computer-price" value="{{old('computer-price')}}" type="text">
                    @error('computer-price')
                    <div class="form-error">
                        {{$message}}
                    </div>
                @enderror
                </div>
                <div>
                    <button type="submit">submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
