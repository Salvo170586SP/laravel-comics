@extends('layouts.main')

@section('content')
<section id="box-card">
    <div class="container d-flex">
        @forelse($cards as $card)
        <div class="card">
            <figure>
                <img src="{{ $card['thumb'] }}" alt="">
            </figure>
            <h3>{{ $card['series'] }}</h3>
        </div>
        @empty
        <h3>NON CI SONO COMICS DISPONIBILI</h3>
        @endforelse

        <a href="#">LOAD MORE</a>
    </div>
</section>
@endsection