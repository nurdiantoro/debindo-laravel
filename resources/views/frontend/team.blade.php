@extends('frontend.components.template')
@section('content')
    <div id="team">
        <div class="container">
            <h1 class="pb-3">
                <span style="color : var(--warna-01);">WE'RE GLAD YOU KNOW</span> OUR TEAM
            </h1>

            @php
                $teams = [
                    ['data' => $ourDireksi->sortBy('urutan'), 'class' => 'direksi'],
                    ['data' => $ourManager->sortBy('urutan'), 'class' => 'manager'],
                    ['data' => $ourStaff->sortBy('urutan'), 'class' => 'staff'],
                ];
            @endphp

            @foreach ($teams as $team)
                <div class="row justify-content-center">
                    @foreach ($team['data'] as $person)
                        <div class="col-md-3 col-12">
                            <div class="card-team {{ $team['class'] }}">
                                <div class="foto-wrapper">
                                    <img src="{{ url('storage/' . $person->foto) }}" alt="">
                                </div>
                                <div class="detail">
                                    <div class="nama">{{ $person['nama'] }}</div>
                                    <div class="jabatan">{{ $person['jabatan'] }}</div>
                                    <div>
                                        <a href="mailto:{{ $person['email'] }}">
                                            <i class="icon fas fa-envelope"></i>
                                        </a>
                                        <a href="{{ $person['linkedin'] }}">
                                            <i class="icon fab fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach

        </div>
    </div>
@endsection
