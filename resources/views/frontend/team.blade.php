@extends('frontend.components.template')
@section('content')
    <div id="team">
        <div class="container">
            <h1 class="pb-3">
                <span style="color : var(--warna-01);">WE'RE GLAD YOU KNOW</span> OUR TEAM
            </h1>

            <!-- Direksi -->
            <div class="board-of-director">
                <div class="row justify-content-center">
                    @foreach ($ourDireksi as $direksi)
                        <div class="col-md-3 col-12">
                            <div class="card-team direksi">
                                <div class="foto-wrapper">
                                    <img src="{{ url('assets/img/team') . '/' . $direksi->foto }}"alt="">
                                </div>
                                <div class="detail">
                                    <div class="nama">
                                        {{ $direksi['nama'] }}
                                    </div>
                                    <div class="jabatan">
                                        {{ $direksi['jabatan'] }}
                                    </div>
                                    <div>
                                        <a href="mailto:{{ $direksi['email'] }}">
                                            <i class="icon fas fa-envelope"></i>
                                        </a>
                                        <a href="{{ $direksi['linkedin'] }}">
                                            <i class="icon fab fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Manajer & Staff -->
            <div class="row justify-content-center">
                @foreach ($ourManager as $manager)
                    <div class="col-md-3 col-12">
                        <div class="card-team manager">
                            <div class="foto-wrapper">
                                <img src="{{ url('assets/img/team') . '/' . $manager->foto }}" alt="">
                            </div>
                            <div class="detail">
                                <div class="nama">
                                    {{ $manager['nama'] }}
                                </div>
                                <div class="jabatan">
                                    {{ $manager['jabatan'] }}
                                </div>
                                <div>
                                    <a href="mailto:{{ $manager['email'] }}">
                                        <i class="icon fas fa-envelope"></i>
                                    </a>
                                    <a href="{{ $manager['linkedin'] }}">
                                        <i class="icon fab fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="row justify-content-center">
                @foreach ($ourStaff as $staff)
                    <div class="col-md-3 col-12">
                        <div class="card-team staff">
                            <div class="foto-wrapper">
                                <img src="{{ url('assets/img/team') . '/' . $staff->foto }}" alt="">
                            </div>
                            <div class="detail">
                                <div class="nama">
                                    {{ $staff['nama'] }}
                                </div>
                                <div class="jabatan">
                                    {{ $staff['jabatan'] }}
                                </div>
                                <div>
                                    <a href="mailto:{{ $staff['email'] }}">
                                        <i class="icon fas fa-envelope"></i>
                                    </a>
                                    <a href="{{ $staff['linkedin'] }}">
                                        <i class="icon fab fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
