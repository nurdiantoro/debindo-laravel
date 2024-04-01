<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('') }}">
            <img src="{{ url('assets/img/debindo-logo.png') }}" class="" alt="debindo-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav navbar-page">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ url('') }}">HOME</a>
                </li>
                <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                    <a href="{{ url('about') }}">ABOUT</a>
                </li>
                <li class="nav-item {{ request()->is('team') ? 'active' : '' }}">
                    <a href="{{ url('team') }}">OUR TEAM</a>
                </li>
                <li class="nav-item {{ request()->is('event') ? 'active' : '' }}">
                    <a href="{{ url('event') }}">EVENTS</a>
                </li>
                <li class="nav-item {{ request()->is('career') ? 'active' : '' }}">
                    <a href="{{ url('career') }}">CAREER</a>
                </li>
                <li class="nav-item {{ request()->is('news') ? 'active' : '' }}">
                    <a href="{{ url('news') }}">NEWS</a>
                </li>
                <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                    <a href="{{ url('contact') }}">CONTACT US</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav social-media">
                <li class="nav-item">
                    <a class=" " href="https://www.instagram.com/debindonetwork/" target="blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=" " href="https://www.facebook.com/DebindoNetwork/" target="blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=" " href="https://www.youtube.com/channel/UCIPrt0NBCwyNhaKWeSd4iLw?view_as=subscriber"
                        target="blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=" " href="https://www.linkedin.com/company/debindo/" target="blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
