<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DKK154VZ5Z"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-DKK154VZ5Z');
    </script>

    @include('frontend.components.watermark')
    <?php
    $description = 'Exhibitors at DEBINDO will find all manner and dimensions of premises to suit every conceivable idea and concept. The possibilities for individual planning, combined with excellent service from our experienced officers, make DEBINDO the ideal partner for you to participate on our trade shows, conferences, congresses and special events.';
    $image = url('assets/img/debindo-logo-01.png');
    ?>

    <!-- SEO -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="Debindo, Event Organizer, Professional Event Organizer, Event">
    <meta name="author" content="Debindo">

    <!-- Meta Google -->
    <meta itemprop="name" content="Debindo | {{ $title }}">
    <meta itemprop="description" content="{{ $description }}">
    <meta itemprop="image" content="{{ $image }}">

    <!-- Meta Facebook -->
    <meta property="og:title" content="Debindo | {{ $title }}" />
    <meta property="og:type" content="website">
    <meta property="og:description" content="{{ $description }}" />
    <meta property="og:image" content="{{ $image }}" />
    <meta property="og:url" content="{{ url('') }}" />

    <title>Debindo | {{ $title }}</title>
    <link rel="icon" type="image/x-icon" href="{{ url('assets/img/debindo-logo.png') }}">

    <!-- CSS -->
    <link href="{{ url('assets/style.css') }}" rel="stylesheet">
    <link href="{{ url('assets/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/owlcarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />


    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">


    <!-- JS -->
    <script src="{{ url('assets/jquery.min.js') }}"></script>
    <script src="{{ url('assets/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ url('assets/datatables/datatables.min.js') }}"></script>


</head>

<body>
    @include('frontend.components.navbar')
    @yield('content')

    @include('frontend.components.footer')

    {{-- JavaScript untuk efek scroll --}}
    <script>
        window.addEventListener('scroll', function() {
            var navbar = document.getElementById('navbar');
            var navlinks = document.querySelectorAll('.navlink');
            if (window.scrollY > window.innerHeight) {
                console.log(navlink)
                navbar.classList.add('bg-white', 'text-neutral-950', 'shadow');
                navbar.classList.remove('text-warna02', 'border-neutral-600');

                navlinks.forEach(navlink => {
                    navlink.classList.add('text-neutral-950', 'hover:text-warna01');
                    navlink.classList.remove('text-white', 'hover:text-warna02');
                })
            } else {
                navbar.classList.remove('bg-white', 'text-neutral-950', 'shadow');
                navbar.classList.add('text-warna02', 'border-neutral-600');

                navlinks.forEach(navlink => {
                    navlink.classList.remove('text-neutral-950', 'hover:text-warna01');
                    navlink.classList.add('text-white', 'hover:text-warna02');
                })
            }
        });
    </script>

    {{-- CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/owlcarousel/owl.carousel.min.js') }}"></script>
</body>

</html>
