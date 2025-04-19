@extends('admin.adminlayout.adminhome')

@section('title', 'Home - IPCIH')

@section('admin')
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <!-- Welcome Card -->
            <div class="col-lg-8 mb-4 order-0">
                <div class="card text-white shadow" style="background: linear-gradient(135deg, #28a745, #218838);">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-white mb-3">
                                    👋 Welcome {{ Auth::check() ? Auth::user()->name : 'Guest' }}!
                                </h5>
                                <p class="mb-4">
                                    You are part of the <span class="fw-bold">International Peace Committee</span> working towards interfaith harmony.
                                    Together, we strive for global peace and understanding. Visit your profile to learn more about our mission.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{ asset('assets/img/illustrations/man-with-laptop-light.png') }}" height="140" alt="View Badge User" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Admins Card -->
            <div class="col-lg-4 mb-4 order-0">
                <div class="card shadow" style="background: linear-gradient(135deg, #28a745, #218838); color: white;">
                    <div class="card-header d-flex justify-content-between align-items-center border-0">
                        <h5 class="mb-0 text-white">
                            <i class="bx bx-shield-quarter me-2"></i> Total Admins
                        </h5>
                        <small class="text-white-50">System Info</small>
                    </div>
                    <div class="card-body text-center">
                        <i class="bx bx-user-circle bx-lg mb-3 d-block text-white"></i>
                        <h1 class="display-4 fw-bold mb-2 text-white">{{ $totalAdmins }}</h1>
                        <p class="mb-0 text-white-75">Admins Registered</p>
                    </div>
                </div>
            </div>

            <!-- Total Core Programs Card -->
            <div class="col-lg-4 mb-4 order-0">
                <div class="card shadow" style="background: linear-gradient(135deg, #28a745, #218838); color: white;">
                    <div class="card-header d-flex justify-content-between align-items-center border-0">
                        <h5 class="mb-0 text-white">
                            <i class="bx bx-book me-2 text-white"></i> Total Core Programs
                        </h5>
                        <small class="text-white-50">System Info</small>
                    </div>
                    <div class="card-body text-center">
                        <i class="bx bx-bulb bx-lg mb-3 d-block"></i>
                        <h1 class="display-4 fw-bold mb-2 text-white">{{ $totalPrograms }}</h1>
                        <p class="mb-0 text-white">Core Programs Available</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- / Content -->

    <div class="content-backdrop fade"></div>
</div>

@endsection
