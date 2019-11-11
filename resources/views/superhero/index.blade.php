@extends('main/layout')

@section('content')

    <h1>The superheroes list</h1>


    @foreach($superheroes as $hero) 
        <div>
            <h2>{{ $hero->name }}</h2>
            {{-- <img src="{{ }}" alt=""> --}}
            <p> {{ $hero->story }}</p>
            <h5>Ready to fight:</h5>
            <p>
                From {{ date('g:i A', strtotime($hero->fights_from)) }} to {{ date('g:i A', strtotime($hero->fights_until)) }}
            </p>
        </div>
    @endforeach

@endsection