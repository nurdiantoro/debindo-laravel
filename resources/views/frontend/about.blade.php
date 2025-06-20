@extends('frontend.components.template')
@section('content')
    <div id="about">
        <div>
            <div class="container">
                <h1>
                    <span style="color : var(--warna-01);">ABOUT</span> US
                </h1>
            </div>
            <div class="container">
                <div class="logo-wrapper">
                    <div class="">
                        <a href="https://debindo.com/">
                            <img src="{{ url('storage/img/about/Logo Debindo dengan tagline-01.png') }}"
                                style="max-width:120px !important">
                        </a>
                    </div>
                </div>
                {{-- <div
                    style="
                    font-weight: var(--bold);
                    color: var(--warna-01);
                    text-align: center;
                    width: 100%;
                    line-height: 80px;">
                    <span style="color : var(--warna-02); font-size: 28px;">Our</span>
                    <span style="color : var(--warna-01); font-size: 28px;"> Network</span>
                </div> --}}

                {{-- <div class="logo-wrapper" style="padding-top:0px">
                    <div class="logo">
                        <a href="http://debindo-ite.com/">
                            <img src="{{ url('storage/img/about/Asset 13.png') }}" alt="">
                        </a>
                    </div>
                    <div class="logo">
                        <a href="https://debindomitratama.com/">
                            <img src="{{ url('storage/img/about/Asset 14.png') }}" alt="">
                        </a>
                    </div>
                    <div class="logo">
                        <a>
                            <img src="{{ url('storage/img/about/Asset 15.png') }}" alt="">
                        </a>
                    </div>
                    <div class="logo">
                        <a>
                            <img src="{{ url('storage/img/about/Asset 16.png') }}" alt="">
                        </a>
                    </div>
                    <div class="logo">
                        <a>
                            <img src="{{ url('storage/img/about/Asset 17.png') }}" alt="">
                        </a>
                    </div>
                    <div class="logo">
                        <a>
                            <img src="{{ url('storage/img/about/Asset 18.png') }}" alt="">
                        </a>
                    </div>
                </div> --}}
            </div>
            <div class="who-we-are text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <span>WHO WE ARE</span>
                            <p>Debindo sets sights on providing exhibitors and visitors with top quality services through
                                continued global network expansion and exploring opportunities for growth in support of our
                                leading market position. Debindo aims to build itself as a symbol of synergy and the spirit
                                of the nation through professional business in exhibition and convention in Indonesia and
                                the Asia Paciﬁc Region. We are committed to being in the forefront of the industry to make
                                Indonesia the center of growth for trade and industry in the Asia Paciﬁc Region. We strive
                                for professional excellence to make Indonesia one of the world-class tourism and business
                                destinations. Management & Organization Pioneering a professional trade and customer
                                exhibition in Indonesia with a solid and professional management for over 18 years in
                                operation has put Debindo in the leading market position. Debindo has developed and managed
                                an extensive network nationwide with 5 (ﬁve) branch ofﬁces and regional representative
                                ofﬁces. A dedicated team of 200 professional staff is on full-time dedication to providing
                                the best professional service.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <img src="{{ url('storage/img/about/foto-bod.png') }}" alt="foto-bod-debindo"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="quality-service text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="image-wrapper" style="padding: 0px">
                                <img src="{{ url('storage/img/about/logo-debindo-kan-iso-2025.png') }}" class="img-fluid"
                                    style="max-height: 400px">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <span>QUALITY SERVICE</span>
                            <p>Exhibitors at DEBINDO will find all manner and dimensions of premises to suit every
                                conceivable idea and concept. The possibilities for individual planning, combined with
                                excellent service from our experienced officers, make DEBINDO the ideal partner for you to
                                participate on our trade shows, conferences, congresses and special events. DEBINDO’s
                                reliability is valued greatly by its customers, many of whom have worked closely with the
                                company. For years, we had organized event for top ministries of Indonesia Government,
                                various companies, organizations. Debindo is also creating its own trade shows, and many has
                                reached immense success such as Indonesia Building Technology Expo (Indobuildtech), Property
                                Shows, Fashion and Crafts, etc. The strong brands of DEBINDO’s flagship fairs are unrivalled
                                and successful both at the indonesia and all over the world. We offer international
                                marketing platforms for consumer goods, textiles, architecture, property, hospitality,
                                technology and design as well as building technology. Take advantage of our services to
                                ensure that your trade fair appearance is a success. We and our on-site service partners
                                help you with the organisation and execution of your trade fair participation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
