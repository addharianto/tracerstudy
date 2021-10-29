<div class="clever-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <!-- Menu -->
        <!-- <nav class="classy-navbar justify-content-between" id="cleverNav"> -->
        <nav class="navbar navbar-dark bg-success justify-content-between">
        <!-- <nav class="navbar navbar-light" style="background-color: #2E8B57;"> -->
            <!-- Logo -->
            <a class="nav-brand" href="/"><img src="{{ asset('img/icons') }}/uhlogo.png" width="50" alt=""> Tracer Study </a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">

                <!-- Close Button -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>

                <!-- Nav Start -->
                <div class="classynav">
                    <ul>
                        <li><a href="/" class="{{ Request::is('/') || Request::is('home') ? 'text-warning' : '' }}">Home</a></li>
                        <li><a href="{{ route('lowongan') }}" class="{{ Request::is('lowongan') ? 'text-warning' : '' }}">Lowongan</a></li>
                        <!-- <li><a href="{{ route('about') }}" class="{{ Request::is('about') ? 'text-warning' : '' }}">Tentang</a></li> -->
                        <!-- <li><a href="{{ route('contact') }}" class="{{ Request::is('contact') ? 'text-warning' : '' }}">Kontak</a></li> -->
                        <li><a href="{{ route('artikel') }}" class="{{ Request::segment(1) == 'artikel' ? 'text-warning' : '' }}">Artikel</a></li>
                        <li><a href="{{ route('pengumuman') }}" class="{{ Request::segment(1) == 'pengumuman' ? 'text-warning' : '' }}">Pengumuman</a></li>
                        <li><a href="{{ route('agenda') }}" class="{{ Request::is('agenda') ? 'text-warning' : '' }}">Agenda</a></li>
                    </ul>

                    <!-- Search Button -->
                    <div class="search-area">
                        <form action="{{ route('artikel.search') }}" method="GET">
                            <input name="keyword" id="search" placeholder="Search">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>

                    @auth
                    <div class="login-state d-flex align-items-center">
                        <div class="user-name mr-30">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                @if (auth()->user()->level=='admin')
                                    <a class="dropdown-item" href="{{ route('admin.index') }}">Dashboard Admin</a>
                                @elseif(auth()->user()->level=='alumni')
                                <a class="dropdown-item" href="{{ route('alumni.index') }}">Dashboard Alumni</a>
                                <a class="dropdown-item" href="{{ route('alumni.index') }}">Tracer Study</a>
                            </a>
                                @endif
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endauth

                </div>
                <!-- Nav End -->
            </div>
        </nav>
    </div>
</div>