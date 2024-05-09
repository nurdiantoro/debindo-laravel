@extends('frontend.components.template')
@section('content')
    <div id="news">
        <div class="container">
            <div class="row">

                <!-- Carousel -->
                <div class="col-md-8 carousel">
                    <div class="carousel-news owl-theme owl-carousel">
                        <?php foreach($newsCarousel as $carousel): ?>
                        <div class="carousel-news-item">
                            <span><?= $carousel->title ?></span>
                            <img src="<?= url('storage/img/news') . '/' . $carousel->foto ?>" alt="<?= $carousel->foto ?>"
                                class="img-fluid w-100">
                        </div>
                        <?php endforeach;?>
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
                <div class="col-md-4">
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
                            <div class="col-md-4 col-4">
                                <img src="<?= url('storage/img/news/ig-feed-1.png') ?>" class="img-fluid">
                            </div>
                            <div class="col-md-4 col-4">
                                <img src="<?= url('storage/img/news/ig-feed-2.png') ?>" class="img-fluid">
                            </div>
                            <div class="col-md-4 col-4">
                                <img src="<?= url('storage/img/news/ig-feed-3.png') ?>" class="img-fluid">
                            </div>
                            <div class="col-md-4 col-4">
                                <img src="<?= url('storage/img/news/ig-feed-4.png') ?>" class="img-fluid">
                            </div>
                            <div class="col-md-4 col-4">
                                <img src="<?= url('storage/img/news/ig-feed-5.png') ?>" class="img-fluid">
                            </div>
                            <div class="col-md-4 col-4">
                                <img src="<?= url('storage/img/news/ig-feed-6.png') ?>" class="img-fluid">
                            </div>
                        </div>
                        <div class="w-100 text-center pt-2">
                            <a href="https://www.instagram.com/debindonetwork/" target="blank">visit our instagram</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- NEWS -->
            <div class="row news-list">

                <?php foreach ($newss as $news) : ?>
                <div class="col-md-3 col-6 mb-4">
                    <a href="<?= url('news/' . $news->id) ?>">
                        <div class="card-news">
                            <div class="image-wrapper">
                                <img src="<?= url('storage/img/news') . '/' . $news->image ?>" class="image">
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
