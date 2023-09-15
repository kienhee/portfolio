@extends('layouts.client.index')
@section('content')
    <div class="site-section pb-0 site-portfolio">
        <div class="container">
            <div class="row mb-5 align-items-end">
                <div class="col-md-6" data-aos="fade-up">

                    <h2>About Me</h2>
                    <p class="mb-0">{{ author()->description }}</p>
                </div>

            </div>


            <div class="row">
                <div class="col-md-4 ml-auto order-2" data-aos="fade-up">
                    <h3 class="h3 mb-4">Skills</h3>
                    <ul class="list-unstyled list-line mb-5 row pl-3">
                        @foreach (explode(',', author()->skills) as $item)
                            <li class="col-md-6">{{ $item }}</li>
                        @endforeach
                    </ul>

                </div>

                <div class="col-md-7 mb-5 mb-md-0" data-aos="fade-up">
                    {!! author()->content !!}
                    <p><a href="{{ author()->cv }}" class="readmore" target="_blank">My
                            CV Online</a></p>
                </div>

            </div>

        </div>
    </div>
@endsection
