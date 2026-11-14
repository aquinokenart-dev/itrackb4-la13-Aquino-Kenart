@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h2>Welcome</h2>
    <p>These are the movies that are listed</p>
    <a href="{{ route('movies.index') }}" class="btn btn-primary">Go to Movie List</a>

    <div class="row g-3 mb-4">
        <div class="col-sn-6">
            <div class="card text-center shadow-sm"><div class="card-body">
                <div class="display-6 fw-bold">{{ $movieCount }}</div>
                <div class="text-muted">movies on record</div>

            </div>

            </div>

        </div>
        <div class="col-sn-6">
            <div class="card text-center shadow-sm"><div class="card-body">
                <div class="display-6 fw-bold">{{ $genreCount }}</div>
                <div class="text-muted">genres on record</div>
            </div>
        </div>

        <img src="{{ asset('img/profile.jpg') }}" width="96" height="96" class="rounded-circle">


@endsection
