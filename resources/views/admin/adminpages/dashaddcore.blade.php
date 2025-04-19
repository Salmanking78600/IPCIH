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
                   id="title" name="title" value="{{ old('title') }}" required maxlength="50"
                   placeholder="Enter Program Title">
            <small class="form-text" id="title-count">0 / 50</small>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Program Description -->
        <div class="mb-3">
            <label for="description" class="form-label text-white">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror"
                      id="description" name="description" rows="4" required maxlength="100"
                      placeholder="Enter Program Description">{{ old('description') }}</textarea>
            <small class="form-text" id="description-count">0 / 100</small>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Program Image -->
        <div class="mb-3">
            <label for="image" class="form-label text-white">Program Image</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror"
                   id="image" name="image" accept="image/*">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Program Status -->
        <div class="mb-3">
            <label for="status" class="form-label text-white">Status</label>
            <select class="form-control @error('status') is-invalid @enderror"
                    id="status" name="status" required>
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

<!-- JavaScript: Character Count -->
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

        updateCount(titleInput, titleCount, 50);
        updateCount(descriptionInput, descriptionCount, 100);
    });
</script>
@endsection

@section('styles')
<style>
    .container {
        max-width: 700px;
        margin: 0 auto;
    }

    form {
        background: rgba(33, 136, 56, 0.85);
        padding: 35px;
        border-radius: 16px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        color: white;
        backdrop-filter: blur(6px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease-in-out;
    }

    h2 {
        text-align: center;
        font-weight: 700;
        letter-spacing: 0.5px;
        color: #e2ffe9;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
    }

    .form-label {
        font-weight: 600;
        color: #e9ffe3;
    }

    .form-control {
        border-radius: 12px;
        border: none;
        padding: 10px 15px;
        transition: all 0.3s ease-in-out;
    }

    .form-control:focus {
        box-shadow: 0 0 0 0.2rem rgba(72, 239, 148, 0.5);
        border: 2px solid #72ff9a;
        background-color: #eafff0;
        color: #000;
    }

    .form-text {
        font-size: 0.85rem;
        color: #d4f5d4;
        margin-top: 2px;
    }

    .invalid-feedback {
        font-size: 0.9rem;
        color: #ffc9c9;
    }

    .btn-success {
        background-color: #20c997;
        border: none;
        font-weight: 600;
        font-size: 1.05rem;
        padding: 10px 0;
        border-radius: 12px;
        transition: all 0.3s ease-in-out;
    }

    .btn-success:hover {
        background-color: #198754;
        transform: translateY(-2px);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
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

    ::placeholder {
        color: #999;
    }

    input[type="file"] {
        background-color: #fff;
        color: #333;
    }

    @media (max-width: 576px) {
        form {
            padding: 20px;
        }

        .btn-success {
            font-size: 1rem;
        }
    }
</style>
@endsection
