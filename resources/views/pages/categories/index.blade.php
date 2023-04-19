@extends('layouts.dashboard')
@section('title')
    Category Page
@endsection
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                    <div class="card">
                        <div class="d-flex align-items-start row">
                            <div class="card-body">

                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="card-title text-primary ms-2">Post Categories</h5>
                                    <a href="{{ route('categories.create') }}" class="btn btn-primary">+</a>
                                </div>

                                <div class="table-responsive text-nowrap">
                                    <table id="example" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Total Post</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @forelse ($categories as $category)
                                                <tr>
                                                    <td>
                                                        <a href="#">
                                                            {{ $category->name }}
                                                        </a>
                                                    </td>
                                                    <td>{{ $category->posts_count }}</td>
                                                    @auth
                                                        <td class="d-flex gap-2 ">
                                                            <a href="{{ route('categories.edit', $category->id) }}"
                                                                class="dropdown-item w-auto p-1" data-id="#">
                                                                <i class="bx bx-pencil"></i>
                                                            </a>
                                                            <button type="button" class="dropdown-item w-auto p-1 btn-delete"
                                                                data-id="{{ $category->id }}">
                                                                <i class="bx bx-trash"></i>
                                                            </button>
                                                        </td>
                                                    @endauth
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="4" class="text-center">No Data</td>
                                                </tr>
                                            @endforelse

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!-- / Content -->

                        <!-- Footer -->
                        @include('includes.footer')
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

        <!-- modal delete -->
        @if ($category && $category->id)
        <div class="modal fade" id="modalCenter" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="modalCenterTitle">Delete Post Category</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4 class="d-flex justify-content-center">Are you sure?</h4>
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <input type="hidden" name="id" id="category-id">
                            <button type="submit" class="btn btn-primary" name="delete_category">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endif


    </div>
    <!-- / Layout page -->
@endsection

@push('addon-script')
    <script>
        const deleteBtn = document.querySelectorAll('.btn-delete');
        const deleteCategoryId = document.querySelector('#category-id');

        deleteBtn.forEach(button => {
            button.addEventListener('click', () => {
                const categoryId = button.getAttribute('data-id');
                deleteCategoryId.value = categoryId;
                $('#modalCenter').modal('show');
            });
        });
    </script>
@endpush
