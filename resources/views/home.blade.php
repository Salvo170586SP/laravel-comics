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

    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="menu-site">
                    <div class="left-menu">
                        <h3>DC COMICS</h3>
                        <ul>
                            <li><a href="#">Caractsers</a></li>
                            <li><a href="#">Comics</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Games</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                        <h3>SHOP</h3>
                        <ul>
                            <li><a href="#">Shop DC</a></li>
                            <li><a href="#">Shop DC Collectibles</a></li>
                        </ul>
                    </div>

                    <div class="right-menu">
                        <h3>DC</h3>
                        <ul>
                            <li><a href="#">Caractsers</a></li>
                            <li><a href="#">Comics</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Games</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>

                </div>




            </div>
        </div>
        <div class="footer-bottom">
            <div class="container d-flex">
                <a href="#">SIGN-UP NOW</a>
                <div class="social">
                    <h4>FOLLOW US</h4>
                    <figure>
                        <img src="{{ asset('img/footer-facebook.png')}}" alt="">
                        <img src="{{ asset('img/footer-twitter.png')}}" alt="">
                        <img src="{{ asset('img/footer-youtube.png')}}" alt="">
                        <img src="{{ asset('img/footer-pinterest.png')}}" alt="">
                        <img src="{{ asset('img/footer-periscope.png')}}" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>