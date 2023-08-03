@extends('frontend.components.template')
@section('title', 'Home')
@section('content')

    <main class="bg-neutral-100">

        <!-- ================================================================-->
        <!-- header -->
        <!-- ================================================================-->
        <header class="bg-cover bg-center min-h-screen" style="background-image: url({{ asset('assets/img/g9.png') }})">>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center">
                <h1 class="text-5xl font-bold mb-4 text-warna02">A MARKETPLACE MAKER</h1>
                <a href={{ url('/event') }}>
                    <button class="border-2 border-warna02 px-10 py-2 bg-black group relative">
                        <span class="text-white relative z-10 group-hover:text-black ease-['ease-out'] duration-300 ">SEE
                            MORE</span>
                        <span
                            class="absolute w-full h-0 group-hover:h-full bg-warna02 left-0 bottom-0 z-0 ease-['ease-out'] duration-300 "></span>
                    </button>
                </a>
            </div>
        </header>

        <!-- ================================================================-->
        <!-- Status -->
        <!-- ================================================================-->
        <div
            class="relative -top-[50px] bg-white rounded shadow-md w-1/2 mx-auto flex justify-around items-center text-center">
            <div class="flex flex-col py-4 px-12">
                <h2 class="text-4xl font-bold text-warna01">1987</h2>
                <span>Since</span>
            </div>
            <div class="flex flex-col py-4 px-12">
                <h2 class="text-4xl font-bold text-warna01">2156</h2>
                <span>Happy Clients</span>
            </div>
            <div class="flex flex-col py-4 px-12 event active bg-gradient-to-r from-gradasi01-0 to-gradasi01-1">
                <span class="text-white opacity-75">More Than</span>
                <h2 class="text-4xl font-bold text-white">3000</h2>
                <span class="text-white opacity-75">Completed Project</span>
            </div>
        </div>

        <!-- ================================================================-->
        <!-- About Debindo -->
        <!-- ================================================================-->
        <div class="px-60 flex flex-row py-7 items-center">
            <div class="basis-1/3 text-center">
                <img src={{ url('assets/img/debindo-logo-2.png') }} class="img-fluid mx-auto" alt="debindo-logo">
            </div>
            <p class="basis-2/3 text-center text-neutral-800">Exhibitors at DEBINDO will find all manner and dimensions of
                premises to suit every conceivable
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

        <!-- ================================================================-->
        <!-- Our Value -->
        <!-- ================================================================-->
        <div class="our-value bg-white px-60 py-20 flex justify-center w-full flex-col ">
            <div class="relative mb-10">
                <h3 class="text-2xl text-warna01 font-bold text-center mb-4">
                    Our Values</h3>
                <span class="content-[''] absolute w-24 h-2 bg-warna02 bottom-0 left-1/2 -translate-x-1/2"></span>
            </div>
            <img src={{ url('assets/img/our-value.png') }} class="max-w-4xl mx-auto" alt="our-value">
        </div>

        <!----------------------------- Highlights ----------------------------->
        <div class="highlights mt-56">
            <div class="container">
                <div class="text-center">
                    <div class="h3-wrapper">
                        <h3>Highlights</h3>
                    </div>
                </div>
                <div class="row">
                    @foreach ($highlights as $highlight)
                        <div class="col-md-3 col-6 mb-4">
                            <a href={{ url('news/id/') . $highlight->id }}>
                                <div class="card-news">
                                    <div class="image-wrapper">
                                        <img class="image" src={{ url('assets/img/news/') . $highlight->image }}
                                            alt={{ $highlight->image }}>
                                    </div>
                                    <div class="judul">{{ $highlight->judul }}</div>
                                    <p>{{ $highlight->isi }}</p>
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
                {{-- {{  foreach ($testimoni as $testi): }}
                <div class="carousel-testimoni-item">
                    <div class="foto-wrapper">
                        <img src={{ url('assets/img/about/') . $testi->foto }} alt="">
                    </div>
                    <div class="nama">
                        {{ $testi->nama }}
                    </div>
                    <div class="jabatan">
                        {{ $testi->jabatan }}
                    </div>
                    <div class="isi-testimoni">
                        {{ $testi->testimoni }}
                    </div>
                </div>
                {{  endforeach;}} --}}
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
    </main>
@endsection
