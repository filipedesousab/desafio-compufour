<?php

namespace App\Http\Controllers;

use App\Providers\TMDbServiceProvider;

class MovieController extends Controller
{
  public function getUpcoming()
  {
      return response()->json(TMDbServiceProvider::getUpcoming('1'));
  }

  public function getUpcomingByPage($page)
  {
      return response()->json(TMDbServiceProvider::getUpcoming($page));
  }

  public function getTopRated()
  {
      return response()->json(TMDbServiceProvider::getTopRated('1'));
  }

  public function getTopRatedByPage($page)
  {
      return response()->json(TMDbServiceProvider::getTopRated($page));
  }

  public function getMovie($id)
  {
      return response()->json(TMDbServiceProvider::getMovie($id));
  }

  public function getMovieVideos($id)
  {
      return response()->json(TMDbServiceProvider::getMovieVideos($id));
  }
}
