@extends('layouts.client.index')
@section('content')
    <div class="site-section site-portfolio">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
                    <h2>Hey, I'm {{ author()->full_name }}</h2>
                    <p class="mb-0">{{ author()->description }}</p>
                </div>
                <div class="col-md-12 col-lg-6 text-left text-lg-right" data-aos="fade-up" data-aos-delay="100">
                    <div id="filters" class="filters">
                        <a href="#" data-filter="*" class="active">All</a>
                        @foreach (getAllCategories() as $item)
                            <a href="#" data-filter=".{{ $item->name }}">{{ $item->name }}</a>
                        @endforeach

                    </div>
                </div>
            </div>
            <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
                @foreach (getAllProducts() as $item)
                    <div class="item {{ $item->category->name }} col-sm-6 col-md-4 col-lg-4 mb-4">
                        <a href="{{ route('client.work-single', $item->slug) }}" class="item-wrap fancybox">
                            <div class="work-info">
                                <h3>{{ $item->name }}</h3>
                                <span>{{ $item->category->name }}</span>
                            </div>
                            <img class="img-fluid" src="{{ $item->cover }}">
                        </a>
                    </div>
                @endforeach


            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-4">
                <div class="col-md-5">
                    <h3 class="h3 heading">My Clients</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit explicabo inventore.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4 col-sm-4 col-md-2">
                    <a href="#" class="client-logo"><img src="{{ asset('client') }}/img/logo-adobe.png" alt="Image"
                            class="img-fluid"></a>
                </div>
                <div class="col-4 col-sm-4 col-md-2">
                    <a href="#" class="client-logo"><img src="{{ asset('client') }}/img/logo-uber.png" alt="Image"
                            class="img-fluid"></a>
                </div>
                <div class="col-4 col-sm-4 col-md-2">
                    <a href="#" class="client-logo"><img src="{{ asset('client') }}/img/logo-apple.png"
                            alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-4 col-sm-4 col-md-2">
                    <a href="#" class="client-logo"><img src="{{ asset('client') }}/img/logo-netflix.png"
                            alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-4 col-sm-4 col-md-2">
                    <a href="#" class="client-logo"><img src="{{ asset('client') }}/img/logo-nike.png" alt="Image"
                            class="img-fluid"></a>
                </div>
                <div class="col-4 col-sm-4 col-md-2">
                    <a href="#" class="client-logo"><img src="{{ asset('client') }}/img/logo-google.png"
                            alt="Image" class="img-fluid"></a>
                </div>

            </div>
        </div>
    </div>


    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-4">
                <div class="col-md-5">
                    <h3 class="h3 heading">My Services</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit explicabo inventore.</p>
                </div>
            </div>
            <div class="row">

                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <span class="la la-cube la-3x mb-4"></span>
                    <h4 class="h4 mb-2">Web Design</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit explicabo inventore.</p>
                    <ul class="list-unstyled list-line">
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
                        <li>Non pariatur nisi</li>
                        <li>Magnam soluta quod</li>
                        <li>Lorem ipsum dolor</li>
                        <li>Cumque quae aliquam</li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <span class="la la-mobile la-3x mb-4"></span>
                    <h4 class="h4 mb-2">Mobile Applications</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit explicabo inventore.</p>
                    <ul class="list-unstyled list-line">
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
                        <li>Non pariatur nisi</li>
                        <li>Magnam soluta quod</li>
                        <li>Lorem ipsum dolor</li>
                        <li>Cumque quae aliquam</li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <span class="la la-image la-3x mb-4"></span>
                    <h4 class="h4 mb-2">Graphic Design</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit explicabo inventore.</p>
                    <ul class="list-unstyled list-line">
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
                        <li>Non pariatur nisi</li>
                        <li>Magnam soluta quod</li>
                        <li>Lorem ipsum dolor</li>
                        <li>Cumque quae aliquam</li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <span class="la la-search la-3x mb-4"></span>
                    <h4 class="h4 mb-2">SEO</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit explicabo inventore.</p>
                    <ul class="list-unstyled list-line">
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
                        <li>Non pariatur nisi</li>
                        <li>Magnam soluta quod</li>
                        <li>Lorem ipsum dolor</li>
                        <li>Cumque quae aliquam</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section pt-0">
        <div class="container">
            <div class="row justify-content-center text-center mb-4">
                <div class="col-md-5">
                    <h3 class="h3 heading">My Team</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit explicabo inventore.</p>
                </div>
            </div>
            <div class="owl-carousel testimonial-carousel">

                <div class="testimonial-wrap">
                    <div class="testimonial">
                        <img src="{{ asset('client') }}/img/person_1.jpg" alt="Image" class="img-fluid">
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut
                                officiis
                                explicabo inventore.</p>
                        </blockquote>
                        <p>&mdash; Jean Hicks</p>
                    </div>
                </div>

                <div class="testimonial-wrap">
                    <div class="testimonial">
                        <img src="{{ asset('client') }}/img/person_2.jpg" alt="Image" class="img-fluid">
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut
                                officiis
                                explicabo inventore.</p>
                        </blockquote>
                        <p>&mdash; Chris Stanworth</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
