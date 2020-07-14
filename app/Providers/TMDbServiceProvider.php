<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Entities\Movie;
use App\Entities\Video;
use App\Entities\Genre;
use App\Entities\ProductionCompanie;
use App\Entities\ProductionCountry;
use App\Entities\SpokenLanguage;

class TMDbServiceProvider extends ServiceProvider
{
  private static $url = 'https://api.themoviedb.org/3/';
  private static $apiKey = '1f54bd990f1cdfb230adb312546d765d';

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
    $url = TMDbServiceProvider::getUrl('movie/top_rated', ['page' => $page]);
    $json = @file_get_contents($url);

    if ($json !== false) {
      $movies = Movie::getInstanceArrayByJson($json);

      return array_map(
        function ($object) {
          return $object->toArray();
        },
        $movies
      );
    }

    return null;
  }

  public static function getMovie($id)
  {
    $url = TMDbServiceProvider::getUrl('movie/' . $id);
    $json = @file_get_contents($url);

    if ($json !== false) {
      $movie = Movie::getInstanceByJson($json);

      return $movie ? $movie->toArray() : null;
    }

    return null;
  }

  public static function getMovieVideos($id)
  {
    $url = TMDbServiceProvider::getUrl('movie/' . $id . '/videos');
    $json = @file_get_contents($url);

    if ($json !== false) {
      $videos = Video::getInstanceArrayByJson($json);

      return array_map(
        function ($object) {
          return $object->toArray();
        },
        $videos
      );
    }

    return null;
  }

  public static function getGenres($id = null)
  {
    $url = TMDbServiceProvider::getUrl('genre/movie/list');
    $json = file_get_contents($url);

    $genres = Genre::getInstanceArrayByJson($json);

    if (!empty($id)) {
      $genreFiltered = array_filter(
        $genres,
        function ($genre) use ($id) {
          return intval($genre->getId()) === intval($id);
        }
      );

      $genreFiltered = array_values($genreFiltered);

      $genre = !empty($genreFiltered) ? $genreFiltered[0]->toArray() : [];

      return $genre;
    }

    return array_map(
      function ($object) {
        return $object->toArray();
      },
      $genres
    );
  }

  private static function getUrl($req, $params = [])
  {
    $url = TMDbServiceProvider::$url;
    $apiKey = TMDbServiceProvider::$apiKey;
    $paramsString = '';

    array_walk(
      $params,
      function($val, $key) use (&$paramsString) {
        $paramsString .= '&' . $key . '=' . $val;
      }
    );

    return $url . $req . '?api_key=' . $apiKey . '&language=en-US' . $paramsString;
  }
}
