<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
  protected function responseJson($data)
  {
    if ($data === null) {
      return $this->responseInvalideRoute();
    }

    return response()->json($data);
  }

  public function responseInvalideRoute()
  {
    return response()->json(['message' => 'The resource you requested could not be found.'], 404);
  }
}
