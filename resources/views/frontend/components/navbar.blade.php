<nav class=" w-full flex items-center justify-between px-40 mx-auto fixed z-50 ease-[ease-out] duration-300 backdrop-blur-[2px] border-b-[1px] border-neutral-600 text-warna02"
    id="navbar">
    <a class="" href={{ url('/') }}>
        <img src={{ asset('assets/img/debindo-logo.png') }} class="" alt="debindo-logo">
    </a>
    <ul class="flex h-full">
        <x-navlink link="{{ url('/') }}" children="HOME" />
        <x-navlink link="{{ url('/event') }}" children="EVENTS" />
        <x-navlink link="{{ url('/news') }}" children="NEWS" />
        <x-navlink link="{{ url('/career') }}" children="CAREER" />
        <x-navlink link="{{ url('/team') }}" children="OUR TEAM" />
        <x-navlink link="{{ url('/about') }}" children="ABOUT" />
        <x-navlink link="{{ url('/contact') }}" children="CONTACT US" />
    </ul>

    <ul class="flex h-full">
        <x-navlink-icon link="https://www.instagram.com/debindonetwork/" children="fab fa-instagram" />
        <x-navlink-icon link="https://www.facebook.com/DebindoNetwork" children="fab fa-facebook" />
        <x-navlink-icon link="https://www.youtube.com/channel/UCIPrt0NBCwyNhaKWeSd4iLw?view_as=subscriber/"
            children="fab fa-youtube" />
        <x-navlink-icon link="https://www.linkedin.com/company/debindo/" children="fab fa-linkedin" />
    </ul>
</nav>
