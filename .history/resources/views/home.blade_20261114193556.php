
@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container py-4">

    <h2 class="fw-bold mb-3">My Movie Library</h2>

    <div class="mb-4">
        <a href="{{ route('home') }}" class="text-decoration-none me-3">
            Home
        </a>

        <a href="{{ route('movies.index') }}" class="text-decoration-none">
            Movies
        </a>
    </div>

    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body p-4 py-5">

            <h3 class="fw-bold mb-2">
                Movie Records System
            </h3>

            <p class="text-muted mb-4">
                A small system for managing and exploring movies.
            </p>

            <a href="{{ route('movies.index') }}"
               class="btn btn-primary">
                Browse Movies
            </a>

        </div>
    </div>

    <div class="row g-3 mb-4">

        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center py-3">

                    <h2 class="fw-bold mb-0">
                        {{ $movieCount }}
                    </h2>

                    <small class="text-muted">
                        Movies in the collection
                    </small>

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center py-3">

                    <h2 class="fw-bold mb-0">
                        {{ $genreCount }}
                    </h2>

                    <small class="text-muted">
                        Genres
                    </small>

                </div>
            </div>
        </div>

    </div>

    <div class="card shadow-sm">
        <div class="card-body p-3">

            <div class="d-flex align-items-center">

                <img src="{{ asset('img/profile.jpg') }}"
                     alt="Profile Picture"
                     class="rounded-circle me-3"
                     style="width: 65px; height: 65px; object-fit: cover; object-position: center;">

                <div>
                    <h6 class="fw-bold mb-1">
                        Kenart Aquino
                    </h6>

                    <small class="text-muted">
                        BSIT - 3rd Year - Block 3C
                    </small>
                </div>

            </div>

        </div>
    </div>

</div>

@endsection
