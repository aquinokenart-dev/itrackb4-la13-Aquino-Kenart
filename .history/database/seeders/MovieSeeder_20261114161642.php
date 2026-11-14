<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        $comedy   = Genre::create(['name' => 'Comedy']);
        $scifi    = Genre::create(['name' => 'Sci-Fi']);
        $action   = Genre::create(['name' => 'Action']);
        $thriller = Genre::create(['name' => 'Thriller']);

        $movies = [
            ['title' => 'South Park', 'genre_id' => $comedy->id, 'rating' => 9.7, 'year' => 2008, 'is_available' => true],
            ['title' => 'Inception', 'genre_id' => $scifi->id, 'rating' => 9.0, 'year' => 2010, 'is_available' => true],
            ['title' => 'The Dark Knight', 'genre_id' => $action->id, 'rating' => 10, 'year' => 2008, 'is_available' => true],
            ['title' => 'Parasite', 'genre_id' => $thriller->id, 'rating' => 9.0, 'year' => 2019, 'is_available' => false],
            ['title' => 'Everything Everywhere All at Once', 'genre_id' => $action->id, 'rating' => 8.0, 'year' => 2022, 'is_available' => true],

            ['title' => 'The Hangover', 'genre_id' => $comedy->id, 'rating' => 7.7, 'year' => 2009, 'is_available' => true],
            ['title' => 'Superbad', 'genre_id' => $comedy->id, 'rating' => 7.6, 'year' => 2007, 'is_available' => true],
            ['title' => 'Home Alone', 'genre_id' => $comedy->id, 'rating' => 7.7, 'year' => 1990, 'is_available' => false],
            ['title' => 'Interstellar', 'genre_id' => $scifi->id, 'rating' => 8.7, 'year' => 2014, 'is_available' => true],
            ['title' => 'The Matrix', 'genre_id' => $scifi->id, 'rating' => 8.7, 'year' => 1999, 'is_available' => true],

            ['title' => 'Avatar', 'genre_id' => $scifi->id, 'rating' => 7.9, 'year' => 2009, 'is_available' => true],
            ['title' => 'Dune', 'genre_id' => $scifi->id, 'rating' => 8.0, 'year' => 2021, 'is_available' => false],
            ['title' => 'John Wick', 'genre_id' => $action->id, 'rating' => 7.4, 'year' => 2014, 'is_available' => true],
            ['title' => 'Gladiator', 'genre_id' => $action->id, 'rating' => 8.5, 'year' => 2000, 'is_available' => true],
            ['title' => 'Avengers: Endgame', 'genre_id' => $action->id, 'rating' => 8.4, 'year' => 2019, 'is_available' => true],

            ['title' => 'Joker', 'genre_id' => $thriller->id, 'rating' => 8.4, 'year' => 2019, 'is_available' => true],
            ['title' => 'Shutter Island', 'genre_id' => $thriller->id, 'rating' => 8.2, 'year' => 2010, 'is_available' => true],
            ['title' => 'Gone Girl', 'genre_id' => $thriller->id, 'rating' => 8.1, 'year' => 2014, 'is_available' => false],
            ['title' => 'Se7en', 'genre_id' => $thriller->id, 'rating' => 8.6, 'year' => 1995, 'is_available' => true],
            ['title' => 'The Silence of the Lambs', 'genre_id' => $thriller->id, 'rating' => 8.6, 'year' => 1991, 'is_available' => true],
        ];

        foreach ($movies as $movie) {
            Movie::create($movie);
        }
    }
}
