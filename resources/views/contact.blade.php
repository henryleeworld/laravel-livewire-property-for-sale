@extends('layouts.app')
@section('content')
<div class="hero page-inner overlay" style="background-image: url('images/hero_bg_1.jpg');">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">{{ __('Contact Us') }}</h1>

                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">
                            {{ __('Contact') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-info">
                    <div class="address mt-2">
                        <i class="icon-room"></i>
                        <h4 class="mb-2">{{ __('Location:') }}</h4>
                        <p>
                            {{ __('No. 45, Shifu Rd., Xinyi Dist.,') }}<br />
                            {{ __('Taipei City 110204') }}
                        </p>
                    </div>

                    <div class="open-hours mt-4">
                        <i class="icon-clock-o"></i>
                        <h4 class="mb-2">{{ __('Open Hours:') }}</h4>
                        <p>
                            {{ __('Sunday-Friday:') }}<br />
                            {{ __('11:00 AM - 23:00 PM') }}
                        </p>
                    </div>

                    <div class="email mt-4">
                        <i class="icon-envelope"></i>
                        <h4 class="mb-2">{{ __('Email:') }}</h4>
                        <p>info@henryleeworld.com.tw</p>
                    </div>

                    <div class="phone mt-4">
                        <i class="icon-phone"></i>
                        <h4 class="mb-2">{{ __('Call:') }}</h4>
                        <p>+886 2 2162-2000</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                <form action="#">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <input type="text" class="form-control" placeholder="{{ __('Your Name') }}" />
                        </div>
                        <div class="col-6 mb-3">
                            <input type="email" class="form-control" placeholder="{{ __('Your Email') }}" />
                        </div>
                        <div class="col-12 mb-3">
                            <input type="text" class="form-control" placeholder="{{ __('Subject') }}" />
                        </div>
                        <div class="col-12 mb-3">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="{{ __('Message') }}"></textarea>
                        </div>

                        <div class="col-12">
                            <input type="submit" value="{{ __('Send Message') }}" class="btn btn-primary" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
