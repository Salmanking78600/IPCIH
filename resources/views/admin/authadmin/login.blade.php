<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IPCIH Login Panel</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;600&display=swap" rel="stylesheet" />

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

    {{-- ipcih favicon --}}
    <link rel="shortcut icon" href="{{ asset('webimages/favicon.ico') }}" type="image/x-icon">

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>

  <body style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.85), rgba(1, 128, 1, 0.85));">
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Login Card -->
          <div class="card" style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.85), rgba(1, 128, 1, 0.85));">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center mb-3">
                <img class="bg-white p-3" src="{{ asset('webimages/pngpng.png') }}" alt="IPCIH Logo" style="width: 150px; border-radius: 50%;" >
              </div>

              <!-- Welcome Text -->
              <h4 class="mb-2 text-success text-center fw-bold">Welcome to IPCIH Admin Panel</h4>
              <p class="mb-4 text-center">Please login to continue</p>

              <!-- Login Form -->
              <form id="formAuthentication" action="{{ route('login.post') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                  <label for="email" class="form-label">Email or Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your email or username"
                    required
                  />
                </div>

                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="••••••••"
                      required
                    />
                    <span class="input-group-text cursor-pointer">
                      <i class="bx bx-hide"></i>
                    </span>
                  </div>
                </div>

                <div class="mb-3">
                  <button class="btn btn-success d-grid w-100" type="submit">Sign in</button>
                </div>
              </form>
              <!-- /Login Form -->
            </div>
          </div>
          <!-- /Login Card -->
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

    <!-- SweetAlert2 Dynamic Messages -->
    @if(session('success'))
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: '{{ session('success') }}',
        background: 'green', // Green background
        color: 'white', // White text
      });
    </script>
@elseif($errors->any())
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '{{ $errors->first() }}', // Display the first error message
        background: 'green', // Red background for errors
        color: 'white', // White text
      });
    </script>
@endif

  </body>
</html>
