<?php

namespace App\Http\Controllers;

use App\Providers\TMDbServiceProvider;

class MovieController extends Controller
{
  public function getUpcoming()
  {
    $upcoming = TMDbServiceProvider::getUpcoming('1');

    return $this->responseJson($upcoming);
  }

  public function getUpcomingByPage($page)
  {
    $upcoming = TMDbServiceProvider::getUpcoming($page);

    return $this->responseJson($upcoming);
  }

  public function getTopRated()
  {
    $topRated = TMDbServiceProvider::getTopRated('1');

    return $this->responseJson($topRated);
  }

  public function getTopRatedByPage($page)
  {
    $topRated = TMDbServiceProvider::getTopRated($page);

    return $this->responseJson($topRated);
  }

  public function getMovie($id)
  {
    $movie = TMDbServiceProvider::getMovie($id);

    return $this->responseJson($movie);
  }

  public function getMovieVideos($id)
  {
    $videos = TMDbServiceProvider::getMovieVideos($id);

    return $this->responseJson($videos);
  }
}
