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

    <div class="row g-4">
        @foreach($programs as $program)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card program-card shadow-sm border-0">
                    <img src="{{ $program->image ? asset('storage/' . $program->image) : asset('default-image.jpg') }}"
                         class="card-img-top program-img"
                         alt="Program Image">

                    <div class="card-body">
                        <h5 class="card-title">{{ $program->title }}</h5>
                        <p class="card-text">{{ \Str::limit($program->description, 100) }}</p>

                        <p class="mb-2">
                            <span class="badge {{ $program->status == 1 ? 'bg-success' : 'bg-secondary' }}">
                                {{ $program->status == 1 ? 'Active' : 'Inactive' }}
                            </span>
                        </p>

                        <div class="d-flex flex-wrap gap-2">
                            @if($program->status == 1)
                                <a href="{{ route('programs.updateStatus', $program->id) }}" class="btn btn-warning btn-sm">Deactivate</a>
                            @else
                                <a href="{{ route('programs.updateStatus', $program->id) }}" class="btn btn-success btn-sm">Activate</a>
                            @endif

                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $program->id }}">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="deleteModal{{ $program->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $program->id }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel{{ $program->id }}">Confirm Deletion</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete the program <strong>"{{ $program->title }}"</strong>?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <a href="{{ route('programs.delete', $program->id) }}" class="btn btn-danger">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>

<!-- Styles -->
<style>
    .program-card {
        border-radius: 10px;
        transition: transform 0.2s ease;
        height: 100%;
    }

    .program-card:hover {
        transform: translateY(-5px);
    }

    .program-img {
        height: 200px; /* Fixed height */
        object-fit: cover; /* Maintain aspect ratio and cover space */
        width: 100%; /* Full width of the card */
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .card-body {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

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

    @media (max-width: 576px) {
        .program-img {
            height: 150px; /* Adjusted height for smaller screens */
        }

        .card-title {
            font-size: 1rem;
        }

        .card-text {
            font-size: 0.9rem;
        }

        .btn {
            font-size: 0.75rem;
            padding: 4px 10px;
        }
    }
</style>
@endsection
