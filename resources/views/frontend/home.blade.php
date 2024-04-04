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

        <!----------------------------- About Debindo ----------------------------->
        <div class="about-debindo">
            <div class="container text-center">
                <h3>Our Values</h3>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/img/debindo-logo-2.png') }}" class="img-fluid" alt="debindo-logo">
                    </div>
                    <div class="col-md-8 ">
                        <img src="{{ asset('assets/img/our-value.png') }}" class="img-fluid" alt="our-value">

                        {{-- <p>Exhibitors at DEBINDO will find all manner and dimensions of premises to suit every conceivable
                            idea
                            and
                            concept.
                            The possibilities for individual planning, combined with excellent service from our experienced
                            officers, make
                            DEBINDO the ideal partner for you to participate on our trade shows, conferences, congresses and
                            special
                            events.
                        </p> --}}
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
                        {{-- @foreach ($partners as $partner) --}}
                        <img src="{{ asset('assets/img/partner/asperapi.jpg') }}" alt="">
                        <img src="{{ asset('assets/img/partner/Asosiasi Pengusaha Indonesia.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/Bank Mandiri Logo.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/Bank Sentral Republik Indonesia.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/bhayangkari.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/dahana.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/dekranas.jpg') }}" alt="">
                        <img src="{{ asset('assets/img/partner/H HD Defend ID.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/hipmi.png') }}"alt="">
                        <img src="{{ asset('assets/img/partner/Indonesia Eximbank.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/indonesian diaspora.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/INDONESIAN EXPORTERS ASSOCIATION.webp') }}" alt="">
                        <img src="{{ asset('assets/img/partner/iwapi.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/kadin.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/kemenbumn.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/KemenkoMaritim.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/kementerian dalam negeri.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/Kementerian INVESTASI Republik Indonesia.png') }}"
                            alt="">
                        <img src="{{ asset('assets/img/partner/Kementerian Kesehatan Republik Indonesia.png') }}"
                            alt="">
                        <img src="{{ asset('assets/img/partner/kementerian keuangan.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/Kementerian Komunikasi dan Informatika Republik Indonesia.png') }}"
                            alt="">
                        <img src="{{ asset('assets/img/partner/Kementerian Koperasi dan Usaha Kecil dan Menengah Republik Indonesia.png') }}"
                            alt="">
                        <img src="{{ asset('assets/img/partner/kementerian luar negeri.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/Kementerian Pariwisata dan Ekonomi Kreatif Republik Indonesia.png') }}"
                            alt="">
                        <img src="{{ asset('assets/img/partner/Kementerian Perencanaan Pembangunan Nasional Republik Indonesia.png') }}"
                            alt="">
                        <img src="{{ asset('assets/img/partner/kementerian perindustrian.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/Kementerian PERTANIAN Republik Indonesia.png') }}"
                            alt="">
                        <img src="{{ asset('assets/img/partner/Muhammadiyah.jpg') }}" alt="">
                        <img src="{{ asset('assets/img/partner/P2NU.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/PAL INDONESIA.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/Pegadaian.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/Pertamina.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/pindad.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/PNM.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/PP Pembangunan Perumahan.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/PT DI.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/PT Len Industri (Persero).png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/Pupuk Indonesia.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/rumah bumn.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/Rumah Kreatif BUMN.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/Setneg_RI.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/Telkom.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/Waskita.png') }}" alt="">
                        <img src="{{ asset('assets/img/partner/YRKI.png') }}" alt="">
                        {{-- @endforeach --}}
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
                        <h3>Up Comming Show</h3>
                    </div>
                    <div class="card-flex">
                        <div class="card-wrapper">
                            <div class="card">
                                <img src="{{ asset('assets/img/event/Web_Banner_TEI_(Debindo)(1).jpg') }}"
                                    alt="">
                                <p class="nama">Trade Expo Indonesia</p>
                                <p class="tanggal">9 - 12 October 2024</p>
                                <p class="lokasi">ICE BSD, Tangerang</p>
                                <a href="https://www.tradexpoindonesia.com/" target="_blank" class="link">Link
                                    Website</a>
                            </div>
                        </div>
                        <div class="card-wrapper">
                            <div class="card">
                                <img src="{{ asset('assets/img/event/Banner_Kriya_1334x478.jpg') }}" alt="">
                                <p class="nama">kriya Indonesia</p>
                                <p class="tanggal">10-14 Juli 2024</p>
                                <p class="lokasi">Assembly Hall JCC, Jakarta Pusat</p>
                                <a href="https://kriya-indonesia.com/" target="_blank" class="link">Link Website</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!----------------------------- Our Value ----------------------------->
        {{-- <div class="our-value">
            <div class="container">
                <div class="text-center w-auto">
                    <div class="h3-wrapper">
                        <h3>Our Values</h3>
                    </div>
                    <img src="{{ asset('assets/img/our-value.png') }}" class="img-fluid" alt="our-value">
                </div>
            </div>
        </div> --}}

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
