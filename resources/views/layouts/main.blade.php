<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disc Comics</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    @include('includes.header')

    <main>
        <section id="jumbotron">
            <div class="series">CURRENT SERIES</div>
        </section>

        @yield('content')

        <section id="options">
            <div class="container">
                <div class="box-options">
                    <div class="item-icon">
                        <figure>
                            <img src="{{ asset('img/buy-comics-digital-comics.png')}}" alt="">
                        </figure>
                        <span>DIGITAL COMICS</span>
                    </div>
                    <div class="item-icon">
                        <figure>
                            <img src="{{ asset('img/buy-comics-merchandise.png')}}" alt="">
                        </figure>
                        <span>DC MERCHANDISE</span>
                    </div>
                    <div class="item-icon">
                        <figure>
                            <img src="{{ asset('img/buy-comics-subscriptions.png')}}" alt="">
                        </figure>
                        <span>SUBSCRIPTIONS</span>
                    </div>
                    <div class="item-icon">
                        <figure>
                            <img src="{{ asset('img/buy-comics-shop-locator.png')}}" alt="">
                        </figure>
                        <span>COMIC SHOP LOCATOR</span>
                    </div>
                    <div class="item-icon">
                        <figure>
                            <img src="{{ asset('img/buy-dc-power-visa.svg')}}" alt="">
                        </figure>
                        <span>DC POWER VISA</span>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('includes.footer')
</body>

</html>