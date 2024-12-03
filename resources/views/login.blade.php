@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="rounded shadow-lg overflow-hidden" style="width: 350px;">
            <img src="https://www.mikereyfman.com/wp-content/gallery/panoramic-1-to-2-ratio/D1D7919-22-pano-Leveled-Final-2560.jpg"
                alt="Panoramic Landscape" class="card-img-top mb-4" style="height: 150px; object-fit: cover;">
            <div class="p-4">
                <!-- Header Section -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <span style="color: gray" class="fs-4 mb-0">Sign In</span>
                    <div class="d-flex">
                        <a href="#" class="btn btn-circle me-2 shadow-sm">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-circle shadow-sm">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                </div>
                <!-- Display Server Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- Sign In Form -->
                <form action="{{ route('login') }}" method="POST" id="signInForm">
                    @csrf
                    <div class="mb-4">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter email"
                            required>
                    </div>
                    <div class="mb-4 password-container position-relative">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter password" required>
                        <i class="toggle-password fas fa-eye position-absolute top-50 end-0 translate-middle-y me-3"
                            id="togglePassword" role="button"></i>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>
                </form>

                <!-- Additional Links -->
                <div class="mt-3 d-flex justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rememberMe" name="remember">
                        <label class="form-check-label" for="rememberMe">
                            Remember Me
                        </label>
                    </div>

                    <a href="#" class="text-decoration-none" style="color:gray">Forgot Password</a>
                </div>
                <div class="mt-3 text-center">
                    Not a member? <a href="#" class="text-decoration-none" style="color: #43CF8F">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle Password Visibility for "password" field
            document.getElementById('togglePassword').addEventListener('click', function() {
                const passwordInput = document.getElementById('password');
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);

                // Toggle the eye icon
                this.classList.toggle('fa-eye-slash');
            });
        });
    </script>
@endpush
