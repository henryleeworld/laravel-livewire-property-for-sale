@extends('layouts.app')
@section('content')
<div class="hero page-inner overlay" style="background-image: url('images/hero_bg_1.jpg');">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">{{ __('Services') }}</h1>
                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">
                            {{ __('Services') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="box-feature mb-4">
                    <span class="flaticon-house mb-4 d-block"></span>
                    <h3 class="text-black mb-3 font-weight-bold">
                        {{ __('Quality Properties') }}
                    </h3>
                    <p class="text-black-50">
                        {{ __('There\'s much to see here. So, take your time, look around, and learn all there is to know about us. We hope you enjoy our site and take a moment to drop us a line.') }}
                    </p>
                    <p><a href="#" class="learn-more">{{ __('Read more') }}</a></p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="box-feature mb-4">
                    <span class="flaticon-house-2 mb-4 d-block-3"></span>
                    <h3 class="text-black mb-3 font-weight-bold">{{ __('Top Rated Agent') }}</h3>
                    <p class="text-black-50">
                        {{ __('Nervous about your property adventure? Don’t be. Whether you\'re getting ready to buy or sell, in the middle of it, or just looking for some answers, our top-notch skills ensure you get the best experience possible. It’s what we love to do.') }}
                    </p>
                    <p><a href="#" class="learn-more">{{ __('Read more') }}</a></p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                <div class="box-feature mb-4">
                    <span class="flaticon-building mb-4 d-block"></span>
                    <h3 class="text-black mb-3 font-weight-bold">
                        {{ __('Property for Sale') }}
                    </h3>
                    <p class="text-black-50">
                        {{ __('Large or small, condo or mansion, we can find it and get it for you at the price that\'s right.') }}
                    </p>
                    <p><a href="#" class="learn-more">{{ __('Read more') }}</a></p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                <div class="box-feature mb-4">
                    <span class="flaticon-house-3 mb-4 d-block-1"></span>
                    <h3 class="text-black mb-3 font-weight-bold">{{ __('House for Sale') }}</h3>
                    <p class="text-black-50">
                        {{ __('For seven years running, independent research has proven that homes listed with our sell for more than comparable homes listed with other brokerages.') }}
                    </p>
                    <p><a href="#" class="learn-more">{{ __('Read more') }}</a></p>
                </div>
            </div>
            <!--
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="box-feature mb-4">
                    <span class="flaticon-house-4 mb-4 d-block"></span>
                    <h3 class="text-black mb-3 font-weight-bold">
                        {{ __('Quality Properties') }}
                    </h3>
                    <p class="text-black-50">
                        {{ __('There\'s much to see here. So, take your time, look around, and learn all there is to know about us. We hope you enjoy our site and take a moment to drop us a line.') }}
                    </p>
                    <p><a href="#" class="learn-more">{{ __('Read more') }}</a></p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="box-feature mb-4">
                    <span class="flaticon-building mb-4 d-block-3"></span>
                    <h3 class="text-black mb-3 font-weight-bold">{{ __('Top Rated Agent') }}</h3>
                    <p class="text-black-50">
                        {{ __('Nervous about your property adventure? Don’t be. Whether you\'re getting ready to buy or sell, in the middle of it, or just looking for some answers, our top-notch skills ensure you get the best experience possible. It’s what we love to do.') }}
                    </p>
                    <p><a href="#" class="learn-more">{{ __('Read more') }}</a></p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                <div class="box-feature mb-4">
                    <span class="flaticon-house mb-4 d-block"></span>
                    <h3 class="text-black mb-3 font-weight-bold">
                        {{ __('Property for Sale') }}
                    </h3>
                    <p class="text-black-50">
                        {{ __('Large or small, condo or mansion, we can find it and get it for you at the price that\'s right.') }}
                    </p>
                    <p><a href="#" class="learn-more">{{ __('Read more') }}</a></p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                <div class="box-feature mb-4">
                    <span class="flaticon-house-1 mb-4 d-block-1"></span>
                    <h3 class="text-black mb-3 font-weight-bold">{{ __('House for Sale') }}</h3>
                    <p class="text-black-50">
                        {{ __('For seven years running, independent research has proven that homes listed with our sell for more than comparable homes listed with other brokerages.') }}
                    </p>
                    <p><a href="#" class="learn-more">{{ __('Read more') }}</a></p>
                </div>
            </div>
            -->
        </div>
    </div>
</div>
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
                <div class="item">
                    <div class="testimonial">
                        <img src="images/customer_1-min.png" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
                        <div class="rate">
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                        </div>
                        <h3 class="h5 text-primary mb-4">{{ __('Sasha Blouse') }}</h3>
                        <blockquote>
                            <p>
                                &ldquo;{{ __('I recently sold a house with Armin and while this can be a very stressful process, I felt 110% confident by partnering with Armin. He was candid, provided great feedback, helped explain clearly all details and managed the actual sale negotiation brilliantly.') }}&rdquo;
                            </p>
                        </blockquote>
                        <p class="text-black-50">{{ __('Senior Vice President and General Counsel') }}</p>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial">
                        <img src="images/customer_2-min.png" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
                        <div class="rate">
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                        </div>
                        <h3 class="h5 text-primary mb-4">{{ __('Christa Lenz') }}</h3>
                        <blockquote>
                            <p>
                                &ldquo;{{ __('After working with Mikasa to sell my home in 2013, I was convinced that he’s the only realtor I’ll ever need. Since then, I’ve bought two properties and sold one, and with each process, Mikasa’s knowledge, professionalism and terrific instincts have consistently guided us through to excellent outcomes.') }}&rdquo;
                            </p>
                        </blockquote>
                        <p class="text-black-50">{{ __('Chief Technology Officer') }}</p>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial">
                        <img src="images/customer_3-min.png" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
                        <div class="rate">
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                        </div>
                        <h3 class="h5 text-primary mb-4">{{ __('Dot Pixis') }}</h3>
                        <blockquote>
                            <p>
                                &ldquo;{{ __('My wife & I have moved 6 times in the last 25 years. Obviously, we\'ve dealt with many realtors both on the buying and selling side. I have to say that John is by far the BEST realtor we\'ve ever worked with, his professionalism, personality, attention to detail, responsiveness and his ability to close the deal was Outstanding!!!') }}&rdquo;
                            </p>
                        </blockquote>
                        <p class="text-black-50">{{ __('Chief Legal Officer') }}</p>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial">
                        <img src="images/customer_4-min.png" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
                        <div class="rate">
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                        </div>
                        <h3 class="h5 text-primary mb-4">{{ __('Kitz Wellman') }}</h3>
                        <blockquote>
                            <p>
                                &ldquo;{{ __('Connie is the epitome of everything you could want in a broker; he is well-connected, knowledgeable and professional. (In fact, he was able to get us an offer before we even listed our property.) His likeability is what you want in someone representing your home to others.') }}&rdquo;
                            </p>
                        </blockquote>
                        <p class="text-black-50">{{ __('Head of People') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
