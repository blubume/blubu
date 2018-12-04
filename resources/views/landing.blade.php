@extends('layouts.master')

@section('title', __('landing.title'))

@section('nav')
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white text-center text-primary py-0 shadow-sm">
    <div class="container">
        <a href="#" class="navbar-brand py-2">
            <img src="{{ asset('img/landing/logo_color.svg') }}" height="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigationLinks" aria-controls="navigationLinks" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-full-height justify-content-between" id="navigationLinks">
            <ul class="navbar-nav navbar-nav-full-height">
                <li class="nav-item mx-xl-4 small dropdown">
                    <a class="nav-link px-3 dropdown-toggle" href="#" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ __('landing.nav.language') }}&nbsp;
                        <svg width="20" height="11" viewBox="0 0 20 11" xmlns="http://www.w3.org/2000/svg" style="height: .45rem; width: auto;">
                            <path d="M19.674 1.304l-.907-.907L10 9.164 1.233.397l-.907.907L10 10.978z" fill="currentColor" fill-rule="evenodd"/>
                        </svg>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="languageDropdown">
                        <a href="/update_lang?lang=en" class="dropdown-item">{{ __('landing.nav.lang_en') }}</a>
                        <a href="/update_lang?lang=ru" class="dropdown-item">{{ __('landing.nav.lang_ru') }}</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase px-3" href="#block3">{{ __('landing.nav.about') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase px-3" href="#">{{ __('landing.nav.how_to_start') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase px-3" href="#">{{ __('landing.nav.goals') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase px-3" href="#">{{ __('landing.nav.prices') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase px-3 text-white bg-yellow" href="#">{{ __('landing.nav.plans') }}</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item my-1">
                    <a href="#" class="btn btn-outline-primary text-uppercase" role="button">{{ __('landing.nav.login') }}</a>
                </li>
                <li class="nav-item my-1 ml-lg-3">
                    <a href="#" class="btn btn-secondary text-uppercase" role="button">{{ __('landing.nav.register') }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endsection

@section('main')
<main>
    <div class="container-fluid text-center text-white text-uppercase" id="landing-header">
        <div class="container">
            <div class="row pt-sm-8 pt-6 pb-4">
                <div class="col">
                    <h1 class="display-4">{{ __('landing.header_heading') }}</h1>
                </div>
            </div>
            <div class="row py-2 px-2">
                <div class="col">
                    <img src="{{ asset('img/landing/logo_white.svg') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row py-sm-8 py-6">
                <div class="col">
                    <button class="btn btn-lg btn-secondary">{{ __('landing.header_button') }}</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center py-6" id="block1">
        <div class="container">
            <h1 class="my-6">{{ __('landing.block1.heading') }}</h1>
            <div class="row">
                <div class="col-lg px-6 py-4">
                    <img src="{{ asset('img/landing/b1_e1.svg') }}" alt="">
                    <h5 class="py-4">{{ __('landing.block1.e1_title') }}</h5>
                    <p>{{ __('landing.block1.e1_description') }}</p>
                </div>
                <div class="col-lg px-6 py-4">
                    <img src="{{ asset('img/landing/b1_e2.svg') }}" alt="">
                    <h5 class="py-4">{{ __('landing.block1.e2_title') }}</h5>
                    <p>{{ __('landing.block1.e2_description') }}</p>
                </div>
                <div class="col-lg px-6 py-4">
                    <img src="{{ asset('img/landing/b1_e3.svg') }}" alt="">
                    <h5 class="py-4">{{ __('landing.block1.e3_title') }}</h5>
                    <p>{{ __('landing.block1.e3_description') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary text-white text-center py-6" id="block2">
        <div class="container">
            <h1 class="my-6">{{ __('landing.block2.heading') }}</h1>
            <div class="row">
                <div class="col-lg px-6 py-4">
                    <img src="{{ asset('img/landing/b2_e1.svg') }}" alt="">
                    <h5 class="py-4">{{ __('landing.block2.e1_title') }}</h5>
                    <p>{{ __('landing.block2.e1_description') }}</p>
                </div>
                <div class="col-lg px-6 py-4">
                    <img src="{{ asset('img/landing/b2_e2.svg') }}" alt="">
                    <h5 class="py-4">{{ __('landing.block2.e2_title') }}</h5>
                    <p>{{ __('landing.block2.e2_description') }}</p>
                </div>
                <div class="col-lg px-6 py-4">
                    <img src="{{ asset('img/landing/b2_e3.svg') }}" alt="">
                    <h5 class="py-4">{{ __('landing.block2.e3_title') }}</h5>
                    <p>{{ __('landing.block2.e3_description') }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg px-6 py-4">
                    <img src="{{ asset('img/landing/b2_e4.svg') }}" alt="">
                    <h5 class="py-4">{{ __('landing.block2.e4_title') }}</h5>
                    <p>{{ __('landing.block2.e4_description') }}</p>
                </div>
                <div class="col-lg px-6 py-4">
                    <img src="{{ asset('img/landing/b2_e5.svg') }}" alt="">
                    <h5 class="py-4">{{ __('landing.block2.e5_title') }}</h5>
                    <p>{{ __('landing.block2.e4_description') }}</p>
                </div>
                <div class="col-lg px-6 py-4">
                    <img src="{{ asset('img/landing/b2_e6.svg') }}" alt="">
                    <h5 class="py-4">{{ __('landing.block2.e6_title') }}</h5>
                    <p>{{ __('landing.block2.e6_description') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-yellow text-white text-center py-6" id="block3">
        <div class="container">
            <h1 class="my-6">{{ __('landing.block3.heading') }}</h1>
            <div class="row justify-content-center">
                <div class="col-lg-2 py-4">
                    <img src="{{ asset('img/landing/b3_e1.svg') }}" alt="" class="img-fluid">
                    <h5 class="py-4">{{ __('landing.block3.e1_title') }}</h5>
                    <p>{{ __('landing.block3.e1_description') }}</p>
                </div>
                <div class="col-lg-1 next-icon"></div>
                <div class="col-lg-2 py-4">
                    <img src="{{ asset('img/landing/b3_e2.svg') }}" alt="" class="img-fluid">
                    <h5 class="py-4">{{ __('landing.block3.e2_title') }}</h5>
                    <p>{{ __('landing.block3.e2_description') }}</p>
                </div>
                <div class="col-lg-1 next-icon"></div>
                <div class="col-lg-2 py-4">
                    <img src="{{ asset('img/landing/b3_e3.svg') }}" alt="" class="img-fluid">
                    <h5 class="py-4">{{ __('landing.block3.e3_title') }}</h5>
                    <p>{{ __('landing.block3.e3_description') }}</p>
                </div>
                <div class="col-lg-1 next-icon"></div>
                <div class="col-lg-2 py-4">
                    <img src="{{ asset('img/landing/b3_e4.svg') }}" alt="" class="img-fluid">
                    <h5 class="py-4">{{ __('landing.block3.e4_title') }}</h5>
                    <p>{{ __('landing.block3.e4_description') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-secondary text-white px-0 py-6" id="block4">
        <div class="container">
            <h1 class="my-6 text-center position-relative">
                {{ __('landing.block4.heading') }}
                <img src="{{ asset('img/landing/redo.svg') }}" alt="" class="pl-4 align-bottom d-none d-lg-inline position-absolute" style="bottom: 0;">
            </h1>
            <div class="carousel slide carousel-fade pb-8" id="landing-carousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#landing-carousel" class="mx-lg-3 mx-sm-2 mx-1 active" data-slide-to="0"></li>
                    <li data-target="#landing-carousel" class="mx-lg-3 mx-sm-2 mx-1" data-slide-to="1"></li>
                    <li data-target="#landing-carousel" class="mx-lg-3 mx-sm-2 mx-1" data-slide-to="2"></li>
                    <li data-target="#landing-carousel" class="mx-lg-3 mx-sm-2 mx-1" data-slide-to="3"></li>
                    <li data-target="#landing-carousel" class="mx-lg-3 mx-sm-2 mx-1" data-slide-to="4"></li>
                    <li data-target="#landing-carousel" class="mx-lg-3 mx-sm-2 mx-1" data-slide-to="5"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-auto px-5 text-center">
                                <img src="{{ asset('img/landing/slide_1.svg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg px-5 pt-lg-0 pt-4">
                                <h3 class="mb-4">{{ __('landing.block4.slide1_title') }}</h3>
                                {!! __('landing.block4.slide1_description') !!}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-auto px-5 text-center">
                                <img src="{{ asset('img/landing/slide_2.svg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg px-5 pt-lg-0 pt-4">
                                <h3 class="mb-4">{{ __('landing.block4.slide2_title') }}</h3>
                                {!! __('landing.block4.slide2_description') !!}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-auto px-5 text-center">
                                <img src="{{ asset('img/landing/slide_3.svg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg px-5 pt-lg-0 pt-4">
                                <h3 class="mb-4">{{ __('landing.block4.slide3_title') }}</h3>
                                {!! __('landing.block4.slide3_description') !!}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-auto px-5 text-center">
                                <img src="{{ asset('img/landing/slide_4.svg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg px-5 pt-lg-0 pt-4">
                                <h3 class="mb-4">{{ __('landing.block4.slide4_title') }}</h3>
                                {!! __('landing.block4.slide4_description') !!}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-auto px-5 text-center">
                                <img src="{{ asset('img/landing/slide_5.svg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg px-5 pt-lg-0 pt-4">
                                <h3 class="mb-4">{{ __('landing.block4.slide5_title') }}</h3>
                                {!! __('landing.block4.slide5_description') !!}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-auto px-5 text-center">
                                <img src="{{ asset('img/landing/slide_6.svg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg px-5 pt-lg-0 pt-4">
                                <h3 class="mb-4">{{ __('landing.block4.slide6_title') }}</h3>
                                {!! __('landing.block4.slide6_description') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-gray-light text-center py-6" id="block5">
        <div class="container">
            <h1 class="mt-6">{{ __('landing.block5.heading') }}</h1>
            <h4 class="my-4 font-weight-light">{{ __('landing.block5.heading2') }}</h4>
            <a href="#" class="btn btn-lg btn-outline-primary">{{ __('landing.block5.header_button') }}</a>
            <div class="row my-4">
                <div class="col-lg bg-white rounded px-5 py-7 mx-5 my-4">
                    <img src="{{ asset('img/landing/b5_e1.svg') }}" alt="" class="">
                    <h5 class="font-weight-light my-4">{{ __('landing.block5.price1_title') }}</h5>
                    <h1 class="display-2 my-5 text-primary font-weight-bold">{{ __('landing.prices.price_30m') }}{{ __('landing.currency') }}</h1>
                    <h5 class="font-weight-light my-5">30 {{ __('landing.minutes') }}</h5>
                    <button class="btn btn-outline-primary">{{ __('landing.buy') }}</button>
                </div>
                <div class="col-lg bg-white rounded px-5 py-7 mx-5 my-4 border-lg border-yellow">
                    <img src="{{ asset('img/landing/b5_e2.svg') }}" alt="" class="">
                    <h5 class="font-weight-light my-4">{{ __('landing.block5.price2_title') }}</h5>
                    <h1 class="display-2 my-5 text-yellow font-weight-bold">{{ __('landing.prices.price_60m') }}{{ __('landing.currency') }}</h1>
                    <h5 class="font-weight-light my-5">60 {{ __('landing.minutes') }}</h5>
                    <button class="btn btn-yellow">{{ __('landing.buy') }}</button>
                </div>
                <div class="col-lg bg-white rounded px-5 py-7 mx-5 my-4">
                    <img src="{{ asset('img/landing/b5_e3.svg') }}" alt="" class="">
                    <h5 class="font-weight-light my-4">{{ __('landing.block5.price3_title') }}</h5>
                    <h1 class="display-2 my-5 text-primary font-weight-bold">{{ __('landing.prices.price_120m') }}{{ __('landing.currency') }}</h1>
                    <h5 class="font-weight-light my-5">120 {{ __('landing.minutes') }}</h5>
                    <button class="btn btn-outline-primary">{{ __('landing.buy') }}</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary text-white text-center py-6" id="block6">
        <div class="container">
            <h1 class="mt-6">{{ __('landing.block6.heading') }}</h1>
            <h4 class="my-4 font-weight-light">{{ __('landing.block6.heading2') }}</h4>
            <div class="row justify-content-center mt-7 mb-4 mx-2">
                <div class="col col-md-10 col-lg-8 col-xl-7 bg-white rounded">
                    <h5 class="text-primary my-5">{{ __('landing.block6.minutes_a_day') }}</h5>
                    <div class="row no-gutters circle-row mb-7 mx-2 mx-md-4 btn-group-toggle" data-toggle="buttons">
                        <label class="col circle btn btn-gray-light active">
                            <input type="radio" name="minutes-a-day" id="minutes-a-day1" checked>15
                        </label>
                        <div class="col-1 bg-gray-light circle-connection"></div>
                        <label class="col circle btn btn-gray-light">
                            <input type="radio" name="minutes-a-day" id="minutes-a-day2">30
                        </label>
                        <div class="col-1 bg-gray-light circle-connection"></div>
                        <label class="col circle btn btn-gray-light">
                            <input type="radio" name="minutes-a-day" id="minutes-a-day3">60
                        </label>
                        <div class="col-1 bg-gray-light circle-connection"></div>
                        <label class="col circle btn btn-gray-light">
                            <input type="radio" name="minutes-a-day" id="minutes-a-day4">20
                        </label>
                    </div>
                    <h5 class="text-primary my-5">{{ __('landing.block6.days_a_week') }}</h5>
                    <div class="row no-gutters circle-row mb-7 mx-2 mx-md-4 btn-group-toggle" data-toggle="buttons">
                        <label class="col circle btn btn-gray-light active">
                            <input type="radio" name="days-a-week" id="days-a-week1" checked>2
                        </label>
                        <div class="col-1 bg-gray-light circle-connection"></div>
                        <label class="col circle btn btn-gray-light">
                            <input type="radio" name="days-a-week" id="days-a-week2">3
                        </label>
                        <div class="col-1 bg-gray-light circle-connection"></div>
                        <label class="col circle btn btn-gray-light">
                            <input type="radio" name="days-a-week" id="days-a-week3">5
                        </label>
                        <div class="col-1 bg-gray-light circle-connection"></div>
                        <label class="col circle btn btn-gray-light">
                            <input type="radio" name="days-a-week" id="days-a-week4">7
                        </label>
                    </div>
                    <div class="d-inline-block text-gray">
                        <p>
                            {!! __('landing.block6.details',[
                            'minutes_a_day' => '<span id="minutes-a-day">0</span>',
                            'days_a_week' => '<span id="days-a-week">0</span>',
                            'duration' => '<span id="duration">0</span>']) !!}
                        </p>
                        <hr>
                        <p class="font-weight-bold">
                            {{ __('landing.block6.details2') }} <span id="landing-total">0</span>{{ __('landing.currency') }}
                        </p>
                    </div>
                    <br>
                    <button class="btn btn-lg btn-secondary my-5">{{ __('landing.buy') }}</button>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('footer')
<footer class="bg-gray-light py-4">
    <div class="container">
        <div class="row pt-3 pb-6">
            <div class="col-8 align-self-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('landing.nav.about') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('landing.nav.how_to_start') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('landing.nav.goals') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('landing.nav.prices') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('landing.nav.plans') }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-4">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link py-0" href="https://www.facebook.com/blubu.me">
                            <img src="{{ asset('img/landing/fb.svg') }}" alt="BlubU at Facebook">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="text-center">
            <p>
                {{ __('landing.contact') }} <a href="mailto: info@blubu.me">info@blubu.me</a>
            </p>
            <p>© 2018 BlubU</p>
        </div>
    </div>
</footer>
@endsection