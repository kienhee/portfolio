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
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <div class="d-flex mb-1">
                                <strong>WordPress</strong>
                                <span class="ml-auto">80%</span>
                            </div>
                            <div class="progress custom-progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="d-flex mb-1">
                                <strong>Photoshop</strong>
                                <span class="ml-auto">96%</span>
                            </div>
                            <div class="progress custom-progress">
                                <div class="progress-bar" role="progressbar" style="width: 96%" aria-valuenow="96"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="d-flex mb-1">
                                <strong>HTML5/CSS3</strong>
                                <span class="ml-auto">99%</span>
                            </div>
                            <div class="progress custom-progress">
                                <div class="progress-bar" role="progressbar" style="width: 99%" aria-valuenow="99"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="d-flex mb-1">
                                <strong>Veu</strong>
                                <span class="ml-auto">87%</span>
                            </div>
                            <div class="progress custom-progress">
                                <div class="progress-bar" role="progressbar" style="width: 87%" aria-valuenow="87"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="d-flex mb-1">
                                <strong>Angular</strong>
                                <span class="ml-auto">85%</span>
                            </div>
                            <div class="progress custom-progress">
                                <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="d-flex mb-1">
                                <strong>React</strong>
                                <span class="ml-auto">88%</span>
                            </div>
                            <div class="progress custom-progress">
                                <div class="progress-bar" role="progressbar" style="width: 88%" aria-valuenow="88"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-md-7 mb-5 mb-md-0" data-aos="fade-up">
                    {!! author()->content !!}
                    <p><a href="#" class="readmore">Download my CV</a></p>
                </div>

            </div>

        </div>
    </div>
@endsection
