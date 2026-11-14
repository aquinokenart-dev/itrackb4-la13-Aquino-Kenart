@extends('layouts.app')


@section('content')
    <h2>Welcome</h2>
    <p>The Movies</p>
    <a href="{{ route('movie.index') }}" class="btn btn-primary">Home</a>
@endsection
