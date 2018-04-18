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
        <!-- START NAV -->
        <section class="hero is-fullheight is-default is-bold">
            <div class="hero-head">
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-brand">
                            <a class="navbar-item" href="../">
                                <img src="https://bulma.io/images/bulma-logo.png" alt="Logo">
                            </a>
                            <span class="navbar-burger burger" data-target="navbarMenu">
            <span></span>
            <span></span>
            <span></span>
          </span>
                        </div>
                        <div id="navbarMenu" class="navbar-menu">
                            <div class="navbar-end"><div class="tabs is-right">
                                    <ul>
                                        <li class="is-active"><a>Home</a></li>
                                        <li><a href="">Examples</a></li>
                                        <li><a href="">Features</a></li>
                                        <li><a href="">Team</a></li>
                                        <li><a href="">Help</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-vcentered">
                        <div class="column is-5">
                            <figure class="image is-4by3">
                                <img src="https://picsum.photos/800/600/?random" alt="Description">
                            </figure>
                        </div>
                        <div class="column is-6 is-offset-1">
                            <h1 class="title is-2">
                                Superhero Scaffolding
                            </h1>
                            <h2 class="subtitle is-4">
                                Let this cover page describe a product or service.
                            </h2>
                            <br>
                            <p class="has-text-centered">
                                <a class="button is-medium is-info is-outlined">
                                    Learn more
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-foot">
                <div class="container">
                    <div class="tabs is-centered">
                        <ul>
                            <li><a>And this at the bottom</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- END NAV -->

        <!-- Javascript -->
        <script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>
    </body>
</html>