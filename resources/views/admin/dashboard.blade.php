@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Dashboard</h1>

        <!-- Welcome Message -->
        <div class="alert alert-info" role="alert">
            Welcome back! Here's a quick overview.
        </div>

        <!-- Create User Button -->
        <div class="mb-4">
            <a class="btn btn-primary text-white px-4 py-2 rounded" href="{{ route('admin.create-user') }}">
                <i class="fas fa-user-plus me-2"></i>Create User
            </a>
        </div>

        <!-- Section 1 -->
        <div class="mt-5">
            <h2>Overview</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae libero non orci feugiat ultricies.</p>
        </div>
    </div>
@endsection
