@extends('frontend.components.template')
@section('content')
    <div id="event">


        <!-- Carousel -->
        <div class="container container-carousel">
            <div class="carousel-event owl-theme owl-carousel">
                @foreach ($eventCarousel as $carousel)
                    <div class="item">
                        <div class="title">{{ $carousel->title }}
                            <p>{{ $carousel->subtitle }}</p>
                        </div>
                        <img src="{{ asset('assets/img/event/' . $carousel->foto) }}" alt="" class="img-fluid w-100">
                    </div>
                @endforeach
            </div>
            <script>
                $(document).ready(function() {
                    $('.carousel-event').owlCarousel({
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


        <!-- Card -->
        <div class="container">
            <h1>
                <span style="color : var(--warna-01);">This Is </span>Our Journey
            </h1>
            <div class="row text-center">
                @foreach ($eventDebindo as $debindo)
                    <div class="col-md-3 col-6 h-100">
                        <a>
                            <div class="card-event">
                                <?php if ($debindo->lokasi == 'Virtual') {?>
                                <object data="{{ url('assets/img/event/virtual-event.svg') }}" class="virtual"></object>
                                <?php }?>

                                <div class="logo-wrapper">
                                    <img src="{{ url('assets/img/event') . '/' . $debindo->logo }}">
                                </div>
                                <span>{{ $debindo->judul }}</span>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>


        <!-- Tabel Event -->
        <div class="container pt-5">
            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>Nama Event</th>
                        <th>Tanggal</th>
                        <th>Tahun</th>
                        <th>Lokasi</th>
                        <th>Organized by</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td>{{ $event->judul }}</td>
                            <td>{{ date_format(new DateTime($event->tgl_mulai), 'd M') }} -
                                {{ date_format(new DateTime($event->tgl_selesai), 'd M') }}</td>
                            <td>{{ date_format(new DateTime($event->tgl_selesai), 'Y') }}</td>
                            <td>{{ $event->lokasi }}</td>
                            <td>{{ $event->eo }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <script>
                $(document).ready(function() {
                    $('#table_id').DataTable({
                        "order": [
                            [2, "desc"]
                        ],
                        "columnDefs": [{
                            "targets": 2,
                            "type": "date-eu"
                        }],
                        responsive: true,
                    });
                });
            </script>
        </div>
    </div>
@endsection
