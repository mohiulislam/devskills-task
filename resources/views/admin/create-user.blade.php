@extends('layouts.app')

@section('title', 'Create User')

@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <div class="shadow-lg p-4 pb-5 rounded" style="width: 400px;">
            <h4 style="color: gray" class="mb-5">Create User</h4>
            <form action="{{ route('admin.create-user') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        id="name" placeholder="Enter name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        id="email" placeholder="Enter email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4 password-container">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        id="password" placeholder="Enter password" required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <i class="toggle-password fas fa-eye" id="togglePassword"></i>
                </div>
                <div class="mb-4 password-container">
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                        name="password_confirmation" id="password_confirmation" placeholder="Confirm password" required>
                    @error('password_confirmation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <i class="toggle-password fas fa-eye" id="togglePasswordConfirmation"></i>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Create User</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Toggle Password Visibility for "password" field
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Toggle the eye icon
            this.classList.toggle('fa-eye-slash');
        });

        // Toggle Password Visibility for "password_confirmation" field
        document.getElementById('togglePasswordConfirmation').addEventListener('click', function() {
            const confirmPasswordInput = document.getElementById('password_confirmation');
            const type = confirmPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPasswordInput.setAttribute('type', type);

            // Toggle the eye icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>
@endsection
