@extends('layouts.app')
@section('content')
<div class="hero page-inner overlay" style="background-image: url('images/hero_bg_3.jpg');">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">{{ __('About') }}</h1>

                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">
                            {{ __('About') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row text-left mb-5">
            <div class="col-12">
                <h2 class="font-weight-bold heading text-primary mb-4">{{ __('About Us') }}</h2>
            </div>
            <div class="col-lg-6">
                <p class="text-black-50">
                    {{ __('Our agents are in the top 1% of agents working at any nationwide brokerage, so they know how to help you win in today’s market.') }}
                </p>
                <p class="text-black-50">
                    {{ __('Independent research proves that homes listed with our sell for more than homes listed with other brokerages.') }}
                </p>
                <p class="text-black-50">
                    {{ __('When you buy and sell with us, you’ll pay a 1% listing fee, less than half of what brokerages commonly charge.') }}
                </p>
            </div>
            <div class="col-lg-6">
                <p class="text-black-50">
                    {{ __('Schedule a tour with our agent in a few clicks—even for the same day.') }}
                </p>
                <p class="text-black-50">
                    {{ __('We refresh our listings every five minutes, so you’ll get notified when the perfect home hits the market. And with on-demand tours, our agent will help you tour as many homes as you want until you find the one.')
                    }}
                </p>
            </div>
        </div>
    </div>
</div>
<div class="section pt-0">
    <div class="container">
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
                        <h3 class="heading">{{ __('Quality properties') }}</h3>
                        <p class="text-black-50">
                            {{ __('We provides properties that exceed expectations and are affordable for families in our neighborhoods.') }}
                        </p>
                    </div>
                </div>

                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-person"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">{{ __('Top rated agents') }}</h3>
                        <p class="text-black-50">
                            {{ __('We know how to price, prepare, and market your home so it sells for top dollar.') }}
                        </p>
                    </div>
                </div>

                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-security"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">{{ __('Easy and safe') }}</h3>
                        <p class="text-black-50">
                            {{ __('Buying or selling a home can be stressful, but we’re here to help.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
<div class="section pt-0">
    <div class="container">
        <div class="row justify-content-between mb-5">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="img-about dots">
                    <img src="images/hero_bg_2.jpg" alt="Image" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-home2"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">{{ __('Quality properties') }}</h3>
                        <p class="text-black-50">
                            {{ __('We provides properties that exceed expectations and are affordable for families in our neighborhoods.') }}
                        </p>
                    </div>
                </div>

                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-person"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">{{ __('Top rated agents') }}</h3>
                        <p class="text-black-50">
                            {{ __('We know how to price, prepare, and market your home so it sells for top dollar.') }}
                        </p>
                    </div>
                </div>

                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-security"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">{{ __('Easy and safe') }}</h3>
                        <p class="text-black-50">
                            {{ __('Buying or selling a home can be stressful, but we’re here to help.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid" />
            </div>
            <div class="col-md-4 mt-lg-5" data-aos="fade-up" data-aos-delay="100">
                <img src="images/img_3.jpg" alt="Image" class="img-fluid" />
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <img src="images/img_2.jpg" alt="Image" class="img-fluid" />
            </div>
        </div>
        <div class="row section-counter mt-5">
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="counter-wrap mb-5 mb-lg-0">
                    <span class="number"><span class="countup text-primary">2917</span></span>
                    <span class="caption text-black-50">{{ __('# of Buy Properties') }}</span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="counter-wrap mb-5 mb-lg-0">
                    <span class="number"><span class="countup text-primary">3918</span></span>
                    <span class="caption text-black-50">{{ __('# of Sell Properties') }}</span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                <div class="counter-wrap mb-5 mb-lg-0">
                    <span class="number"><span class="countup text-primary">38928</span></span>
                    <span class="caption text-black-50">{{ __('# of All Properties') }}</span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                <div class="counter-wrap mb-5 mb-lg-0">
                    <span class="number"><span class="countup text-primary">1291</span></span>
                    <span class="caption text-black-50">{{ __('# of Agents') }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section sec-testimonials bg-light">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-md-6">
                <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
                    {{ __('The Team') }}
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
                        <img src="images/person_1-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
                        <h3 class="h5 text-primary">{{ __('Eren Jaeger') }}</h3>
                        <p class="text-black-50">{{ __('Designer, Co-founder') }}</p>

                        <p>
                            {{ __('In a world that changes constantly and technology continues to change marketplaces, experience is an essential ingredient for success.') }}
                        </p>

                        <ul class="social list-unstyled list-inline dark-hover">
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-twitter"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-facebook"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-linkedin"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-instagram"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial">
                        <img src="images/person_2-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
                        <h3 class="h5 text-primary">{{ __('Armin Arlart') }}</h3>
                        <p class="text-black-50">{{ __('Property Partner') }}</p>

                        <p>
                            {{ __('His relationship building and customer service are exceptional and a direct result of his sincere interest in assisting his clients achieve the best outcome throughout the entire sales process.') }}
                        </p>

                        <ul class="social list-unstyled list-inline dark-hover">
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-twitter"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-facebook"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-linkedin"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-instagram"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial">
                        <img src="images/person_3-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
                        <h3 class="h5 text-primary">{{ __('John Kirstein') }}</h3>
                        <p class="text-black-50">{{ __('Portfolio Partner') }}</p>

                        <p>
                            {{ __('With his great communication skills, transparency and tailored strategies, he always offers his clients straightforward advice that can help them make informed decisions.') }}
                        </p>

                        <ul class="social list-unstyled list-inline dark-hover">
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-twitter"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-facebook"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-linkedin"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-instagram"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial">
                        <img src="images/person_4-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
                        <h3 class="h5 text-primary">{{ __('Mikasa Ackerman') }}</h3>
                        <p class="text-black-50">{{ __('Agent Support Partner') }}</p>

                        <p>
                            {{ __('She has built strong and loyal relationships with her clients, achieving incredible results through well-honed negotiation skills, in-depth market knowledge and a firm trust shared with buyers.') }}
                        </p>

                        <ul class="social list-unstyled list-inline dark-hover">
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-twitter"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-facebook"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-linkedin"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-instagram"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial">
                        <img src="images/person_5-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
                        <h3 class="h5 text-primary">{{ __('Annie Leonheart') }}</h3>
                        <p class="text-black-50">{{ __('Property Partner') }}</p>

                        <p>
                            {{ __('Honest and consistent, she greatly values her clients’ trust and takes the time to understand their individual needs.') }}
                        </p>

                        <ul class="social list-unstyled list-inline dark-hover">
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-twitter"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-facebook"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-linkedin"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-instagram"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial">
                        <img src="images/person_6-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
                        <h3 class="h5 text-primary">{{ __('Connie Springer') }}</h3>
                        <p class="text-black-50">{{ __('Property Partner') }}</p>

                        <p>
                            {{ __('His relationship building and customer loyalty are exceptional, combined with strong strategic and analytical skills enabling him to provide realistic and honest advice to both buyers and sellers.') }}
                        </p>

                        <ul class="social list-unstyled list-inline dark-hover">
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-twitter"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-facebook"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-linkedin"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-instagram"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
