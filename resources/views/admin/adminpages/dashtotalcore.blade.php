@extends('admin.adminlayout.adminhome')

@section('title', 'Total Core Programs - IPCIH')

@section('admin')
<div class="container py-4">
    <h2 class="mb-4 text-center text-white">Total Core Programs</h2>

    <div class="table-responsive">
        <table class="table custom-table text-center align-middle">
            <thead class="table-header">
                <tr>
                    <th>#</th>
                    <th>Program Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Image</th>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Custom Style -->
<style>
    .custom-table {
        background: linear-gradient(to right, #0f9b0f, #00ff95);
        color: white;
        border-radius: 12px;
        overflow: hidden;
    }

    .custom-table th, .custom-table td {
        vertical-align: middle;
        padding: 1rem;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .custom-table tbody tr:hover {
        background: rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease-in-out;
    }

    .table-header {
        background-color: #ffffff;
        color: #111827; /* Slate-900 */
        font-weight: bold;
    }

    .table-header th {
        border: none;
    }

    .badge {
        font-size: 0.8rem;
        padding: 0.4em 0.7em;
        border-radius: 0.5rem;
    }

    @media (max-width: 768px) {
        .custom-table th, .custom-table td {
            padding: 0.6rem;
        }
    }
</style>
@endsection
