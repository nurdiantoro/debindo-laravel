@extends('frontend.components.template')
@section('content')
    <div id="news">
        <div class="container">
            <div class="row">

                <!-- Carousel -->
                <div class="col-md-12 carousel">
                    <div class="carousel-news owl-theme owl-carousel">
                        <?php
                        $i = 0;
                        foreach($newss as $carousel):

                        ?>
                        @if ($i <= 8)
                            <div class="carousel-news-item">
                                <span><?= $carousel->judul ?></span>
                                <img src="<?= url('storage/' . $carousel->image) ?>" class="img-fluid w-500"
                                    style="height: 500px; object-fit: cover">
                            </div>
                        @endif
                        <?php $i++; endforeach;?>
                    </div>
                    <script>
                        $(document).ready(function() {
                            $('.carousel-news').owlCarousel({
                                autoplay: true,
                                autoplayHoverPause: true,
                                autoplayTimeout: 5000,
                                smartSpeed: 1500,
                                items: 1,
                                loop: true,
                                margin: 0,
                                mouseDrag: true,
                                nav: false,
                                touchDrag: true,
                            })
                        });
                    </script>
                </div>

                <!-- Instagram -->
                {{-- <div class="col-md-4">
                    <div class="ig">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-4 col-4">
                                <div class="foto-profil-ig-wrapper">
                                    <div class="foto-profil-ig">
                                        <img src="<?= url('storage/img/debindo-logo.png') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-8 text-center">
                                <span class="nama-ig">debindonetwork</span>
                                <div class="row ">
                                    <div class="col-md-4 col-4">
                                        <span class="value">390<br></span>
                                        <span class="name">Posts</span>
                                    </div>
                                    <div class="col-md-4 col-4">
                                        <span class="value">5k<br></span>
                                        <span class="name">Followers</span>
                                    </div>
                                    <div class="col-md-4 col-4">
                                        <span class="value">25<br></span>
                                        <span class="name">Following</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ig-feed">
                            @foreach ($instagrams as $instagram)
                                <div class="col-md-4 col-4">
                                    @if ($instagram['media_type'] == 'IMAGE' || $instagram['media_type'] == 'CAROUSEL_ALBUM')
                                        <img src="{{ $instagram['media_url'] }}" alt="{{ $instagram['media_type'] }}"
                                            class="img-fluid">
                                    @elseif ($instagram['media_type'] == 'VIDEO')
                                        <img src="{{ $instagram['thumbnail_url'] }}" alt="{{ $instagram['media_type'] }}"
                                            class="img-fluid">
                                    @endif
                                </div>
                            @endforeach
                        </div>
                        <div class="w-100 text-center pt-2">
                            <a href="https://www.instagram.com/debindonetwork/" target="blank">visit our instagram</a>
                        </div>
                    </div>
                </div> --}}
            </div>


            <!-- NEWS -->
            <div class="row news-list">

                <?php foreach ($newss as $news) : ?>
                <div class="col-md-3 col-6 mb-4">
                    <a href="<?= url('news/' . $news->id) ?>">
                        <div class="card-news">
                            <div class="image-wrapper">
                                <img src="<?= url('storage/' . $news->image) ?>" class="image">
                            </div>
                            <div class="judul"><?= $news->judul ?></div>
                            <div class="isi"
                                style="white-space: nowrap; overflow: hidden;  text-overflow: ellipsis; height: 20px">
                                {!! $news->isi !!}
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
@endsection
