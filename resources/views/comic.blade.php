@extends('layouts.main')


@section('content')

<section id="title-card">

</section>
<section id="comic">
    <div class="container">
        <div class="box-comic">
            <div class="info-comic">
                <h2>ACTION COMICS #1000</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita perferendis, quas earum corrupti animi quae tempore distinctio obcaecati ea odio recusandae placeat, in laboriosam rerum? Inventore rerum sit necessitatibus.</p>
            </div>
            <div class="img-comic">
                <figure>
                    <img src="{{ asset('img/adv.jpg') }}" alt="img">
                </figure>
            </div>
        </div>
    </div>
</section>

@endsection