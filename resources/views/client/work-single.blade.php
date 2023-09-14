@extends('layouts.client.index')
@section('content')
    <div class="site-section">
        <div class="container">
            <div class="row mb-4 align-items-center">
                <div class="col-md-6" data-aos="fade-up">

                    <h2>Work Single Page</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut officiis
                        explicabo inventore.</p>

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
                            <h3 class="h3">{{ $product->name }}</h3>
                            <p class="mb-4"><span class="text-muted">{{ $product->category->name }}</span></p>

                            <div class="mb-5">
                                <p>{{ $product->description }}</p>

                            </div>

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


                            <p><a href="#" class="readmore">Visit Website</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section pb-0">
            <div class="container">
                <div class="row justify-content-center text-center mb-4">
                    <div class="col-5">
                        <h3 class="h3 heading">More Works</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit explicabo inventore.</p>
                    </div>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="200">
                    <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
                        <a href="work-single.html" class="item-wrap fancybox">
                            <div class="work-info">
                                <h3>Boxed Water</h3>
                                <span>Web</span>
                            </div>
                            <img class="img-fluid" src="{{ asset('client') }}/img/img_1.jpg">
                        </a>
                    </div>
                    <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
                        <a href="work-single.html" class="item-wrap fancybox">
                            <div class="work-info">
                                <h3>Build Indoo</h3>
                                <span>Photography</span>
                            </div>
                            <img class="img-fluid" src="{{ asset('client') }}/img/img_2.jpg">
                        </a>
                    </div>
                    <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
                        <a href="work-single.html" class="item-wrap fancybox">
                            <div class="work-info">
                                <h3>Cocooil</h3>
                                <span>Branding</span>
                            </div>
                            <img class="img-fluid" src="{{ asset('client') }}/img/img_3.jpg">
                        </a>
                    </div>
                    <div class="item design col-sm-6 col-md-4 col-lg-4 mb-4">
                        <a href="work-single.html" class="item-wrap fancybox">
                            <div class="work-info">
                                <h3>Nike Shoe</h3>
                                <span>Design</span>
                            </div>
                            <img class="img-fluid" src="{{ asset('client') }}/img/img_4.jpg">
                        </a>
                    </div>
                    <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
                        <a href="work-single.html" class="item-wrap fancybox">
                            <div class="work-info">
                                <h3>Kitchen Sink</h3>
                                <span>Photography</span>
                            </div>
                            <img class="img-fluid" src="{{ asset('client') }}/img/img_5.jpg">
                        </a>
                    </div>
                    <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
                        <a href="work-single.html" class="item-wrap fancybox">
                            <div class="work-info">
                                <h3>Amazon</h3>
                                <span>brandingn</span>
                            </div>
                            <img class="img-fluid" src="{{ asset('client') }}/img/img_6.jpg">
                        </a>
                    </div>
                </div>
            </div>
        </div>



        <div class="site-section pb-0">
            <div class="container">

                <div class="owl-carousel testimonial-carousel">

                    <div class="testimonial-wrap">
                        <div class="testimonial">
                            <img src="{{ asset('client') }}/img/person_1.jpg" alt="Image" class="img-fluid">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt
                                    ut
                                    officiis explicabo inventore.</p>
                            </blockquote>
                            <p>&mdash; Jean Hicks</p>
                        </div>
                    </div>

                    <div class="testimonial-wrap">
                        <div class="testimonial">
                            <img src="{{ asset('client') }}/img/person_2.jpg" alt="Image" class="img-fluid">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt
                                    ut
                                    officiis explicabo inventore.</p>
                            </blockquote>
                            <p>&mdash; Chris Stanworth</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    @endsection
