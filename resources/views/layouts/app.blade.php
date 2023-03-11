<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" href="favicon.png" />
        <meta name="description" content="" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/aos.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        @livewireStyles
        <title>
            {{ config('app.name') }}
        </title>
    </head>
    <body>
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close">
                    <span class="icofont-close js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <nav class="site-nav">
            <div class="container">
                <div class="menu-bg-wrap">
                    <div class="site-navigation">
                        <a href="/" class="logo m-0 float-start">{{ config('app.name') }}</a>
                        <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                            <li class="active"><a href="/">{{ __('Home') }}</a></li>
                            <li><a href="{{ route('properties') }}">{{ __('Properties') }}</a></li>
                            <!--
                            <li class="has-children">
                                <a href="{{ route('properties') }}">{{ __('Properties') }}</a>
                                <ul class="dropdown">
                                    <li><a href="#">{{ __('Buy Property') }}</a></li>
                                    <li><a href="#">{{ __('Sell Property') }}</a></li>
                                    <li class="has-children">
                                        <a href="#">{{ __('Dropdown') }}</a>
                                        <ul class="dropdown">
                                            <li><a href="#">{{ __('Sub Menu One') }}</a></li>
                                            <li><a href="#">{{ __('Sub Menu Two') }}</a></li>
                                            <li><a href="#">{{ __('Sub Menu Three') }}</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            -->
                            <li><a href="{{ route('services') }}">{{ __('Services') }}</a></li>
                            <li><a href="{{ route('about') }}">{{ __('About') }}</a></li>
                            <li><a href="{{ route('contact') }}">{{ __('Contact Us') }}</a></li>
                        </ul>
                        <a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
        <div class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="widget">
                            <h3>{{ __('Contact') }}</h3>
                            <address>{{ __('No. 45, Shifu Rd., Xinyi Dist., Taipei City 110204') }}</address>
                            <ul class="list-unstyled links">
                                <li><a href="tel://886221622000">+886(2)-2162-2000</a></li>
                                <li><a href="tel://886221622000">+886(2)-2162-2001</a></li>
                                <li>
                                    <a href="mailto:info@henryleeworld.com.tw">info@henryleeworld.com.tw</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget">
                            <h3>{{ __('Sources') }}</h3>
                            <ul class="list-unstyled float-start links">
                                <!--<li><a href="#">{{ __('About us') }}</a></li>-->
                                <li><a href="{{ route('properties') }}">{{ __('Properties') }}</a></li>
                                <li><a href="{{ route('services') }}">{{ __('Services') }}</a></li>
                                <!--
                                <li><a href="#">{{ __('Vision') }}</a></li>
                                <li><a href="#">{{ __('Mission') }}</a></li>
                                <li><a href="#">{{ __('Terms') }}</a></li>
                                <li><a href="#">{{ __('Privacy') }}</a></li>
                                -->
                            </ul>
                            <!--
                            <ul class="list-unstyled float-start links">
                                <li><a href="#">{{ __('Partners') }}</a></li>
                                <li><a href="#">{{ __('Business') }}</a></li>
                                <li><a href="#">{{ __('Careers') }}</a></li>
                                <li><a href="#">{{ __('Blog') }}</a></li>
                                <li><a href="#">{{ __('FAQ') }}</a></li>
                                <li><a href="#">{{ __('Creative') }}</a></li>
                            </ul>
                            -->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget">
                            <h3>{{ __('Links') }}</h3>
                            <ul class="list-unstyled links">
                                <!--<li><a href="#">{{ __('Our Vision') }}</a></li>-->
                                <li><a href="{{ route('about') }}">{{ __('About us') }}</a></li>
                                <li><a href="{{ route('contact') }}">{{ __('Contact us') }}</a></li>
                            </ul>

                            <ul class="list-unstyled social">
                                <li>
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-pinterest"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-dribbble"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <p>
                            {{ __('Copyright') }} &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="overlayer"></div>
        <div class="loader">
            <div class="spinner-border" role="status">
                <span class="visually-hidden">{{ __('Loading...') }}</span>
            </div>
        </div>
        @livewireScripts
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/tiny-slider.js') }}"></script>
        <script src="{{ asset('js/aos.js') }}"></script>
        <script src="{{ asset('js/navbar.js') }}"></script>
        <script src="{{ asset('js/counter.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>