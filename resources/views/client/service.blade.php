@extends('layouts.client.index')
@section('content')
    <div class="site-section">
        <div class="container">
            <div class="row mb-4 align-items-center">
                <div class="col-md-6" data-aos="fade-up">

                    <h2>My Services</h2>
                    <p>Some of the services we have today. Creativity and optimal experience are our goals.</p>

                </div>


            </div>
        </div>

        <div class="site-section pb-0">
            <div class="container">

                <div class="row">

                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
                        <span class="la la-cube la-3x mb-4"></span>
                        <h4 class="h4 mb-2">Web Programming</h4>
                        <p>Professional Web Development, Committed to Bringing Innovation and Outstanding Features to Your
                            Website. With extensive knowledge and abundant experience, we take pride in being a trustworthy
                            partner for all your web projects.</p>
                        <ul class="list-unstyled list-line">
                            <li>Custom website development</li>
                            <li>Optimize performance</li>
                            <li>Security and maintenance</li>
                            <li>Data integration</li>
                            <li>Consulting and support</li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
                        <span class="la la-laptop la-3x mb-4"></span>
                        <h4 class="h4 mb-2">Web design</h4>
                        <p>Creativity and excellent web design combine to create unique and exciting online experiences. We
                            work
                            closely with you to understand your vision and turn it into a great website.</p>
                        <ul class="list-unstyled list-line">
                            <li>User interface design</li>
                            <li>User experience design</li>
                            <li>Create brand image</li>
                            <li>Responsive design</li>
                            <li>Design consultancy</li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
                        <span class="la la-image la-3x mb-4"></span>
                        <h4 class="h4 mb-2">Graphic Design</h4>
                        <p>where art and creativity converge to create unique and beautiful graphic designs. We turn your
                            ideas
                            and tastes into images and graphic content that make a strong impression on all audiences.</p>
                        <ul class="list-unstyled list-line">
                            <li>Logo and brand design</li>
                            <li>Graphic design for website</li>
                            <li>Print graphic design</li>
                            <li>Digitized graphics</li>
                            <li>Create graphic content</li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
                        <span class="la la-search la-3x mb-4"></span>
                        <h4 class="h4 mb-2">SEO</h4>
                        <p>The ideal partner to optimize your website's display on top search engines. We use advanced SEO
                            strategies to ensure your website appears at the top of rankings and attracts a high volume of
                            quality traffic.</p>
                        <ul class="list-unstyled list-line">
                            <li>Keyword search</li>
                            <li>On-page optimization</li>
                            <li>Link building</li>
                            <li>Tracking and reporting</li>
                            <li>Content strategy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <x-my-team />
    @endsection
