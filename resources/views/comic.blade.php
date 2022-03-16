@extends('layouts.main')


@section('content')

<section id="title-card">

</section>
<section id="comic">
    <div class="container">
        <div class="box-comic">

            <div class="info-comic">
                <h2>ACTION COMICS #1000</h2>
                
                <div class="buy">
                    <div class="price"> 
                        <span>U.S Price: <span class="price-item"> $19.99</span></span>
                        <span>Available</span>
                    </div>
                    <div class="check"> Check Availability</div>                    
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita perferendis, quas earum corrupti animi quae tempore distinctio obcaecati ea odio recusandae placeat, in laboriosam rerum? Inventore rerum sit necessitatibus.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita perferendis, quas earum corrupti animi quae tempore distinctio obcaecati ea odio recusandae placeat, in laboriosam rerum? Inventore rerum sit necessitatibus.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita perferendis, quas earum corrupti animi quae tempore distinctio obcaecati ea odio recusandae placeat, in laboriosam rerum? Inventore rerum sit necessitatibus.
                </p>
            </div>
            <div class="img-comic">
                <p>ADVERTISEMENT</p>
                <figure>
                    <img src="{{ asset('img/adv.jpg') }}" alt="img">
                </figure>
            </div>
        </div>
    </div>
</section>

@endsection