@extends('layouts.app')
@section('content')
<div class="hero">
    <div class="hero-slide">
        <div class="img overlay" style="background-image: url('images/hero_bg_3.jpg');"></div>
        <div class="img overlay" style="background-image: url('images/hero_bg_2.jpg');"></div>
        <div class="img overlay" style="background-image: url('images/hero_bg_1.jpg');"></div>
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center">
                <h1 class="heading" data-aos="fade-up">
                    {{ __('Easiest way to find your dream home') }}
                </h1>
                <form action="#" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
                    <input type="text" class="form-control px-4" placeholder="{{ __('Your ZIP code or City. e.g. Taipei') }}" />
                    <button type="submit" class="btn btn-primary">{{ __('Search') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-6">
                <h2 class="font-weight-bold text-primary heading">
                    {{ __('Popular Properties') }}
                </h2>
            </div>
            <div class="col-lg-6 text-lg-end">
                <p>
                    <a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">{{ __('View all properties') }}</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="property-slider-wrap">
                    <div class="property-slider">
                        @foreach($properties as $property)
                        <x-property :property="$property" />
                        @endforeach
                    </div>

                    <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                        <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">{{ __('Prev') }}</span>
                        <span class="next" data-controls="next" aria-controls="property" tabindex="-1">{{ __('Next') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="features-1">
    <div class="container">
        <div class="row">
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="box-feature">
                    <span class="flaticon-house"></span>
                    <h3 class="mb-3">{{ __('Our Properties') }}</h3>
                    <p>
                        {{ __('As of December 31, 2022, we manage investments in nearly 2,100 properties.') }}
                    </p>
                    <p><a href="#" class="learn-more">{{ __('Learn More') }}</a></p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                <div class="box-feature">
                    <span class="flaticon-building"></span>
                    <h3 class="mb-3">{{ __('Property for Sale') }}</h3>
                    <p>
                        {{ __('Listing an extensive range of houses, flats, bungalows, land and retirement homes, we make it easy for you to find your next happy home regardless of whether you\'re a first-time buyer, upsizing, downsizing or relocating.') }}
                    </p>
                    <p><a href="#" class="learn-more">{{ __('Learn More') }}</a></p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="box-feature">
                    <span class="flaticon-house-3"></span>
                    <h3 class="mb-3">{{ __('Real Estate Agent') }}</h3>
                    <p>
                        {{ __('Buying a home is the biggest investment most people will ever make, but not all real estate agents are equal.') }}
                    </p>
                    <p><a href="#" class="learn-more">{{ __('Learn More') }}</a></p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                <div class="box-feature">
                    <span class="flaticon-house-1"></span>
                    <h3 class="mb-3">{{ __('House for Sale') }}</h3>
                    <p>
                        {{ __('Found a home that’s stolen your heart but it’s already under offer? It happens, but we’re here to help!') }}
                    </p>
                    <p><a href="#" class="learn-more">{{ __('Learn More') }}</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="section sec-testimonials">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-md-6">
                <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
                    {{ __('Customer Says') }}
                </h2>
            </div>
            <div class="col-md-6 text-md-end">
                <div id="testimonial-nav">
                    <span class="prev" data-controls="prev">{{ __('Prev') }}</span>

                    <span class="next" data-controls="next">{{ __('Next') }}</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4"></div>
        </div>
        <div class="testimonial-slider-wrap">
            <div class="testimonial-slider">
                @foreach($testimonials as $testimonial)
                <div class="item">
                    <div class="testimonial">
                        <img src="{{ $testimonial->photo }}" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
                        <div class="rate">
                            @for($i = 0; $i < $testimonial->rating; $i++)
                            <span class="icon-star text-warning"></span>
                            @endfor
                        </div>
                        <h3 class="h5 text-primary mb-4">{{ $testimonial->full_name }}</h3>
                        <blockquote>
                            <p>
                                &ldquo;{{ $testimonial->testimonial }}&rdquo;
                            </p>
                        </blockquote>
                        <p class="text-black-50">{{ $testimonial->company }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="section section-4 bg-light">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-5">
                <h2 class="font-weight-bold heading text-primary mb-4">
                    {{ __('Let\'s find home that\'s perfect for you') }}
                </h2>
                <p class="text-black-50">
                    {{ __('Before you begin looking for your new home, talk with your real estate agent about what you want in a home, why you want to buy a home and where you\'d like to live. Also, consider sharing information about your lifestyle to help them help you.') }}
                </p>
            </div>
        </div>
        <div class="row justify-content-between mb-5">
            <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
                <div class="img-about dots">
                    <img src="images/hero_bg_3.jpg" alt="Image" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-home2"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">{{ __('2M Properties') }}</h3>
                        <p class="text-black-50">
                            {{ __('For $2 million, you can buy an upscale home with all the luxuries of a vacation resort -- including swimming pools, fitness centers and sports courts -- a new construction house with sparkling new appliances or a low-key historic cottage by the sea.') }}
                        </p>
                    </div>
                </div>

                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-person"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">{{ __('Top Rated Agents') }}</h3>
                        <p class="text-black-50">
                            {{ __('Whether it be buying or selling a house, top real estate agents can make your real estate transactions smoother and save you thousands of dollars.') }}
                        </p>
                    </div>
                </div>

                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-security"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">{{ __('Legit Properties') }}</h3>
                        <p class="text-black-50">
                            {{ __('We are here to solve your problems regarding real estate,we do property management, land surveying buy and sell land and houses we connect you with landlords for rentals and all kinds of real estate legit business.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--
        <div class="row section-counter mt-5">
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="counter-wrap mb-5 mb-lg-0">
                    <span class="number"><span class="countup text-primary">3298</span></span>
                    <span class="caption text-black-50">{{ __('# of Buy Properties') }}</span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="counter-wrap mb-5 mb-lg-0">
                    <span class="number"><span class="countup text-primary">2181</span></span>
                    <span class="caption text-black-50">{{ __('# of Sell Properties') }}</span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                <div class="counter-wrap mb-5 mb-lg-0">
                    <span class="number"><span class="countup text-primary">9316</span></span>
                    <span class="caption text-black-50">{{ __('# of All Properties') }}</span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                <div class="counter-wrap mb-5 mb-lg-0">
                    <span class="number"><span class="countup text-primary">7191</span></span>
                    <span class="caption text-black-50">{{ __('# of Agents') }}</span>
                </div>
            </div>
        </div>
        -->
    </div>
</div>
<div class="section">
    <div class="row justify-content-center footer-cta" data-aos="fade-up">
        <div class="col-lg-7 mx-auto text-center">
            <h2 class="mb-4">{{ __('Be a part of our growing real state agents') }}</h2>
            <p>
                <a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">{{ __('Apply for Real Estate agent') }}</a>
            </p>
        </div>
    </div>
</div>
<div class="section section-5 bg-light">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-6 mb-5">
                <h2 class="font-weight-bold heading text-primary mb-4">
                    {{ __('Our Agents') }}
                </h2>
                <p class="text-black-50">
                    {{ __('Whether you\'re buying your first home or moving on to the next phase of your life, buying and selling real estate is one of the biggest decisions you will ever make. You need a trusted ally to guide your journey and to ensure that you make the right decisions along the way.') }}
                </p>
            </div>
        </div>
        <div class="row">
            @foreach($agents as $agent)
            <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                <div class="h-100 person">
                    <img src="{{ asset($agent->photo) }}" alt="Image" class="img-fluid" />

                    <div class="person-contents">
                        <h2 class="mb-0"><a href="#">{{ $agent->full_name }}</a></h2>
                        <span class="meta d-block mb-3">{{ $agent->title }}</span>
                        <p>
                            {{ $agent->description }}
                        </p>

                        <ul class="social list-unstyled list-inline dark-hover">
                            <li class="list-inline-item">
                                <a href="{{ $agent->twitter }}"><span class="icon-twitter"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ $agent->facebook }}"><span class="icon-facebook"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ $agent->linkedin }}"><span class="icon-linkedin"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ $agent->instagram }}"><span class="icon-instagram"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
