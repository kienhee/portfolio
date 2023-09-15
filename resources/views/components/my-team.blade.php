<div class="site-section pt-0">
    <div class="container">
        <div class="row justify-content-center text-center mb-4">
            <div class="col-md-5">
                <h3 class="h3 heading">My Team</h3>
                <p>Teammates always support each other in every project.</p>
            </div>
        </div>
        <div class="owl-carousel testimonial-carousel">
            @foreach (getAllMembers() as $item)
                <div class="testimonial-wrap">
                    <div class="testimonial">
                        <img src="{{ $item->avatar }}" alt="Image" class="img-fluid">
                        <blockquote>
                            <p>{{ $item->description }}</p>
                        </blockquote>
                        <p>&mdash; {{ $item->name }}</p>
                    </div>
                </div>
            @endforeach



        </div>

    </div>
</div>
