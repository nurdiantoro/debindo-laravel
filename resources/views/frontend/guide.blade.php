@extends('frontend.components.template')
@section('content')
    <div id="" style="padding: 100px 0px; min-height: 100vh">
        <div>
            <div class="container" style="margin-bottom: 50px">
                <h1>
                    <span style="color : var(--warna-01);">Debindo</span><br>Brand Guideline & SOP Documentation
                </h1>
            </div>
            <div class="text-center" style="margin-bottom: 50px">
                <div class="container">
                    <div class="row" style="align-items: center">
                        <div class="col-lg-6">
                            <span>ICONIC ASSET</span>
                            <p>The Debindo logo is our iconic asset. As its signature element, it strengthens brand
                                recognition in the consumer’s mind. It should be present at every brand touchpoint.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <img src="{{ url('storage/img/about/Logo Debindo dengan tagline-01.png') }}"
                                    style="max-width:200px !important">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="quality-service text-center">
                <div class="container">
                    <h2 style="font-weight: var(--bold); color: var(--warna-02);">
                        <span style="color : var(--warna-01);">Download</span> Brand Guideline here
                    </h2>
                    <style>
                        .btn-download {
                            padding: 5px 40px;
                            border-radius: 5px;
                            border: 1px solid var(--warna-01);
                            background-color: var(--white-100);
                            color: var(--warna-01);
                            transition: 150ms ease-out;
                            text-decoration: none;
                            display: inline-block;
                        }

                        .btn-download:hover {
                            background-color: var(--warna-01);
                            color: var(--white-100);
                        }
                    </style>

                    <a href="{{ url('storage/Debindo Brand Guideline.pdf') }}" download="Debindo-Brand-Guideline.pdf"
                        class="btn-download">
                        Download
                    </a>


                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
