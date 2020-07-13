<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Entities\Movie;
use App\Entities\Video;
use App\Entities\Genre;
use App\Entities\ProductionCompanie;
use App\Entities\ProductionCountries;
use App\Entities\SpokenLanguages;

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
      $movie->setGenres([
        new Genre(1, 'aaa')
      ]);
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
      $movie->setGenres([
        new Genre(1)
      ]);
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

  public static function getMovie($id)
  {
    $movie = new Movie();
    $movie->setPosterPath('/path/to/poster');
    $movie->setOverview('Lorem Ipsum is simply dummy text of the printing and typesetting industry...');
    $movie->setReleaseDate('2020-07-12');
    $movie->setGenres([
      new Genre(1, 'Teste Genre 1')
    ]);
    $movie->setId(1);
    $movie->setOriginalTitle('Test Movie with id ' . $id);
    $movie->setOriginalLanguage('en');
    $movie->setTitle('Movie with id ' . $id);
    $movie->setBackdropPath('/path/to/backdrop');
    $movie->setPopularity(4.45);
    $movie->setVoteCount(10);
    $movie->setVideo(false);
    $movie->setVoteAverage(4.4);
    $movie->setBelongsToCollection(null);
    $movie->setBudget(63000000);
    $movie->setHomepage('www.test.com.br');
    $movie->setImdbId('tt0137523');
    $movie->setProductionCompanies([
      new ProductionCompanie([
        'id' => 1,
        'logo_path' => '/path/to/logo',
        'name' => 'Test Companie',
        'origin_country' => 'US'
      ])
    ]);
    $movie->setProductionCountries([
      new ProductionCountries('US', 'United States of America')
    ]);
    $movie->setRevenue(100853753);
    $movie->setRuntime(139);
    $movie->setSpokenLanguages([
      new SpokenLanguages('en', 'English')
    ]);
    $movie->setStatus('Released');
    $movie->setTagline('How much can you know about yourself if you\'ve never been in a fight?');

    return $movie->toArray();
  }

  public static function getMovieVideos($id)
  {
    $video = new Video();
    $video->setId(1);
    $video->setIso6391('en');
    $video->setIso31661('US');
    $video->setKey('SUXWAEX2jlg');
    $video->setName('Video test movie ' . $id);
    $video->setSite('YouTube');
    $video->setSize(720);
    $video->setType('Test');

    return [$video->toArray()];
  }

  public static function getGenres($id = null)
  {
    $genres = [
      new Genre(),
      new Genre(1, 'Action'),
      new Genre(2, 'Adventure'),
      new Genre(3, 'Comedy')
    ];

    if ($id) {
      return $genres[$id]->toArray();
    }

    return array_map(
      function ($object) {
        return $object->toArray();
      },
      $genres
    );
  }
}
