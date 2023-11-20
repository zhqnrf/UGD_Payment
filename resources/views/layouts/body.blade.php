<!DOCTYPE html>
<html lang="en">



<body>

    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ route('dashboard') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('/') }}assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">UGD Payment</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>



        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="{{ asset('/') }}assets/img/user.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Admin</h6>
                            {{-- <span></span> --}}
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>




                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('forgotpassword') }}">
                                <i class="bi bi-gear"></i>
                                <span>Ganti Password</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('login') }}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Keluar</span>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>

    </header>
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-master" data-bs-toggle="collapse">
                    <i class="bi bi-database"></i><span>Master</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-master" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('patient') }}">
                            <i class="bi bi-circle"></i><span>Pasien</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('room') }}">
                            <i class="bi bi-circle"></i><span>Kamar</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('maintain') }}">
                            <i class="bi bi-circle"></i><span>Tindakan</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-pay" data-bs-toggle="collapse">
                    <i class="bi bi-inboxes-fill"></i><span>Pembayaran</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-pay" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('a-pay') }}">
                            <i class="bi bi-circle"></i><span>Tambah</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('statuspay') }}">
                            <i class="bi bi-circle"></i><span>Status</span>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- <li class="nav-heading">Pages</li> --}}

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('history') }}">
                    <i class="bi bi-hourglass-split"></i>
                    <span>Riwayat</span>
                </a>
            </li>

        </ul>

    </aside>

    <main id="main" class="main">
        @yield('content')



    </main>



</body>

</html>
<footer id="footer" class="footer">
    <div class="copyright">
        &copy; Copyright <strong><span>Puskemas Ketrowonojoyo</span></strong>. All Rights Reserved
    </div>
    <div class="credits">

        Designed by <a href="" style="text-decoration: none">SleepZZ Software</a>
    </div>
</footer>
