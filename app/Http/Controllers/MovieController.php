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
}
