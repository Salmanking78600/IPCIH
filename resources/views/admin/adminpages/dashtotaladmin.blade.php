@extends('admin.adminlayout.adminhome')

@section('title', 'Total Admins - IPCIH')

@section('admin')
    <div class="container mt-4">
        <h4 class="mb-4 text-white">Total Admins</h4>

        <div class="card shadow" style="background: linear-gradient(135deg, #28a745, #34b936); color: white;">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th class="text-dark">#</th>
                            <th class="text-dark">Name</th>
                            <th class="text-dark">Email</th>
                            <th class="text-dark">Created At</th>
                            <th class="text-dark">Status</th>
                            <th class="text-dark">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse($users as $index => $user)
                            <tr>
                                <td class="text-white">{{ $index + 1 }}</td>
                                <td class="text-white">{{ $user->name }}</td>
                                <td class="text-white">{{ $user->email }}</td>
                                <td class="text-white">{{ $user->created_at->format('d M Y') }}</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <!-- Edit Button -->
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editModal" data-user="{{ $user->name }}"
                                        data-email="{{ $user->email }}" data-id="{{ $user->id }}">
                                        Edit
                                    </button>

                                    <!-- Delete Button -->
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal" data-user="{{ $user->name }}"
                                        data-url="{{ route('admin.delete.user', $user->id) }}">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-danger">No users found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{-- Edit Modal  --}}
                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content"
                            style="background: linear-gradient(135deg, #28a745, #34b936); color: white;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Edit User</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form id="editForm" action="" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="userName" class="form-label">Name</label>
                                        <input type="text" id="userName" name="name" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="userEmail" class="form-label">Email</label>
                                        <input type="email" id="userEmail" name="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- Confirmation modal for deletion --}}
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content"
                            style="background: linear-gradient(135deg, #28a745, #34b936); color: white;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete <strong id="userName"></strong>?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <form action="" id="deleteForm" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SweetAlert for success or error messages --}}
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @elseif(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops!',
                text: '{{ session('error') }}',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    <script>
        // Edit Modal functionality
        const editModal = document.getElementById('editModal');
        editModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const userName = button.getAttribute('data-user');
            const userEmail = button.getAttribute('data-email');
            const userId = button.getAttribute('data-id');
            const formActionUrl = "{{ route('admin.update.user', ':id') }}".replace(':id', userId);

            editModal.querySelector('#userName').value = userName;
            editModal.querySelector('#userEmail').value = userEmail;
            document.getElementById('editForm').action = formActionUrl;
        });

        // Delete Modal functionality
        const deleteModal = document.getElementById('deleteModal');
        deleteModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const userName = button.getAttribute('data-user');
            const actionUrl = button.getAttribute('data-url');

            deleteModal.querySelector('#userName').textContent = userName;
            deleteModal.querySelector('#deleteForm').setAttribute('action', actionUrl);
        });
    </script>
@endsection
