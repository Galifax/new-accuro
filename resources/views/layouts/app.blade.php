<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=768px, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-161532378-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-161532378-1');
</script>
    <!-- Styles -->



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=cyrillic,cyrillic-ext,latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/css/lightgallery.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <header>
            <div class="container">
                <nav>
                    <a style="margin:auto" class="logo" href="/">
                        <img style="max-width:240px" src="/images/logo.png" alt=""></a>
                    <ul>
                        <li>
                            <a href="/">home</a>
                        </li>
                        <li>
                            <a href="/products">products</a>
                        </li>
                        <li>
                            <a href="/3d-model"> 3d-model</a>
                        </li>
                        <li>
                            <a href="/contacts"> contact us</a>
                        </li>
                    </ul>

                    <!-- <ul class="navbar-nav ml-auto">
                        Authentication Links
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul> -->


                    <a href="tel:0442277202" class="phone">044 22 77 202</a>
                </nav>
            </div>
        </header>

        <div style="overflow-x: hidden;">
            @yield('content')
        </div>

        <footer style="margin-top: 120px;">

            <!-- Footer -->
            <footer class="page-footer font-small unique-color-dark">

                <div style="background-color: #7C0E0E;">
                    <div class="container">

                        <!-- Grid row-->
                        <div class="row py-4 d-flex align-items-center">

                            <!-- Grid column -->
                            <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                                <h6 class="mb-0">Get connected with us on social networks!</h6>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6 col-lg-7 text-center text-md-right">

                                <!-- Facebook -->
                                <a class="fb-ic">
                                    <i class="fab fa-facebook-f white-text mr-4"> </i>
                                </a>
                                <!-- Twitter -->
                                <a class="tw-ic">
                                    <i class="fab fa-twitter white-text mr-4"> </i>
                                </a>
                                <!-- Google +-->
                                <a class="gplus-ic">
                                    <i class="fab fa-google-plus-g white-text mr-4"> </i>
                                </a>
                                <!--Linkedin -->
                                <a class="li-ic">
                                    <i class="fab fa-linkedin-in white-text mr-4"> </i>
                                </a>
                                <!--Instagram-->
                                <a class="ins-ic">
                                    <i class="fab fa-instagram white-text"> </i>
                                </a>

                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row-->

                    </div>
                </div>

                <!-- Footer Links -->
                <div class="container text-center text-md-left mt-5">

                    <!-- Grid row -->
                    <div class="row mt-3">

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                            <!-- Content -->
                            <h6 class="text-uppercase font-weight-bold">Company name</h6>
                            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p>Akkuro Korle Ukraine</p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                            <!-- Links -->
                            <h6 class="text-uppercase font-weight-bold">Top Products</h6>
                            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            @foreach(\App\Product::topProducts() as $product)
                            <p>
                                <a href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a>
                            </p>
                            @endforeach
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                            <!-- Links -->
                            <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p>
                                <a href="/story">История компании</a>
                            </p>
                            <p>
                                <a href="http://www.accuro-korle.com/" target="_blank">Акура-Корле Турция </a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                            <!-- Links -->
                            <h6 class="text-uppercase font-weight-bold">Contact</h6>
                            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <!-- <p>
                                Киев, ул. Шота Руставели, 32, 0 этаж
                            </p> -->
                            <p>
                            <a href="tel:0442277202">044 22 77 202</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>
                <!-- Footer Links -->

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2018 Copyright:
                    <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
                </div>
                <!-- Copyright -->

            </footer>
            <!-- Footer -->

            <!-- <img width="100%" src="/images/foter.png" alt=""> -->
        </footer>

        <style>
            .phone {
                margin: auto;
            }

            @media screen and (max-width:780px) {
                #titles {
                    padding-top: 40px;
                }
            }

        </style>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/js/lightgallery-all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js">
        </script>
        <script>
            // форма загрузки
            (function () {
                window.addEventListener('load', function () {
                    var forms = document.getElementsByClassName('needs-validation');

                    var validation = Array.prototype.filter.call(forms, function (form) {
                        form.addEventListener('submit', function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();

                            }
                            if (form.checkValidity() === true) {
                                console.log('validated');
                                document.getElementById('invisibleDownload').click();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
            //   ................ 
            $(document).ready(function () {
                $('.index-slider').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    rows: 1,
                    infinite: false,
                    dots: true,
                    responsive: [{
                            breakpoint: 991,
                            settings: {
                                slidesToShow: 2,
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 1,
                            }
                        },
                    ]
                });

                //------- Custom Arrows click functionality
                $(document).on('click', '.prevSlide', function () {
                    $('.slider').slick('slickPrev');
                });

                $(document).on('click', '.nextSlide', function () {
                    $('.slider').slick('slickNext');
                });



                // gallery
                $('.slider-nav').slick({
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    rows: 2,
                    infinite: false,
                    dots: true,
                    arrows: false,
                    focusOnSelect: true,
                    centerPadding: '40px',
                });

                $('.item').click(function () {
                    let temp = $(this).find('img').attr('src');
                    $('.target').attr('src', temp);
                });

                // lightgall

                $('#gallery').lightGallery({
                    pager: true,
                    animateThumb: false,
                    showThumbByDefault: false
                });


                $('.slider-for').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    fade: true,
                    asNavFor: '.slider-nav2'
                });
                $('.slider-nav2').slick({
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    asNavFor: '.slider-for',
                    dots: true,
                    arrows: false,
                    focusOnSelect: true
                });

            });

        </script>
</body>

</html>
