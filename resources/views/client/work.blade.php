 @extends('layouts.client.index')
 @section('title', 'Works')
 @section('content')
     <div class="site-section pb-3 site-portfolio">
         <div class="container">
             <div class="row mb-5 align-items-end">
                 <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
                     <h2>Works</h2>
                     <p class="mb-0">Several projects have been completed by us and have been used by more than 1000+
                         people</p>
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


     <x-my-team />
 @endsection
