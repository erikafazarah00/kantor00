<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item @if (Request::segment(1) == 'dashboard') active @endif">
                    <a href="{{ url('/dashboard') }}" class='sidebar-link'>
                        <i class="fa-solid fa-gauge-high"></i>
                        <span>Dashboard</span>
                    </a>
                </li>


                <li class="sidebar-item @if (Request::segment(1) == 'barang') active @endif">
                    <a href="{{ url('/barang') }}" class='sidebar-link'>
                        <i class="fa-solid fa-percent"></i>
                        <span>Barang</span>
                    </a>
                </li>

                <li class="sidebar-item @if (Request::segment(1) == 'kategori') active @endif">
                    <a href="{{ url('/kategori') }}" class='sidebar-link'>
                        <i class="fa-solid fa-handshake"></i>
                        <span>Kategori</span>
                    </a>
                </li>

                </li>
                <li class="sidebar-item">
                    <a href="{{ route('logout') }}" class='sidebar-link'> 
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Logout</span>
                    </a> 
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>