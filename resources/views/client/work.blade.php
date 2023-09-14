 @extends('layouts.client.index')
 @section('content')
     <div class="site-section pb-0 site-portfolio">
         <div class="container">
             <div class="row mb-5 align-items-end">
                 <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
                     <h2>Works</h2>
                     <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus
                         incidunt ut
                         officiis explicabo inventore.</p>
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
