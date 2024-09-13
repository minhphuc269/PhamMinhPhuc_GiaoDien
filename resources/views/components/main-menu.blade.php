<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
            <img class="img-fluid" src="{{ asset('images/logo.png') }}" alt="" style="width: 80px;">
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    
                    @foreach ($list_menu as $row_menu)
                    <x-main-menu-item :rowmenu="$row_menu" />
                    @endforeach
                    
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </div>
                    </div>
                </div>
                <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                    <i class="fa fa-fw fa-search text-dark mr-2"></i>
                </a>
                <a class="nav-icon position-relative text-decoration-none" href="{{ route('site.cart.index') }}">
                    @php
                        $carts =session('carts',[]);
                        $countqty=(is_array($carts))?count($carts):0;
                    @endphp
                    <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                    <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark" id="showqty">{{ $countqty }}</span>
                </a>

                {{-- <li class="nav-item px-2 position-relative">
                    @php
                        $carts =session('carts',[]);
                        $countqty=(is_array($carts))?count($carts):0;
                    @endphp
                <a href="{{ route('site.cart.index') }}">
                    Giỏ hàng(<span id="showqty">{{ $countqty }}</span>)
                </a>
                </li> --}}
                @if (Auth::check())
                @php
                    $user = Auth::user();
                @endphp
                <a class="nav-icon position-relative text-decoration-none" href="login.html">
                    {{ $user->name }}
                    <a href="{{ route('website.logout') }}">Đăng xuất</a>
                    {{-- <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span> --}}
                </a>
                @else
                <a class="nav-icon position-relative text-decoration-none" href="login.html">
                    <a href="{{ route('website.getlogin') }}">Đăng nhập</a>
                    {{-- <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span> --}}
                </a>
                @endif


                {{-- <a class="nav-icon position-relative text-decoration-none" href="login.html">
                    <i class="fa fa-fw fa-user text-dark mr-3"></i>
                    <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                </a> --}}
            </div>
        </div>

    </div>
</nav>