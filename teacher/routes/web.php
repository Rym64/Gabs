<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//////////////////////////////////////////////////////////////


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'AppController@index')->name('welcome');


Auth::routes();


Route::middleware('auth')->group(function () {

    Route::get('/home', 'AppController@home')->name('home');
   


    Route::group([
      'middleware' => 'teacher',
      'namespace' => 'Teacher',
      'prefix' => 'teacher'
  ],  function () {
    //Route::resource('affichprofil', 'ProfilController');

    Route::get('indexstudent', 'UserController@index');

    Route::resource('users', 'UserController');
  });





    Route::group([
                'middleware' => 'admin',
                'namespace' => 'Admin',
                'prefix' => 'admin'
            ], function () {

                
                  //  Route::get('afficheteacher', 'UserController@affiche');
                  //  Route::get('afficheetudiant', 'UserController@etudiant');
          Route::resource('affichemodul', 'ModulController');
                  //  Route::resource('addteacher', 'UserController');
                  //  Route::get('modif', 'UserController@update');
          Route::get('indexteacher', 'UserController@indexteacher');
          Route::get('editteacher', 'UserController@editteacher');
          Route::resource('users', 'UserController');

            });
});
