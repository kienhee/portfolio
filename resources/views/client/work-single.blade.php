@extends('layouts.client.index')
@section('content')
    <div class="site-section">
        <div class="container">
            <div class="row mb-4 align-items-center">
                <div class="col-md-6" data-aos="fade-up">

                    <h2>Work: {{ $product->name }}</h2>
                    <p class="mb-4"><span class="text-muted">{{ $product->category->name }}</span></p>
                    <p>{{ $product->description }}</p>


                </div>


            </div>
        </div>

        <div class="site-section pb-0">
            <div class="container">
                <div class="row align-items-stretch">
                    <div class="col-md-8" data-aos="fade-up">
                        {!! $product->content !!}
                    </div>
                    <div class="col-md-3 ml-auto" data-aos="fade-up" data-aos-delay="100">
                        <div class="sticky-content">
                            <h3 class="h3 mb-5">More information</h3>

                            <h4 class="h4 mb-3">What I did</h4>
                            <ul class="list-unstyled list-line mb-5">
                                <li>Maintain system</li>
                                <li>Design UI/UX</li>
                                <li>Deploy project</li>
                                <li>Build componet</li>
                            </ul>
                            <h4 class="h4 mb-3">What technology is used?</h4>
                            <ul class="list-unstyled list-line mb-5">
                                @foreach (explode(',', $product->technologies) as $tech)
                                    <li>{{ $tech }}</li>
                                @endforeach

                            </ul>


                            <p><a href="{{ $product->link }}" target="_blank" class="readmore">Visit Website</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section pb-0">
            <div class="container">
                <div class="row justify-content-center text-center mb-4">
                    <div class="col-md-5">
                        <h3 class="h3 heading">More Works</h3>
                        <p>Several projects have been completed by us and have been used by more than 1000+ people.</p>
                    </div>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-md-12  mb-3 " data-aos="fade-up" data-aos-delay="100">
                        <div id="filters" class="filters text-center">
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
    </div>



    <x-my-team />
@endsection
