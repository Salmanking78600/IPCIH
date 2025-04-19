@extends('admin.adminlayout.adminhome')

@section('title', 'Add Core Program - IPCIH')

@section('admin')
<div class="container mt-5">
    <h2 class="mb-4 text-white">Add Core Program</h2>

    <!-- Success Message -->
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

    <!-- Add Program Form -->
    <form action="{{ route('programs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

       <!-- Program Title -->
<div class="mb-3">
    <label for="title" class="form-label text-white">Program Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror"
           id="title" name="title" value="{{ old('title') }}" required maxlength="50">
    <small class="form-text text-light" id="title-count">0 / 50</small>
    @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Program Description -->
<!-- Program Description -->
<div class="mb-3">
    <label for="description" class="form-label text-white">Description</label>
    <textarea class="form-control @error('description') is-invalid @enderror"
              id="description" name="description" rows="4" required maxlength="100">{{ old('description') }}</textarea>
    <small class="form-text text-light" id="description-count">0 / 100</small>
    @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>


        <!-- Program Image -->
        <div class="mb-3">
            <label for="image" class="form-label text-white">Program Image</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Program Status (Active/Inactive) -->
        <div class="mb-3">
            <label for="status" class="form-label text-white">Status</label>
            <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" required>
                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
            </select>
            @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success">Add Program</button>
    </form>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const titleInput = document.getElementById('title');
        const titleCount = document.getElementById('title-count');
        const descriptionInput = document.getElementById('description');
        const descriptionCount = document.getElementById('description-count');

        function updateCount(input, counter, max) {
            counter.textContent = `${input.value.length} / ${max}`;
        }

        titleInput.addEventListener('input', () => updateCount(titleInput, titleCount, 50));
        descriptionInput.addEventListener('input', () => updateCount(descriptionInput, descriptionCount, 100));

        // Initial update
        updateCount(titleInput, titleCount, 50);
        updateCount(descriptionInput, descriptionCount, 100);
    });
</script>



<!-- In-page CSS for Form Styling -->
@section('styles')
<style>
    /* Custom Styling for Form */
    .container {
        max-width: 700px;
        margin: 0 auto;
    }

    form {
        background: linear-gradient(145deg, #28a745, #218838); /* Green Gradient */
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        color: white;
    }

    form .form-label {
        font-weight: bold;
        color: white;
    }

    form .form-control {
        border-radius: 8px;
    }

    form .form-control:focus {
        box-shadow: 0 0 0 0.25rem rgba(38, 143, 255, 0.5);
        border-color: #28a745;
    }

    form .invalid-feedback {
        font-size: 0.875rem;
        color: #dc3545;
    }

    form .btn {
        width: 100%;
        padding: 10px;
        border-radius: 8px;
    }

    form .alert {
        margin-bottom: 20px;
    }

    .btn-light {
        background-color: rgb(136, 255, 0);
        color: #28a745;
        border: 2px solid #28a745;
    }

    .btn-light:hover {
        background-color: #218838;
        color: white;
    }
</style>
@endsection
@endsection
