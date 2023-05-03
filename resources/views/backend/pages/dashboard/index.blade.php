@extends('backend.layouts.dashboard')
@section('title')
    Admin - Home
@endsection
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        {{-- NOTIF --}}
        @if (session('success-login'))
            <div class="bs-toast toast toast-placement-ex m-2 fade show bg-{{ session('success-login') ? 'success' : 'danger' }} bottom-0 end-0"
                id="toastModal" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <i class="bx bx-bell me-2"></i>
                    <div class="me-auto fw-semibold">Notifications</div>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    <p>{{ session('success-login') ? session('success-login') : session('error') }}</p>
                </div>
            </div>

            <script>
                let toast = document.querySelector('#toastModal');
                setTimeout(() => {
                    toast.style.display = 'none';
                }, 2000);
            </script>
        @endif
        {{-- NOTIF --}}
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-7">
                                <div class="card-body">

                                    <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                                    <p class="mb-4">
                                        You have done <span class="fw-bold">72%</span> more sales today.
                                        Check your new badge in
                                        your profile.
                                    </p>

                                    <a href="javascript:;" class="btn btn-sm btn-outline-primary">View
                                        Badges</a>
                                </div>
                            </div>
                            <div class="col-sm-5 text-center text-sm-left">
                                <div class="card-body pb-0 px-0 px-md-4">
                                    <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                                        alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                        data-app-light-img="illustrations/man-with-laptop-light.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Content -->
            <div class="content-backdrop fade"></div>
        </div>
        <!-- Footer -->
        @include('backend.includes.footer')
        <!-- / Footer -->
        <!-- Content wrapper -->

    </div>
    <!-- / Layout page -->
@endsection
