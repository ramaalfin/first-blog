@extends('backend.layouts.dashboard')
@section('title')
    Admin - Add Category
@endsection
@section('content')
    {{-- TOAST --}}
    @if (session('success'))
        @include('backend.includes.toast')
    @endif
    {{-- TOAST --}}
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                    <div class="card">
                        <div class="d-flex align-items-start row">
                            <div class="card-body">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb ms-2 mb-4">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('categories.index') }}">Category</a>
                                        </li>
                                        <li class="breadcrumb-item active">Add</li>
                                    </ol>
                                </nav>
                                <h5 class="card-title text-primary ms-2">Add Post Categories</h5>
                                <form action="{{ route('categories.store') }}" method="POST">
                                    @include('backend.pages.categories.form', ['tombol' => 'Add'])
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
        <!-- Footer -->
        @include('backend.includes.footer')
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    <!-- Content wrapper -->
@endsection
