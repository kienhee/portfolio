<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', '| Tran Trung Kien')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{ asset('client') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('client') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700|Raleway:400,700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Iso&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="{{ asset('client') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('client') }}/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="{{ asset('client') }}/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('client') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('client') }}/vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('client') }}/css/style.css" rel="stylesheet">
    <!-- Primary Meta Tags -->

    <meta name="title" content="My CV - Tran Trung Kien" />
    <meta name="description"
        content="I am a programmer with over 1.5 years of experience, deeply passionate about creating applications and solving technical challenges.

I am always curious and eager to learn, ensuring that I stay up-to-date with the latest technologies, guaranteeing that my products and projects consistently achieve optimal performance. Responsibility and attention to detail are paramount to me, and I always aim to create suitable and efficient solutions. My creativity and passion for solving technical challenges are what I bring to every project. I believe that technology can change the world, and I am always ready to contribute to that. Please feel free to reach out if you are seeking a passionate and creative programmer to collaborate on your projects." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ getEnv('APP_URL') }}" />
    <meta property="og:title" content="My CV - Tran Trung Kien" />
    <meta property="og:description"
        content="I am a programmer with over 1.5 years of experience, deeply passionate about creating applications and solving technical challenges.

I am always curious and eager to learn, ensuring that I stay up-to-date with the latest technologies, guaranteeing that my products and projects consistently achieve optimal performance. Responsibility and attention to detail are paramount to me, and I always aim to create suitable and efficient solutions. My creativity and passion for solving technical challenges are what I bring to every project. I believe that technology can change the world, and I am always ready to contribute to that. Please feel free to reach out if you are seeking a passionate and creative programmer to collaborate on your projects." />
    <meta property="og:image" content="{{ getEnv('APP_URL') }}/images/meta-png.jpg" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ getEnv('APP_URL') }}" />
    <meta property="twitter:title" content="My CV - Tran Trung Kien" />
    <meta property="twitter:description"
        content="I am a programmer with over 1.5 years of experience, deeply passionate about creating applications and solving technical challenges.

I am always curious and eager to learn, ensuring that I stay up-to-date with the latest technologies, guaranteeing that my products and projects consistently achieve optimal performance. Responsibility and attention to detail are paramount to me, and I always aim to create suitable and efficient solutions. My creativity and passion for solving technical challenges are what I bring to every project. I believe that technology can change the world, and I am always ready to contribute to that. Please feel free to reach out if you are seeking a passionate and creative programmer to collaborate on your projects." />
    <meta property="twitter:image" content="{{ getEnv('APP_URL') }}/images/meta-png.jpg" />

    <!-- Meta Tags Generated with https://metatags.io -->

</head>

<body>
    @include('layouts.client.nav')
    <main id="main">
        @yield('content')
    </main>
    @include('layouts.client.footer')

    <!-- Vendor JS Files -->
    <script src="{{ asset('client') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('client') }}/vendor/jquery/jquery-migrate.min.js"></script>
    <script src="{{ asset('client') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('client') }}/vendor/easing/easing.min.js"></script>
    <script src="{{ asset('client') }}/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('client') }}/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="{{ asset('client') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('client') }}/vendor/owlcarousel/owl.carousel.min.js"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('client') }}/js/main.js"></script>

</body>

</html>
