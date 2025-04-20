<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('assets/') }}" data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>@yield('title', 'IPCIH - Dashboard')</title>
    <meta name="description" content="" />
    <link rel="shortcut icon" href="{{ asset('webimages/favicon.ico') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

    {{-- Sweet Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>

   
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Sidebar -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                  
                    <a href="{{ route('admin') }}" class="app-brand-link text-center">
                        <img class="bg-white p-3" src="{{ asset('webimages/pngpng.png') }}" alt="IPCIH Logo" style="width: 65px; border-radius: 50%;" />
                    </a>
                  <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                  </a>
                </div>
      
                <div class="menu-inner-shadow"></div>
      
                <ul class="menu-inner py-1">
                  <!-- Dashboard -->
                  <ul class="menu-inner py-1">
                    <li class="menu-item">
                        <a href="{{ route('admin') }}" class="menu-link">
                            <i class="menu-icon text-white tf-icons bx bx-home-circle"></i>
                            <div class="text-white">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('totaladmin') }}" class="menu-link">
                            <i class="menu-icon text-white tf-icons bx bx-home-circle"></i>
                            <div class="text-white">Total Admins</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('programs.create') }}" class="menu-link">
                            <i class="menu-icon text-white tf-icons bx bx-home-circle"></i>
                            <div class="text-white">Add Core Programs</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('total.core.programs') }}" class="menu-link">
                            <i class="menu-icon text-white tf-icons bx bx-home-circle"></i>
                            <div class="text-white">Total Core Programs</div>
                        </a>
                    </li>
                </ul>

      
                  <!-- Layouts -->
                
                     
                   
                </ul>
              </aside>
                   
            
           

            <!-- Layout container -->
            <div class="layout-page">
                <nav
                class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                id="layout-navbar"
              >
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                  <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                    <i class="bx bx-menu bx-sm"></i>
                  </a>
                </div>
    
                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <!-- Search -->
                    <div class="navbar-nav align-items-center mx-auto">
                        <div class="nav-item w-100 d-flex justify-content-center">
                            <h2/ class="text-center text-white w-100">
                                INTERNATIONAL PEACE COMMITTEE FOR INTERFAITH HARMONY
                            </h2>
                        </div>
                    </div>
                    <!-- /Search -->
                
                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="{{ asset('webimages/pngpng.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="{{ asset('webimages/pngpng.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="fw-semibold d-block">{{ Auth::check() ? Auth::user()->name : 'Guest' }}</span>
                                                <small class="text-muted">Admin</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}">
                                        <i class="bx bx-power-off me-2"></i>
                                        <span class="align-middle">Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ User -->
                    </ul>
                </div>
                
              </nav>
                <!-- Navbar -->
                {{-- <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Mobile Toggler Button -->
                            <button class="navbar-toggler layout-menu-toggle d-xl-none" type="button" data-bs-toggle="collapse" data-bs-target="#layout-menu" aria-controls="layout-menu" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="bx bx-menu"></i>
                            </button>

                            <!-- User dropdown -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset('webimages/pngpng.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ asset('webimages/pngpng.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">{{ Auth::check() ? Auth::user()->name : 'Guest' }}</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li><div class="dropdown-divider"></div></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav> --}}
                <!-- / Navbar -->

                <!-- Content wrapper -->
                @yield('admin')
                <!-- / Content wrapper -->
            </div>
        </div>

        <!-- Mobile overlay -->
        <div class="custom-overlay" id="custom-overlay"></div>
    </div>

    <!-- Core JS -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

    <!-- Mobile sidebar toggle script -->
    
</body>
</html>
