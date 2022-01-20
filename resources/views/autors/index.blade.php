@extends('layouts.main')
@section('content')
    @foreach($autors as $autor)
    <div class="row w-75 m-auto py-2 my-2 border">
        <div class="col-1 text-center"><p class="mb-0">{{ $autor->id }}</p></div>
        <div class="col-5 text-center"><p class="mb-0">{{ $autor->name }}</p></div>
        <div class="col-6 text-center">
            <a href="{{route('autors.show', $autor)}}">Show</a>
        </div>
    </div>
    @endforeach
@endsection