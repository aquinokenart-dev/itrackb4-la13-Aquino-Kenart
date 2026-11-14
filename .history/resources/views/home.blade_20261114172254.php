
@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container py-4">

    <!-- Welcome Header -->
    <div class="p-5 mb-4 rounded-4 text-white shadow"
         style="background: linear-gradient(135deg, #0d6efd, #003566);">
        <h1 class="fw-bold">Welcome to Movie Management System!</h1>
        <p class="mb-4 fs-5">
            Manage, view, and organize your movie collection easily.
        </p>
        <a href="{{ route('movies.index') }}"
           class="btn btn-light btn-lg fw-semibold">
            <i class="bi bi-film"></i> Go to Movie List
        </a>
    </div>

    <!-- Dashboard Statistics -->
    <h3 class="fw-bold mb-3">Dashboard Overview</h3>

    <div class="row g-4 mb-4">

        <!-- Total Movies -->
        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4 d-flex align-items-center">
                    <div class="rounded-3 bg-primary bg-opacity-10 p-3 me-3">
                        <i class="bi bi-film text-primary fs-1"></i>
                    </div>
                    <div>
                        <h2 class="fw-bold mb-0">{{ $movieCount }}</h2>
                        <p class="text-muted mb-0">Total Movies</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Movie Collection -->
        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4 d-flex align-items-center">
                    <div class="rounded-3 bg-success bg-opacity-10 p-3 me-3">
                        <i class="bi bi-collection-play text-success fs-1"></i>
                    </div>
                    <div>
                        <h2 class="fw-bold mb-0">Movies</h2>
                        <p class="text-muted mb-0">Your Collection</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Quick Access -->
    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-4">
            <h4 class="fw-bold">Quick Access</h4>
            <p class="text-muted">What would you like to do?</p>

            <a href="{{ route('movies.index') }}"
               class="btn btn-primary">
                <i class="bi bi-list-ul"></i> View All Movies
            </a>
        </div>
    </div>

</div>
@endsection
