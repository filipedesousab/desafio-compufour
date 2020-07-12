<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Entities\Movie;
use App\Entities\Video;
use App\Entities\Genre;

class TMDbServiceProvider extends ServiceProvider
{
  public static function getUpcoming($page)
  {
    $movies = [];

    for ($i = 1; $i <= 20; $i++) {
      $movie = new Movie();
      $movie->setPosterPath('/path/to/poster');
      $movie->setAdult(false);
      $movie->setOverview('Lorem Ipsum is simply dummy text of the printing and typesetting industry...');
      $movie->setReleaseDate('2020-07-12');
      $movie->setGenreIds([1]);
      $movie->setId(1);
      $movie->setOriginalTitle('Upcoming Page ' . $page . '. Test Movie with id ' . $i);
      $movie->setOriginalLanguage('en');
      $movie->setTitle('Upcoming Page ' . $page . '. Movie with id ' . $i);
      $movie->setBackdropPath('/path/to/backdrop');
      $movie->setPopularity(4.45);
      $movie->setVoteCount(10);
      $movie->setVideo(false);
      $movie->setVoteAverage(4.4);

      $movies[] = $movie->toArray();
    }

    return $movies;
  }

  public static function getTopRated($page)
  {
    $movies = [];

    for ($i = 1; $i <= 20; $i++) {
      $movie = new Movie();
      $movie->setPosterPath('/path/to/poster');
      $movie->setAdult(false);
      $movie->setOverview('Lorem Ipsum is simply dummy text of the printing and typesetting industry...');
      $movie->setReleaseDate('2020-07-12');
      $movie->setGenreIds([1]);
      $movie->setId(1);
      $movie->setOriginalTitle('Top Rated Page ' . $page . '. Test Movie with id ' . $i);
      $movie->setOriginalLanguage('en');
      $movie->setTitle('Top Rated Page ' . $page . '. Movie with id ' . $i);
      $movie->setBackdropPath('/path/to/backdrop');
      $movie->setPopularity(4.45);
      $movie->setVoteCount(10);
      $movie->setVideo(false);
      $movie->setVoteAverage(4.4);

      $movies[] = $movie->toArray();
    }

    return $movies;
  }
}
