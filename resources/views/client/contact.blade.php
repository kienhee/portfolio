@extends('layouts.client.index')
@section('title',"Contact me")
@section('content')
    <div class="site-section pb-0 site-portfolio">
        <div class="container">

            <div class="row mb-5 align-items-end">
                <div class="col-md-6" data-aos="fade-up">
                    <h2>Contact</h2>
                    <p class="mb-0">You are looking for an expert in the field of technology, wanting to own a modern,
                        luxurious product with good performance and easy to use. Please contact me.
                    </p>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="name">Email</label>
                                <input type="email" class="form-control" name="email" id="email" data-rule="email"
                                    data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject"
                                    data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" cols="30" rows="10" data-rule="required"
                                    data-msg="Please write something for us"></textarea>
                                <div class="validate"></div>
                            </div>


                            <div class="col-md-12 mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>

                            <div class="col-md-6 form-group">
                                <input type="submit" class="readmore d-block w-100" value="Send Message">
                            </div>
                        </div>

                    </form>

                </div>

                <div class="col-md-4 ml-auto order-2" data-aos="fade-up">
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <strong class="d-block mb-1">Address</strong>
                            <span>{{ author()->address }}</span>
                        </li>
                        <li class="mb-3">
                            <strong class="d-block mb-1">Phone</strong>
                            <a href="tel:{{ author()->phone_number }}"
                                style="color: inherit">{{ author()->phone_number }}</a>
                        </li>
                        <li class="mb-3">
                            <strong class="d-block mb-1">Email</strong>
                            <a href="mailto:{{ author()->email }}?subject=Product manufacturing - Hire"
                                style="color: inherit">{{ author()->email }}</a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

    </div>
@endsection
