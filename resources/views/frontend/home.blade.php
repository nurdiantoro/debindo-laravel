@extends('frontend.components.template')
@section('content')
    <div id="homepage">
        <div class="header" style="background-image: url('storage/img/MRA_6794.jpg');">
            <div class="text-center title">
                <h1>ALL EVENT SPECIALISTS</h1>
                <a href="{{ url('event') }}">
                    <button class="see-more"><span>SEE MORE</span></button>
                </a>
            </div>
        </div>

        <!----------------------------- Status ----------------------------->
        <div class="status ">
            <div class="container text-center">
                <div class="row d-flex justify-content-between px-3 align-items-center">
                    <div class="col-md-4">
                        <div class="list">
                            <h2>1987</h2>
                            <span>Since</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="list">
                            <h2>3219</h2>
                            <span>Happy Clients</span>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="list event active">
                            <div>
                                <span>More Than</span>
                                <h2>3000</h2>
                            </div>
                            <span>Completed Project</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!----------------------------- Our Values ----------------------------->
        <div class="about-debindo">
            <div class="container text-center">
                <h3>Our Values</h3>
                <div class="row mt-5 d-flex justify-content-between">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/img/debindo-logo-2.png') }}" class="img-fluid" alt="debindo-logo">
                    </div>
                    {{-- <img src="{{ asset('storage/img/our-value.png') }}" class="img-fluid" alt="our-value"> --}}
                    <div class="col-md-6 text-secondary d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column">
                            <span class="h1">
                                <i class="fas fa-cogs"></i>
                            </span>
                            <span>Optimism</span>
                        </div>
                        <div class="d-flex flex-column">
                            <span class="h1">
                                <i class="fas fa-lightbulb"></i>
                            </span>
                            <span>Determination</span>
                        </div>
                        <div class="d-flex flex-column">
                            <span class="h1">
                                <i class="fas fa-medal"></i>
                            </span>
                            <span>Achievement</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!----------------------------- Trusted Partner ----------------------------->
        <div class="partner">
            <div class="container">
                <div class="text-center w-auto">
                    <div class="h3-wrapper">
                        <h3>Deliver Excellence & Remarkable M.I.C.E Events Across All Business Industries
                        </h3>
                        <h4>Trusted by The Leading Professional Network Partners</h4>
                    </div>
                    <div class="carousel-partners owl-theme owl-carousel">
                        @foreach ($partners as $partner)
                            <img src="{{ asset('storage/' . $partner->logo) }}" alt="">
                        @endforeach
                    </div>

                    <script>
                        $(document).ready(function() {
                            $('.carousel-partners').owlCarousel({
                                items: 3,
                                autoWidth: true,
                                loop: true,
                                center: true,
                                autoplay: true,
                                autoplayTimeout: 2000,
                                autoplaySpeed: 2000,
                                dots: false,
                                lazyLoad: true,
                                margin: 50,

                                responsive: {
                                    0: {
                                        items: 1,
                                    },
                                    600: {
                                        items: 1,
                                    },
                                    1000: {
                                        items: 3,

                                    }

                                }
                            })
                        });
                    </script>
                </div>
            </div>
        </div>

        <!----------------------------- Next Event ----------------------------->
        <div class="next-event">
            <div class="container">
                <div class="text-center w-auto">
                    <div class="h3-wrapper">
                        <h3>Up Coming Show</h3>
                    </div>
                    <div class="card-flex">
                        @foreach ($next_events as $next_event)
                            <div class="card-wrapper">
                                <div class="card">
                                    <img src="{{ asset('storage/' . $next_event->image) }}" alt="">
                                    <p class="nama">{{ $next_event->name }}</p>
                                    <p class="tanggal">{{ $next_event->tanggal }}</p>
                                    <p class="lokasi">{{ $next_event->lokasi }}</p>
                                    @if ($next_event->link)
                                        <a href="{{ $next_event->link }}" target="_blank" class="link">Link
                                            Website</a>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!----------------------------- Youtube ----------------------------->
        <div class="highlights">
            <div class="container">
                <div class="text-center">
                    <div class="h3-wrapper">
                        <h3>Debindomulti Adhiswasti Project Highlights</h3>
                    </div>
                </div>
                <div class="row">
                    @foreach ($youtubes as $youtube)
                        <div class="col-md-3 col-6 mb-3">
                            <a href="{{ $youtube->link }}" target=_blank>
                                <div class="card-news">
                                    <div class="image-wrapper">
                                        <img class="image" src="{{ asset('storage/' . $youtube->thumbnail) }}"
                                            alt="{{ $youtube->thumbnail }}">
                                    </div>
                                    <div class="judul">{{ $youtube->title }}</div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!----------------------------- Testimoni ----------------------------->
        <div class="testimoni text-center">
            <h3>Testimonials</h3>
            <div class="carousel-testimoni owl-theme owl-carousel">
                @foreach ($testimoni as $testi)
                    <div class="carousel-testimoni-item">
                        <div class="foto-wrapper">
                            <img src="{{ asset('storage/' . $testi->foto) }}" alt="">
                        </div>
                        <div class="nama">
                            <?= $testi->nama ?>
                        </div>
                        <div class="jabatan">
                            <?= $testi->jabatan ?>
                        </div>
                        <div class="isi-testimoni">
                            <?= $testi->testimoni ?>
                        </div>
                    </div>
                @endforeach
            </div>
            <script>
                $(document).ready(function() {
                    $('.carousel-testimoni').owlCarousel({
                        autoplay: true,
                        autoplayTimeout: 5000,
                        autoWidth: true,
                        center: true,
                        dots: false,
                        smartSpeed: 1500,
                        loop: true,
                        margin: 10,
                        mouseDrag: true,
                        nav: false,

                        responsiveClass: true,
                        responsive: {
                            0: {
                                items: 1,
                                dots: true,
                                center: false,
                                autoWidth: false,
                            },
                            600: {
                                items: 1,
                            },
                            1000: {
                                items: 3,

                            }
                        }
                    })
                });
            </script>
        </div>
    </div>
@endsection
