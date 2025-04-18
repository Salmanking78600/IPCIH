<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ ucfirst(Route::currentRouteName()) }} | IPCIH</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <!-- AOS Animation -->
    {{-- <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css"> --}}


    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v5.15.4/css/all.css">

    {{-- Slider cdn  --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    {{-- ipcih favicon --}}
    <link rel="shortcut icon" href="{{ asset('webimages/favicon.ico') }}" type="image/x-icon">

    <!-- Custom CSS (External file) -->
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">


</head>

<body>

    {{-- Navbar of the IPCIH Website --}}
    {{-- data-aos="fade-down" data-aos-duration="1500" --}}
    <nav class="navbar navbar-expand-lg navbar-light custom-navbar" >
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="/">
                <img style="background: white; border-radius: 50%; width: 100px; height: 100px; padding: 10px;" src="{{ asset('webimages/pngpng.png') }}" alt="Logo" class="logo">




            </a>

            <!-- Toggler button for mobile -->
            <button class="navbar-toggler text-white bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links and Social Icons -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <!-- Navbar Links Centered -->
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/core-programs">Core Programs</a></li>
                </ul>

                <!-- Social Media Icons -->
                <div class="d-flex justify-content-center justify-content-lg-end mt-3 mt-lg-0 social-icons">
                    <a href="https://www.linkedin.com/company/ipcih-international-peace-committee-for-interfaith-harmony/"
                        class="social-icon"><i class="fab fa-linkedin"></i></a>
                    <a href="https://twitter.com/IPCIH3" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.facebook.com/ipcihworld/" class="social-icon"><i
                            class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/IPCIH1/" class="social-icon"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </nav>
    {{-- main content area     --}}
    <main>
        @yield('content') {{-- This is where the page-specific content will appear --}}
    </main>

    {{-- main content area     --}}



    {{-- ipcih web footer  --}}
    {{-- data-aos="fade-up" data-aos-duration="1500" --}}
    <footer class="custom-footer text-white pt-5 pb-3">
        <div class="container">
            <div class="row gy-4">
                <!-- Contact Info -->
                <div class="col-md-3">
                    <h5 class="mb-3">Address To Visit Us</h5>
                    <p>House No. R 226,<br>Shaheed Makhdoom Bilawal Society Scheme 33,<br>Near Chappal Sun City Karachi,
                        Pakistan.</p>
                    <p><i class="fas fa-phone-alt me-2"></i>+92 301 7455545</p>
                    <p><i class="fas fa-envelope me-2"></i>info@ipcih.org.pk</p>
                </div>

                <!-- Quick Links -->
                <div class="col-md-3">
                    <h5 class="mb-3">Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="#">Donate Us</a></li>
                        <li><a href="#">Core Programs</a></li>
                        <li><a href="#">Future Plans</a></li>
                        <li><a href="#">Chairman Message</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>

                <!-- Additional Info -->
                <div class="col-md-3">
                    <h5 class="mb-3">More Info</h5>
                    <ul class="footer-links">
                        <li><a href="#">Important Links</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Become A Volunteer</a></li>
                    </ul>
                </div>

                <!-- Facebook Embed -->
                <div class="col-md-3">
                    <h5 class="mb-3">Follow Us On Facebook</h5>
                    <div class="fb-placeholder">
                        <div class="fb-page" data-href="https://www.facebook.com/JavedArifGhaznavi" data-tabs="timeline"
                            data-width="" data-height="130" data-small-header="false" data-adapt-container-width="true"
                            data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/JavedArifGhaznavi" class="fb-xfbml-parse-ignore">
                                <a href="https://www.facebook.com/JavedArifGhaznavi">IPCIH International Peace Committee
                                    for Interfaith & Harmony</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="bg-white mt-5">

            <div class="text-center small">
                &copy; {{ date('Y') }} <span style="color: #FFD700;">IPCIH</span>. All Rights Reserved.
            </div>
        </div>
    </footer>


    {{-- ipcih web footer  --}}

    {{-- slider end cdn  --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


 <!-- AOS Animation Script -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script> 

    <script>
        // Initialize AOS animations
        AOS.init();
    </script>

    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v22.0">
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
</body>

</html>
