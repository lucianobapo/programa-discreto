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

//Route::get('/', ['as'=>'home', 'uses'=> function () {
////    \Html::component('appMain', 'components.appMain', []);
//    return view('programa-discreto.view-home');
//} ]);
Route::get('/', ['as'=>'home', 'uses'=> 'ProgramaDiscreto\ProfileController@home']);

Route::get('/city', ['as'=>'city', 'uses'=> function () {
    return view('programa-discreto.view-city');
} ]);

//Route::get('/profile/{modelo}', ['as'=>'profile', 'uses'=> function () {
//    return view('programa-discreto.view-profile');
//} ]);

Route::get('/profile/{modelo}', ['as'=>'profile', 'uses'=> 'ProgramaDiscreto\ProfileController@show']);

Route::get('/image/{resolution}/{file}', ['as'=>'image', 'uses'=> 'ProgramaDiscreto\ImageController@show']);

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
