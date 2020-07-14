<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Providers\TMDbServiceProvider;
use Illuminate\Http\Request;

class GenreController extends Controller
{
  public function getGenres($id = null)
  {
    $genres = TMDbServiceProvider::getGenres($id);

    return $this->responseJson($genres);
  }
}
