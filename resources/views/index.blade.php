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
        <section class="hero is-medium has-background-main">
            <div class="hero-head">
                <nav class="navbar">
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
            </div>

            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title">
                        The new standard in &lt;insert industry here&gt;
                    </h1>
                    <h2 class="subtitle">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </h2>
                </div>
            </div>
        </section>
        <!-- End Nav -->
        <div class="box cta">
            <p class="has-text-centered">
                <span class="tag is-primary">New</span> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
        <div class="section"></div>
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
