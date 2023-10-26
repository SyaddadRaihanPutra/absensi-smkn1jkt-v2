<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Absensi Peserta Didik</title>

    <link rel="shortcut icon" href="assets/img/logo.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- Bootstrap JS -->
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Jquery -->
    <script src="assets/jquery/jquery-3.6.0.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">

    {{-- datatables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="assets/js/main.js"></script>
</head>
<body>
     <!-- start: Sidebar -->
    
     <div class="top-0 bottom-0 bg-white sidebar position-fixed border-end">
        <div class="p-3 d-flex align-items-center">
            <img src="assets/img/logo.png" width="80" alt=""> &nbsp;
            <a href="#" class="sidebar-logo text-uppercase fw-bold text-decoration-none text-indigo fs-4">SMKN 1 Jakarta</a>
        </div>
        <ul class="p-3 m-0 mb-0 sidebar-menu">
            @if (Auth::user()->role == 1) {{-- role 1 /admin --}}
            <li class="sidebar-menu-item active">
                <a href="dashboard.php">
                    <i class="ri-dashboard-line sidebar-menu-item-icon"></i>
                    Dashboard
                </a>
            </li>
            <li class="mt-3 mb-1 sidebar-menu-divider text-uppercase">Pages</li>
            <li class="sidebar-menu-item has-dropdown">
                <a href="#">
                    <i class="ri-pages-line sidebar-menu-item-icon"></i>
                    Master Data
                    <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                </a>
                <ul class="sidebar-dropdown-menu">
                    <li class="sidebar-dropdown-menu-item">
                        <a href="{{ route('siswa.index') }}">
                            Data Siswa
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item">
                        <a href="ksX.php">
                            Data Role
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-menu-item">
                <a href="raks.php">
                    <i class="ri-calendar-fill sidebar-menu-item-icon"></i>
                    Rekap Absensi
                </a>
            </li>
            <li class="sidebar-menu-item">
                <a href="raks.php">
                    <i class="ri-add-circle-fill sidebar-menu-item-icon"></i>
                    input presensi
                </a>
            </li>
            <li class="sidebar-menu-item">
                <a href="raks.php">
                    <i class="ri-database-fill sidebar-menu-item-icon"></i>
                    Data Kelas
                </a>
            </li>
            <li class="sidebar-menu-item has-dropdown">
                <a href="#">
                    <i class="ri-calendar-event-fill sidebar-menu-item-icon"></i>
                    rekap terlambat
                </a>
            </li>
            <li class="mt-3 mb-1 sidebar-menu-divider text-uppercase">More</li>
            <li class="sidebar-menu-item">
                <a href="#">
                    <i class="ri-equalizer-fi sidebar-menu-item-icon"></i>
                    Pengaturan
                </a>
            </li>
            <li class="sidebar-menu-item danger">
                <style>
                    .danger {
                        
                    }
                </style>
                <a href="#">
                    <i class="ri-logout-box-line sidebar-menu-item-icon"></i>
                    <form method="POST" name="logout" action="{{ route('logout') }}">
                        @csrf
                        <button class="dropdown-item" onclick="logout()"> <i
                                class="bx bx-power-off me-2"></i><span>Log
                                Out</span></button>

                        <script>
                            function logout() => {
                                document.logout.submit();
                            }
                        </script>
                    </form>
                </a>
            </li> 
            @elseif (Auth::user()->role == 2) {{-- role 2 / guru pikets --}}
            <li class="sidebar-menu-item active">
                <a href="dashboard.php">
                    <i class="ri-dashboard-line sidebar-menu-item-icon"></i>
                    Dashboard
                </a>
            </li>
            
            <li class="mt-3 mb-1 sidebar-menu-divider text-uppercase">Pages</li>
            <li class="sidebar-menu-item">
                <a href="raks.php">
                    <i class="ri-add-circle-fill sidebar-menu-item-icon"></i>
                    Siswa Terlambat
                </a>
            </li>
            <li class="sidebar-menu-item">
                <a href="raks.php">
                    <i class="ri-line-chart-fill sidebar-menu-item-icon"></i>
                    Rekap Terlambat
                </a>
            </li>
            <li class="mt-3 mb-1 sidebar-menu-divider text-uppercase">More</li>
                <li class="sidebar-menu-item danger">
                    <style>
                        .danger {
                            
                        }
                    </style>
                    <a href="#">
                        <i class="ri-logout-box-line sidebar-menu-item-icon"></i>
                        <form method="POST" name="logout" action="{{ route('logout') }}">
                            @csrf
                            <button class="dropdown-item" onclick="logout()"> <i
                                    class="bx bx-power-off me-2"></i><span>Log
                                    Out</span></button>
    
                            <script>
                                function logout() => {
                                    document.logout.submit();
                                }
                            </script>
                        </form>
                    </a>
                </li>
            @elseif (Auth::user()->role == 3) {{-- role 3 /guru dan orang tua murid --}}
            <li class="sidebar-menu-item">
                <a href="raks.php">
                    <i class="ri-calendar-todo-fill sidebar-menu-item-icon"></i>
                    Table Siswa
                </a>
            </li>
            <li class="mt-3 mb-1 sidebar-menu-divider text-uppercase">More</li>
                <li class="sidebar-menu-item danger">
                    <style>
                        .danger {
                            
                        }
                    </style>
                    <a href="#">
                        <i class="ri-logout-box-line sidebar-menu-item-icon"></i>
                        <form method="POST" name="logout" action="{{ route('logout') }}">
                            @csrf
                            <button class="dropdown-item" onclick="logout()"> <i
                                    class="bx bx-power-off me-2"></i><span>Log
                                    Out</span></button>
    
                            <script>
                                function logout() => {
                                    document.logout.submit();
                                }
                            </script>
                        </form>
                    </a>
                </li>
            @elseif (Auth::user()->role == 5){{-- Kondisi untuk wali kelas --}}
            <li class="sidebar-menu-item">
                <a href="raks.php">
                    <i class="ri-calendar-todo-fill sidebar-menu-item-icon"></i>
                    Table Siswa
                </a>
            </li>
            <li class="sidebar-menu-item">
                <a href="raks.php">
                    <i class="ri-calendar-todo-fill sidebar-menu-item-icon"></i>
                    Rekap presensi
                </a>
            </li>
            <li class="mt-3 mb-1 sidebar-menu-divider text-uppercase">More</li>
                <li class="sidebar-menu-item danger">
                    <style>
                        .danger {
                            
                        }
                    </style>
                    <a href="#">
                        <i class="ri-logout-box-line sidebar-menu-item-icon"></i>
                        <form method="POST" name="logout" action="{{ route('logout') }}">
                            @csrf
                            <button class="dropdown-item" onclick="logout()"> <i
                                    class="bx bx-power-off me-2"></i><span>Log
                                    Out</span></button>
    
                            <script>
                                function logout() => {
                                    document.logout.submit();
                                }
                            </script>
                        </form>
                    </a>
                </li>
            @elseif (Auth::user()->role == 6){{-- Kondisi untuk ketua kelas --}}
            <li class="sidebar-menu-item">
                <a href="raks.php">
                    <i class="ri-calendar-todo-fill sidebar-menu-item-icon"></i>
                    Table Siswa
                </a>
            </li>
            <li class="sidebar-menu-item">
                <a href="raks.php">
                    <i class="ri-calendar-todo-fill sidebar-menu-item-icon"></i>
                    Rekap Presensi
                </a>
            </li>
            <li class="sidebar-menu-item">
                <a href="raks.php">
                    <i class="ri-calendar-todo-fill sidebar-menu-item-icon"></i>
                    jadwal pelajaran
                </a>
            </li>
            <li class="mt-3 mb-1 sidebar-menu-divider text-uppercase">More</li>
                <li class="sidebar-menu-item danger">
                    <style>
                        .danger {
                            
                        }
                    </style>
                    <a href="#">
                        <i class="ri-logout-box-line sidebar-menu-item-icon"></i>
                        <form method="POST" name="logout" action="{{ route('logout') }}">
                            @csrf
                            <button class="dropdown-item" onclick="logout()"> <i
                                    class="bx bx-power-off me-2"></i><span>Log
                                    Out</span></button>
    
                            <script>
                                function logout() => {
                                    document.logout.submit();
                                }
                            </script>
                        </form>
                    </a>
                </li>
            @endif
            
        </ul>
    </div>
    <div class="sidebar-overlay"></div>
    <!-- end: Sidebar -->

<main class="bg-light">
    <div class="p-2">
        <!-- start: Navbar -->
        <nav class="px-3 py-2 bg-white rounded shadow">
            <i class="ri-menu-line sidebar-toggle me-3 d-block d-md-none"></i>
            <span class="mb-0 fw-bold me-auto">DASHBOARD</span>
            <div class="dropdown">
                <div class="cursor-pointer d-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="me-2 d-none d-sm-block">{{ Auth::user()->name }}</span>
                    <img class="navbar-profile-image" src="assets/img/blank-profile.jpg" alt="Image">
                </div>
            </div>
        </nav>
        <!-- end: Navbar -->
            <!--app-content open-->
            @yield('content')
            <!--app-content close-->

        @stack('modals')
        @stack('scripts')
        @livewireScripts
    </body>
        <!-- DATA TABLE JS-->
        <script src="../assets/datatable/js/jquery.dataTables.min.js"></script>
        <script src="../assets/datatable/js/dataTables.bootstrap5.js"></script>
        <script src="../assets/datatable/js/dataTables.buttons.min.js"></script>
        <script src="../assets/datatable/js/buttons.bootstrap5.min.js"></script>
        <script src="../assets/datatable/js/jszip.min.js"></script>
        <script src="../assets/datatable/pdfmake/pdfmake.min.js"></script>
        <script src="../assets/datatable/pdfmake/vfs_fonts.js"></script>
        <script src="../assets/datatable/js/buttons.html5.min.js"></script>
        <script src="../assets/datatable/js/buttons.print.min.js"></script>
        <script src="../assets/datatable/js/buttons.colVis.min.js"></script>
        <script src="../assets/datatable/dataTables.responsive.min.js"></script>
        <script src="../assets/datatable/responsive.bootstrap5.min.js"></script>
        <script src="../assets/js/table-data.js"></script>
</html>
