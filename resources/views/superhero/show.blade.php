@extends('main/layout')

@section('content')
    <div class="page page-superhero">

        <section class="info">

            <img class="portrait" src="{{ asset('img/'.$superhero->slug.'.jpg') }}" alt="">

            <div class="data">
                <h1>{{ $superhero->name }}</h1>

                <div class="story">
                    {!! nl2br($superhero->story) !!}
                </div>
            </div>

            <div class="service">
                <h2>Ready to fight</h2>
                From {{ date('g:i A', strtotime($superhero->fights_from)) }} to {{ date('g:i A', strtotime($superhero->fights_until)) }}.

                <div class="status unavailable">Current status: <span>Not ready</span></div>
            </div>

        </section>

        <section class="superhero-assign">
            <h2>Call a superhero</h2>

            <form action="{{ route('emergency', $superhero->slug )}}" method="post">
                @csrf

                <input type="text" name="subject" placeholder="What's your crisis?">

                <textarea name="description" placeholder="Thorough description"></textarea>

                <input type="submit" value="Call for help">
            </form>
        </section>

    </div>
@endsection
