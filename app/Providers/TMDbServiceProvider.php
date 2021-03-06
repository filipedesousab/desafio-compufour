<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Entities\Movie;
use App\Entities\Video;
use App\Entities\Genre;

class TMDbServiceProvider extends ServiceProvider
{
  private static $url = 'https://api.themoviedb.org/3/';
  private static $apiKey = '1f54bd990f1cdfb230adb312546d765d';

  public static function getUpcoming($page)
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

  public static function getTopRated($page)
  {
    $url = TMDbServiceProvider::getUrl('movie/upcoming', ['page' => $page]);
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

    if ($json !== false) {
      $genres = Genre::getInstanceArrayByJson($json);

      if (!empty($id)) {
        $genreFiltered = array_filter(
          $genres,
          function ($genre) use ($id) {
            return intval($genre->getId()) === intval($id);
          }
        );

        $genreFiltered = array_values($genreFiltered);

        $genre = !empty($genreFiltered) ? $genreFiltered[0]->toArray() : null;

        return $genre;
      }

      return array_map(
        function ($object) {
          return $object->toArray();
        },
        $genres
      );
    }

    return null;
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
