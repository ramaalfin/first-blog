@extends('layouts.dashboard')
@section('title')
    Admin - Edit Category
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
                                        <li class="breadcrumb-item active">Edit</li>
                                    </ol>
                                </nav>
                                <h5 class="card-title text-primary ms-2">Edit Post Categories</h5>
                                <form action="{{ route('categories.update', ['category' => $category->id]) }}"
                                    method="POST">
                                    @method('PATCH')
                                    @include('pages.categories.form', ['tombol' => 'Edit'])
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
    </div>
    <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- Content wrapper -->

    </div>
    <!-- / Layout page -->
@endsection