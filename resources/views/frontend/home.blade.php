@extends('frontend.components.template')
@section('content')
    <div id="homepage">
        <div class="header">
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
                            <h2>2156</h2>
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

        <!----------------------------- About Debindo ----------------------------->
        <div class="about-debindo">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/img/debindo-logo-2.png') }}" class="img-fluid" alt="debindo-logo">
                    </div>
                    <div class="col-md-8 ">
                        <p>Exhibitors at DEBINDO will find all manner and dimensions of premises to suit every conceivable
                            idea
                            and
                            concept.
                            The possibilities for individual planning, combined with excellent service from our experienced
                            officers, make
                            DEBINDO the ideal partner for you to participate on our trade shows, conferences, congresses and
                            special
                            events.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!----------------------------- Our Value ----------------------------->
        <div class="our-value">
            <div class="container">
                <div class="text-center w-auto">
                    <div class="h3-wrapper">
                        <h3>Our Values</h3>
                    </div>
                    <img src="{{ asset('assets/img/our-value.png') }}" class="img-fluid" alt="our-value">
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
                                        <img class="image"
                                            src="{{ asset('assets/img/youtube') . '/' . $youtube->thumbnail }}"
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
                            <img src="{{ asset('assets/img/testimoni') . '/' . $testi->foto }}" alt="">
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
