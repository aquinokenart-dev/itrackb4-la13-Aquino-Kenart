@extends('layouts.app')

@section('title', 'Movie List')

@section('content')
    <h2>All Movies</h2>

    <div class="mb-3">
        <a href="{{ route('movies.create') }}" class="btn btn-success">Add New Movie</a>
    </div>

    <p>
        Active filters:
        @if (!$genres && !$year)
            None (showing everything)
        @else
            @if ($genres)
                <span class="badge bg-info text-dark">Genre: {{ $genres->firstWhere('id', $genre)?->name }}</span>
            @endif
            @if ($year)
                <span class="badge bg-info text-dark">Year: {{ $year }}</span>
            @endif
        @endif
    </p>

    <div class="mb-2">
            <strong>Genre:</strong>
            @foreach ($genres as $g)
                <a href="{{ route('movies.index', ['genre' => $g->id, 'year' => $year]) }}"
                class="btn btn-sm btn-outline-primary">{{ $g->name }}</a>
            @endforeach
        </div>

        <div class="mb-3">
            <strong>Year:</strong>
            @foreach ([2008, 2010, 2019, 2022] as $y)
                <a href="{{ route('movies.index', ['genre' => $genre, 'year' => $y]) }}"
                class="btn btn-sm btn-outline-primary">{{ $y }}</a>
            @endforeach

            <a href="{{ route('movies.index') }}" class="btn btn-sm btn-secondary ms-3">Clear all filters</a>
        </div>

        
    <div class="row g-2">
        <div class="col-md-4">
            <input type="text" name="search" class="form-control"
                placeholder="Search movie..." value="{{ request('search') }}">
        </div>

        <div class="col-md-3">
            <select name="genre_id" class="form-select">
                <option value="">All Genres</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}" @selected(request('genre_id') == $genre->id)>
                        {{ $genre->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-md-3">
            <select name="is_available" class="form-select">
                <option value="">Any Availability</option>
                <option value="1" @selected(request('is_available') === '1')>Available</option>
                <option value="0" @selected(request('is_available') === '0')>Not Available</option>
            </select>
        </div>

        <div class="col-md-2">
            <button class="btn btn-primary w-100">Apply</button>
        </div>
    </div>

    <a href="{{ route('movies.index') }}" class="text-decoration-none">Clear Filters</a>
    </form>


    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Rating</th>
                <th>Year</th>
                <th>Action</th>


            </tr>
        </thead>
        <tbody>
            @forelse ($movies as $movie)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a></td>
                    <td>{{ $movie->genre->name }}</td>
                    <td>{{ $movie->rating }}</td>
                    <td>{{ $movie->year }}</td>
                    <td>
                         <a href="{{ route('movies.edit', $movie) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('movies.destroy', $movie) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Delete this record?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No movies found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">
    {{ $movies->links() }}
    </div>
    
    <p>Queries: {{ count(\Illuminate\Support\Facades\DB::getQueryLog()) }}</p>
@endsection