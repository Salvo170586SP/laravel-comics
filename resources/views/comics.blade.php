@extends('layouts.main')


@section('content')

<section id="title-card">
    <img src="{{ $comic['thumb'] }}" alt="{{$comic['title']}}">
</section>

<section id="comic">
    <div class="container">
        <div class="box-comic">

            <div class="info-comic">
                <h2>{{$comic['title']}}</h2>

                <div class="buy">
                    <div class="price">
                        <span>U.S Price: <span class="price-item">{{$comic['price']}}</span></span>
                        <span>Available</span>
                    </div>
                    <div class="check"> Check Availability</div>
                </div>
                <p>{{$comic['description']}}</p>
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
<section id="detail-comic">
    <div class="container">
        <div class="d-flex">
            <div class="talent">
                <h4>Talent</h4>
                <div class="talent-item">
                    <span>Art by</span>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum officia accusamus id temporibus tempore quia est asperiores vitae odit, consectetur iure. Explicabo dicta, illum id incidunt enim veniam quia sunt?</p>
                </div>
                <div class="talent-item">
                    <span>Written by</span>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum officia accusamus id temporibus tempore quia est asperiores vitae odit, consectetur iure. Explicabo dicta, illum id incidunt enim veniam quia sunt?</p>
                </div>
            </div>
            <div class="specs">
                <h4>Specs</h4>
                <div class="specs-item">
                    <span>Series: </span>
                    <p>{{$comic['series']}}</p>
                </div>
                <div class="specs-item">
                    <span>U.S Price: </span>
                    <p>{{$comic['price']}}</p>
                </div>
                <div class="specs-item">
                    <span>On Sale Date: </span>
                    <p>{{$comic['title']}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="option-item">
        <div class="item-icon">
            <span>DIGITAL COMICS</span>
            <figure>
                <img src="{{ asset('img/buy-comics-digital-comics.png')}}" alt="digital">
            </figure>
        </div>
        <div class="item-icon">
            <span>SHOP DC</span>
            <figure>
                <img src="{{ asset('img/buy-comics-subscriptions.png')}}" alt="subscr">
            </figure>
        </div>
        <div class="item-icon">
            <span>COMIC SHOP LOCATOR</span>
            <figure>
                <img src="{{ asset('img/buy-comics-shop-locator.png')}}" alt="shop">
            </figure>
        </div>
        <div class="item-icon">
            <span>SUBSCRIPTIONS</span>
            <figure>
                <img src="{{ asset('img/buy-comics-merchandise.png')}}" alt="merchandise">
            </figure>
        </div>
    </div>
</section>



@endsection