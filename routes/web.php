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
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {

  $router->get('book',  ['uses' => 'BookController@allBook']);
  $router->get('book/{id}',  ['uses' => 'BookController@Book']);
  $router->post('book',  ['uses' => 'BookController@createBook']);
  $router->put('book/{id}',  ['uses' => 'BookController@updateBook']);
  $router->delete('book/{id}',  ['uses' => 'BookController@deleteBook']);
});

$router->group(['prefix' => 'api'], function () use ($router) {

  $router->get('author',  ['uses' => 'AuthorController@allAuthor']);
  $router->get('author/{id}',  ['uses' => 'AuthorController@Author']);
  $router->post('author',  ['uses' => 'AuthorController@createAuthor']);
  $router->put('author/{id}',  ['uses' => 'AuthorController@updateAuthor']);
  $router->delete('author/{id}',  ['uses' => 'AuthorController@deleteAuthor']);
});