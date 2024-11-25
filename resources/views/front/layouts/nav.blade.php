<nav class="navbar navbar-expand-lg navbar-dark hny-bg-dark px-md-5 px-2 fixed-top w-100" height="72px">
    <div class="container-fluid  justify-content-between">
        <div class="logo">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="hanya" height="56px">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarTogglerDemo01">
            <div class=""></div>
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex gap-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('product.starlink') }}">Starlink</a></li>
                            <li><a class="dropdown-item" href="{{ route('product.kios') }}">Kios K & Digital Signage</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('product.ifp') }}">IFP</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Solution
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('solution.smartclass') }}">Smart Class</a></li>
                            <li><a class="dropdown-item" href="{{ route('solution.videotron') }}">Videotron & Video
                                    Wall</a></li>
                            <li><a class="dropdown-item" href="{{ route('solution.datacenter') }}">Data Center</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'blog.index' ? 'active' : '' }}"
                            aria-current="page" href="{{ route('blog.index') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'career.index' ? 'active' : '' }}"
                            aria-current="page" href="{{ route('career.index') }}">Career</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ Route::currentRouteName() == 'aboutus.index' ? 'active' : '' }}"
                            href="{{ route('aboutus.index') }}">About Us</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex">
                <a href="{{ route('contact.index') }}">
                    <button class="btn btn-hny-secondary btn-sm text-white w-100 w-lg-auto">Contact
                        Us</button>
                </a>
            </div>
        </div>
    </div>
</nav>
