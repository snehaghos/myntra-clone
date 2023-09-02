<aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar ">
        <ul class="nav nav-pills nav-sidebar flex-column gap-y-3" data-widget="treeview" role="menu"
            data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->

            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        {{ __('Dashboard') }}

                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        {{ __('Home') }}

                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('product.index') }}" class="nav-link">
                    <i class=" nav-icon fa-regular fa-id-badge" style="color: #d6d6d6;"></i>
                    <p>
                        {{ __('Product') }}
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('category.index') }}" class="nav-link">
                    <i class="nav-icon fa-solid fa-user" style="color: #d1d1d1;"></i>
                    <p>
                        {{ __('Product Category') }}

                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        {{ __('Sale') }}

                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-question"></i>
                    <p>
                        {{ __('Profit') }}
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        {{ __('User') }}

                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fa-solid fa-user" style="color: #d1d1d1;"></i>
                    <p>
                        {{ __('Front') }}

                    </p>
                </a>
            </li>


            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();"
                        class="d-flex nav-link">
                        <i class=' nav-icon fas fa-arrow-circle-right'></i>
                        <p>



                            {{ __('Log Out') }}
                        </p>
                    </a>


                    </a>
                </form>
            </li>


        </ul>
        <nav class="mt-2">
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>
