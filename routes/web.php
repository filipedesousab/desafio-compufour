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

$router->get('/', function () use ($router) {
  return 'Teste CompuFour';
});

$router->group(['prefix' => 'movies'], function () use ($router) {
  $router->get('upcoming',  ['uses' => 'MovieController@getUpcoming']);
  $router->get('upcoming/{page}',  ['uses' => 'MovieController@getUpcomingByPage']);

  $router->get('toprated', ['uses' => 'MovieController@getTopRated']);
  $router->get('toprated/{page}', ['uses' => 'MovieController@getTopRatedByPage']);

  $router->get('/{id}', ['uses' => 'MovieController@getMovie']);
  $router->get('/{id}/videos', ['uses' => 'MovieController@getMovieVideos']);
});
