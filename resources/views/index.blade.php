<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Porchar 32nd Street</title>

        <!-- Css -->
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <!-- Start Nav -->
        <header>
            <nav class="navbar is-fixed-top">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item logo__title" href="/">
                            <strong>Pocha 32st</strong>
                        </a>
                        <span class="navbar-burger burger" data-target="navbarMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                          </span>
                    </div>
                    <div id="navbarMenu" class="navbar-menu">
                        <div class="navbar-end">
                            <div class="navbar-item has-dropdown is-hoverable">
                                <div class="navbar-link">
                                    <strong>소개</strong>
                                </div>
                                <div class="navbar-dropdown is-boxed">
                                    <a class="navbar-item" href="/documentation/overview/start/">
                                        Overview
                                    </a>
                                </div>
                            </div>
                            <div class="navbar-item has-dropdown is-hoverable">
                                <div class="navbar-link">
                                    <strong>메뉴</strong>
                                </div>
                                <div class="navbar-dropdown is-boxed">
                                    <a class="navbar-item" href="/documentation/overview/start/">
                                        Overview
                                    </a>
                                </div>
                            </div>
                            <div class="navbar-item has-dropdown is-hoverable">
                                <div class="navbar-link">
                                    <strong>매장안내</strong>
                                </div>
                                <div class="navbar-dropdown is-boxed">
                                    <a class="navbar-item" href="/documentation/overview/start/">
                                        Overview
                                    </a>
                                </div>
                            </div>
                            <div class="navbar-item has-dropdown is-hoverable">
                                <div class="navbar-link">
                                    <strong>가맹안내</strong>
                                </div>
                                <div class="navbar-dropdown is-boxed">
                                    <a class="navbar-item" href="/documentation/overview/start/">
                                        Overview
                                    </a>
                                </div>
                            </div>
                            <div class="navbar-item has-dropdown is-hoverable">
                                <div class="navbar-link">
                                    <strong>소식</strong>
                                </div>
                                <div class="navbar-dropdown is-boxed">
                                    <a class="navbar-item" href="/documentation/overview/start/">
                                        Overview
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- End Nav -->

        <!-- Start Content -->
        <section class="hero is-medium has-carousel">
            <div class="hero-carousel carousel-animated carousel-animate-fade" data-autoplay="true">
                <div class='carousel-container'>
                    <div class='carousel-item has-background is-active'>
                        <img class="is-background" src="/image/main.jpg" alt="" />
                    </div>
                    <div class='carousel-item has-background is-active'>
                        <img class="is-background" src="/image/1524840575624.jpg" alt="" />
                    </div>
                </div>
                <div class="carousel-navigation is-overlay">
                    <div class="carousel-nav-left">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <div class="carousel-nav-right">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="hero-body has-text-centered">
                <div class="columns is-mobile is-centered">
                    <div class="column is-half is-narrow">
                        <div class="control">
                            <h1 class="has-text-white title has-text-centered is-1">포차 32번가</h1>
                        </div>
                        <div class="control">
                            <h2 class="has-text-white subtitle has-text-centered is-2">포차 32번가</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Content -->

        <!-- Start Footer -->
        <footer class="footer has-background-dark has-text-white">
            <div class="container">
                <div class="content has-text-left">
                    <p class="has-text-grey">
                        COPYRIGHT
                    </p>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- Start Javascript -->
        <script src="{{ mix('/js/app.js') }}" type="text/javascript" async></script>
        <!-- End Javascript -->
    </body>
</html>
