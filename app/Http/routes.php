<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$router->get('submissions', function () {
    return redirect()->route('homepage');
});

$router->post('submissions', [
    'as' => 'submissions.store',
    'uses' => 'SubmissionController@store',
]);

$router->post('submission-previews', [
    'as' => 'submission-previews.store',
    'uses' => 'SubmissionPreviewController@store',
]);

$router->get('/{id}', [
    'as' => 'submissions.show',
    'uses' => 'SubmissionController@show',
]);

$router->get('/', [
    'as' => 'homepage',
    'uses' => 'HomeController@show',
]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
