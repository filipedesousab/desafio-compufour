<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['prefix' => 'movies'], function () use ($router) {
  $router->get('upcoming',  ['uses' => 'MovieController@getUpcoming']);
  $router->get('upcoming/{page}',  ['uses' => 'MovieController@getUpcomingByPage']);

  $router->get('toprated', ['uses' => 'MovieController@getTopRated']);
  $router->get('toprated/{page}', ['uses' => 'MovieController@getTopRatedByPage']);

  $router->get('/{id}', ['uses' => 'MovieController@getMovie']);
  $router->get('/{id}/videos', ['uses' => 'MovieController@getMovieVideos']);
});

$router->group(['prefix' => 'genres'], function () use ($router) {
  $router->get('/', ['uses' => 'GenreController@getGenres']);
  $router->get('/{id}', ['uses' => 'GenreController@getGenres']);
});

$router->group(['prefix' => '/'], function () use ($router) {
  $router->get('/{route:.*}', ['uses' => 'Controller@responseInvalideRoute']);
  $router->post('/{route:.*}', ['uses' => 'Controller@responseInvalideRoute']);
  $router->put('/{route:.*}', ['uses' => 'Controller@responseInvalideRoute']);
  $router->patch('/{route:.*}', ['uses' => 'Controller@responseInvalideRoute']);
  $router->delete('/{route:.*}', ['uses' => 'Controller@responseInvalideRoute']);
  $router->options('/{route:.*}', ['uses' => 'Controller@responseInvalideRoute']);
});
