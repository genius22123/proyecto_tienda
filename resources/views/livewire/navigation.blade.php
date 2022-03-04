<style>
    .navigation-link:hover .navigation-submenu {
        display: block !important;
    }

</style>

<header class="shadow-sm">
    <!-- Topbar-->
    <div class="topbar topbar-dark bg-dark">
        <div class="container">
            <div>

                <div class=""><span class="text-muted me-1">Dispononible 24/7 al:</span><a class="topbar-link"
                        href="tel:962174883">(051) 962 174 883</a></div>
            </div>
            <div class="topbar-text dropdown d-md-none ms-auto"><a class="topbar-link dropdown-toggle" href="#"
                    data-bs-toggle="dropdown">Track</a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="order-tracking.html"><i
                                class="ci-location text-muted me-2"></i>Order tracking</a></li>
                </ul>
            </div>
            <div class="d-none d-md-block ms-3 text-nowrap">

                <a class="topbar-link ms-3 border-start border-light ps-3 d-none d-md-inline-block"
                    href="order-tracking.html"><i class="ci-location mt-n1"></i>Order tracking</a>
            </div>
        </div>
    </div>
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <div class="navbar-sticky bg-light">
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="container"><a class="navbar-brand d-none d-sm-block me-3 flex-shrink-0" href="index.html">
                    <img src="{{ asset('img/logo.png') }}" width="142" alt="unap"></a><a
                    class="navbar-brand d-sm-none me-2" href="index.html"><img src="{{ asset('img/logo.png') }}"
                        width="74" alt="Cartzilla"></a>
                <!-- Search-->
                @livewire('search')
                <!-- Toolbar-->
                <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>

                    {{-- <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#signin-modal">
                        <div class="navbar-tool-icon-box"></i> <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle"></i></div>
                        <div class="navbar-tool-text ms-n3"><small>Hola, Iniciar secion</small>Mi cuenta</div>
                    </a> --}}


                    <div class="dropdown text-end">
                        @auth
                            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                                data-bs-toggle="dropdown" aria-expanded="false">




                                <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"
                                    width="42" height="42" class="rounded-circle">


                            </a>
                            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" href="{{ route('profile.show') }}">perfil</a></li>



                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();">salir</a></li>



                                </form>
                            </ul>

                        @else

                            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                                data-bs-toggle="dropdown" aria-expanded="false">




                                <i class="bi bi-person-circle" style="font-size: 2rem; "></i>


                            </a>
                            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">

                                <li><a class="dropdown-item" href="{{ route('login') }}">Iniciar sesion</a></li>
                                <li><a class="dropdown-item" href="{{ route('register') }}">Registrate</a></li>


                            </ul>


                        @endauth
                    </div>



                    {{-- carrito de compras --}}

                    @livewire('dropdown-cart')
                </div>
            </div>
        </div>


        <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Search-->
                    @livewire('search2')

                    <!-- Departments menu-->



                    <ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle ps-lg-0" href="#" data-bs-toggle="dropdown">
                                <i class="bi bi-three-dots-vertical align-middle mt-n1 me-2"></i>
                                Categorias
                            </a>
                            <ul class="dropdown-menu">

                                @foreach ($categories as $category)
                                    <li class="navigation-link  dropdown mega-dropdown">



                                        <a class="dropdown-item dropdown-toggle"
                                            href="{{ route('categories.show', $category) }}" data-bs-toggle="dropdown"><i
                                                class="{{ $category->icon }} opacity-60 fs-lg mt-n1 me-2"></i>{{ $category->name }}</a>

                                        <div class="navigation-submenu dropdown-menu p-0">
                                            <div class="d-flex flex-wrap flex-sm-nowrap px-2">
                                                <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                                                    <div class="widget widget-links">

                                                        <ul class="widget-list">
                                                            <li class="dropdown-item product-title fw-medium"><a
                                                              href="{{route('categories.show',$category)}}">TODO:
                                                                    {{ $category->name }}<i
                                                                        class="bi bi-arrow-right-short fs-xs ms-1"></i></a>
                                                            </li>
                                                            <li class="dropdown-divider"></li>
                                                            @foreach ($category->subcategories as $subcategory)


                                                                <li class="widget-list-item pb-1"><a
                                                                        class="widget-list-link"
                                                                        href="#">{{ $subcategory->name }}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a
                                                        class="d-block mb-2" href="#"><img
                                                            src="{{ Storage::url($category->image) }}"
                                                            alt="Computers &amp; Accessories"></a>
                                                    <div class="fs-sm mb-3">Starting from <span
                                                            class='fw-medium'>$149.<small>80</small></span></div><a
                                                        class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i
                                                            class="ci-arrow-right fs-xs ms-1"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                @endforeach
                            </ul>

                        </li>
                    </ul>


                    <!-- Primary menu-->
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" href="#"
                                data-bs-toggle="dropdown">Home</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom"
                                        href="home-fashion-store-v1.html"><span class="d-block text-heading">Fashion
                                            Store v.1</span><small class="d-block text-muted">Classic shop
                                            layout</small></a>
                                    <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                            href="home-fashion-store-v1.html" style="width: 250px;"><img
                                                src="img/home/preview/th01.jpg" alt="Fashion Store v.1"></a></div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
