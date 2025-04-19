@extends('admin.adminlayout.adminhome')

@section('title', 'Total Core Programs - IPCIH')

@section('admin')
    <div class="container py-4">
        <h2 class="mb-4 text-center text-white">Total Core Programs</h2>

        @if(session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: '{{ session('success') }}',
                    confirmButtonText: 'OK'
                });
            </script>
        @endif

        @if(session('error'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: '{{ session('error') }}',
                    confirmButtonText: 'OK'
                });
            </script>
        @endif

        <div class="table-responsive">
            <table class="table custom-table text-center align-middle">
                <thead class="table-header">
                    <tr>
                        <th>#</th>
                        <th>Program Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($programs as $index => $program)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $program->title }}</td>
                            <td>{{ \Str::limit($program->description, 100) }}</td>
                            <td>
                                @if($program->status == 1)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-secondary">Inactive</span>
                                @endif
                            </td>
                            <td>
                                @if($program->image)
                                    <img src="{{ asset('storage/' . $program->image) }}" width="80" height="50" style="object-fit: cover; border-radius: 8px;">
                                @else
                                    <img src="{{ asset('default-image.jpg') }}" width="80" height="50" style="object-fit: cover; border-radius: 8px;">
                                @endif
                            </td>
                            <td>
                                <!-- Trigger Delete Modal -->
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $program->id }}">
                                    Delete
                                </button>

                                <!-- Delete Confirmation Modal -->
                                <div class="modal fade" id="deleteModal{{ $program->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $program->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <!-- Green Gradient Header -->
                                            <div class="modal-header" style="background: linear-gradient(to right, #000000, #06af00); color: white;">
                                                <h5 class="modal-title" id="deleteModalLabel{{ $program->id }}">Confirm Deletion</h5>
                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-start">
                                                Are you sure you want to delete the program <strong>"{{ $program->title }}"</strong>?
                                            </div>
                                            <!-- Green Gradient Footer -->
                                            <div class="modal-footer" style="background: linear-gradient(to right, #000000, #257e02);">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <a href="{{ route('programs.delete', $program->id) }}" class="btn btn-danger">Yes, Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <style>
        /* Table Styling */
        .custom-table {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 128, 0, 0.2);
            width: 100%;
            margin-top: 20px;
        }
    
        /* Table Header Styling */
        .custom-table thead.table-header {
            background: linear-gradient(to right, #007f00, #00b300); /* Green gradient */
        }
    
        .custom-table thead.table-header th {
            color: white !important;
            font-weight: 600;
            padding: 12px;
            font-size: 1.1rem;
        }
    
        /* Table Row Styling */
        .custom-table tbody tr {
            border-bottom: 1px solid #dee2e6;
            transition: background-color 0.3s ease;
        }
    
        .custom-table tbody tr:nth-child(even) {
            background-color: #f8fff8; /* Light green for even rows */
        }
    
        .custom-table tbody tr:hover {
            background-color: #e6ffe6; /* Light hover effect */
        }
    
        /* Badge Styling for Status */
        .badge.bg-success {
            background-color: #28a745 !important;
        }
    
        .badge.bg-secondary {
            background-color: #6c757d !important;
        }
    
        /* Image Styling */
        .custom-table img {
            object-fit: cover;
            border-radius: 8px;
        }
    
        /* Button Styling */
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
    
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
    
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
    
        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
    
        /* Modal Styling */
        .modal-header {
            background: linear-gradient(to right, #000000, #06af00);
            color: white;
        }
    
        .modal-footer {
            background: linear-gradient(to right, #000000, #257e02);
        }
    
        .btn-close-white {
            color: white;
        }
    </style>
    
@endsection
