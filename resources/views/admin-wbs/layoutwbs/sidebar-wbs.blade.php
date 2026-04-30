<div class="d-flex">

    <!-- SIDEBAR -->
    <div class="bg-dark text-white d-flex flex-column" style="width: 250px; min-height: 100vh;">

        <div class="p-3 text-center border-bottom">
            <h5>WBS PANEL</h5>
        </div>

        <ul class="nav flex-column mt-3 px-2">

            <li class="nav-item">
                <a href="/admin-wbs"
                   class="nav-link text-white d-flex align-items-center {{ request()->is('admin-wbs') ? 'bg-primary rounded' : '' }}">
                    
                    <i class="nav-icon fas fa-inbox mr-2"></i>
                    WBS Data Masuk
                </a>
            </li>

        </ul>

        <div class="mt-auto px-2 mb-3">
            <hr class="bg-secondary">

            <a href="{{ route('logout') }}"
               class="nav-link text-white d-flex align-items-center"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                <i class="nav-icon fas fa-sign-out-alt mr-2"></i>
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </div>

    </div>

    <!-- CONTENT -->
    <div class="flex-grow-1 p-4 bg-light">
        @yield('content')
    </div>

</div>