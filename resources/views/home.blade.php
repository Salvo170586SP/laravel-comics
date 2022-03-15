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
    <div class="container">
        <header>
            <figure>
                <img src="{{ asset('img/dc-logo.png')}}" alt="logo">
            </figure>
            <nav>
                <ul>
                    <li><a href="#">CHARACTERS</a></li>
                    <li><a href="#">COMICS</a></li>
                    <li><a href="#">MOVIES</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">GAMES</a></li>
                    <li><a href="#">COLLECTIBLES</a></li>
                    <li><a href="#">VIDEOS</a></li>
                    <li><a href="#">FANS</a></li>
                    <li><a href="#">NEWS</a></li>
                    <li><a href="#">SHOP</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <main>
        <section id="jumbotron">
            <div class="series">CURRENT SERIES</div>
        </section>

        <section id="box-card">
            <div class="container">
                <h2> --- qui ci saranno le card ---</h2>
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