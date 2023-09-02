{{-- main-header --}}
<nav class=" navbar navbar-expand p-3 gap-6 shadow-md">
    <li
        class="nav-item d-none text-sm font-semibold d-sm-inline-block text-dark d-flex justify-center align-items-center ps-5">
        <a href="#" class="nav-link"><img src="/images/myntralogo.png" alt=""
                style="height: 40px;width:75px;"></a>
    </li>
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        {{-- <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li> --}}

        <li class="nav-item d-none text-sm font-semibold d-sm-inline-block text-dark pe-2">
            <a href="#" class="nav-link">MEN</a>
        </li>
        <li class="nav-item d-none text-sm  font-semibold d-sm-inline-block text-dark pe-2">
            <a href="#" class="nav-link">WOMEN</a>
        </li>
        <li class="nav-item d-none text-sm  font-semibold d-sm-inline-block text-dark pe-2">
            <a href="#" class="nav-link">KIDS</a>
        </li>
        <li class="text-sm  font-semibold nav-item d-none d-sm-inline-block text-dark pe-2">
            <a href="#" class="nav-link">HOME & LIVING</a>
        </li>
        <li class="nav-item text-sm font-semibold d-none d-sm-inline-block text-dark pe-2">
            <a href="#" class="nav-link">BEAUTY</a>
        </li>
        <li class="nav-item d-none font-semibold text-sm d-sm-inline-block text-dark pe-20">
            <a href="#" class="nav-link">STUDIO</a>
        </li>


        <li class=" nav-item d-sm-inline-block me-5">


            <form class="d-flex gap-1" role="search">
                <button class="btn bg-gray-100 " type="submit"><i class="fa fa-search"
                        style="color: gray"></i></button>
                <input class="form-control me-2 rounded-sm outline-none border-none bg-gray-100" type="search"
                    placeholder="Search for products brands and more" style="width:400px;">

            </form>
        </li>
    </ul>
    <ul class="d-flex gap-4">




        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header"><i class="far fa-user"></i></span>
                <div class="dropdown-divider"></div>
                 <span class="dropdown-item dropdown-header">
                    <a href="{{ route('welcome') }}" class="d-flex gap-2 justify-center align-items-center"><i class="far fa-user"></i>Admin</a>
                </span>
                <div class="dropdown-divider"></div>

                <div class="dropdown-divider"></div>
                <a href="#">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="route('logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();"
                            class="dropdown-item">
                            {{ __('Log Out') }}
                        </a>
                    </form>

                </a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('product') }}">
                <i class="fas fa-heart"></i>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="{{ route('cartEmpty') }}" >
                <i class="fa-solid fa-bag-shopping"></i>
            </a>
        </li>
    </ul>
</nav>
