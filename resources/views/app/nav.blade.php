

<nav class="navbar navbar-expand-md navbar-light bg-light"
     aria-label="Navbar">
    <div class="container-lg">
        <a class="navbar-brand text-primary hvr-skew "><img class="img-fluid img-size" src="{{ asset('storage/img/Dürs logo.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbars"
                aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbars">
            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link px-3 text-primary hvr-bob " href="{{ route('language', 'en') }}"><img src="{{ asset('storage/img/uk-flag.png') }}" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 text-primary hvr-bob " href="{{ route('language', 'tm') }}"><img src="{{ asset('storage/img/tkm-flag.png') }}" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 text-primary hvr-bob " href="{{ route('language', 'ru') }}"><img src="{{ asset('storage/img/rus-flag.png') }}" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 text-primary hvr-bob " href="" alt=""></a>
                </li>
                    <a class="nav-link menu-size text-success fw-bold text-uppercase  px-4 rounded-pill ms-2" href="#">                 <li class="nav-item"><i class="bi bi-list"></i>
                            @lang('app.menu')
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>