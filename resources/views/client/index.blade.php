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

    {{-- <div class="site-section">
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
    </div> --}}




    <x-my-service />
    <x-my-team />
@endsection
