<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IPCIH Signup Panel</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;600&display=swap" rel="stylesheet" />

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>

    <!-- IPCIH favicon -->
    <link rel="shortcut icon" href="{{ asset('webimages/favicon.ico') }}" type="image/x-icon">
</head>

<body style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.85), rgba(1, 128, 1, 0.85));">
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Signup Card -->
                <div class="card"
                    style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.85), rgba(1, 128, 1, 0.85));">
                    <div class="card-body">

                        <!-- ✅ SweetAlert for Success -->
                        @if (session('success'))
                        <script>
                          Swal.fire({
                              icon: 'success',
                              title: 'Success!',
                              text: 'Your account has been created successfully.',
                              confirmButtonColor: '#28a745',
                              background: 'green', // solid dark background instead of gradient
                              color: 'white', // soft green text
                              iconColor: 'white'
                          });
                      </script>
                      
                      
                        @endif

                        <!-- ❌ SweetAlert for Validation Errors -->
                        @if ($errors->any())
                            <script>
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    html: `
                                        <ul style="text-align: left;">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    `
                                });
                            </script>
                        @endif

                        <!-- Logo -->
                        <div class="app-brand justify-content-center mb-3">
                            <img class="bg-white p-3" src="{{ asset('webimages/pngpng.png') }}" alt="IPCIH Logo"
                                style="width: 150px; border-radius: 50%;">
                        </div>

                        <!-- Heading -->
                        <h4 class="mb-2 text-success text-center fw-bold">Create an Account</h4>
                        <p class="mb-4 text-center">Fill in the form below to sign up</p>

                        <!-- Signup Form -->
                        <form id="formAuthentication" action="{{ route('signup.post') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter your full name" required />
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter your email" required />
                            </div>

                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="••••••••" required />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>

                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password_confirmation">Confirm Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password_confirmation" class="form-control"
                                        name="password_confirmation" placeholder="••••••••" required />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-success d-grid w-100" type="submit">Create Account</button>
                            </div>
                        </form>
                        <!-- /Signup Form -->
                    </div>
                </div>
                <!-- /Signup Card -->
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
