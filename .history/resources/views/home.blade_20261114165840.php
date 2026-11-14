@extends('layouts.app')


@section('content')
    <h2>Welcome</h2>
    <p>These are the movies that are listed</p>
    <a href="{{ route('movies.index') }}" class="btn btn-primary">Go to Movie List</a>
@endsection
