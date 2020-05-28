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
// Route::get('/about', 'AppController@about');
// Route::get('/team', 'AppController@team');

Auth::routes();


Route::middleware('auth')->group(function () {


  
    Route::get('/home', 'AppController@home')->name('home');

  
    Route::get('admin/affectclasse/{user}', 'Admin\UserController@affectclasse');

    Route::patch('admin/cls/{classe}', 'Admin\UserController@cls');


    Route::patch('admin/updateclasse/{user}', 'Admin\UserController@updateclasse');

    Route::get('admin/destroyteacher/{user}', 'Admin\UserController@destroyteacher');

    Route::get('admin/editteacher/{user}', 'Admin\UserController@editteacher');

    Route::patch('admin/updateteacher/{user}', 'Admin\UserController@updateteacher');

    Route::patch('admin/updatemodul/{user}', 'Admin\UserController@updatemodul');
    Route::get('admin/showteacher/{user}', 'Admin\UserController@showteacher');
    Route::patch('admin/updatemodulteacher/{user}', 'Admin\UserController@updatemodulteacher');

    Route::patch('admin/updateclasses/{classe}', 'Admin\ClasseController@updateclasses');

    Route::get('teacher/affichemodul', 'Teacher\UserController@affichemodul');
    
    Route::get('teacher/affichestudent', 'Teacher\ClasseController@affichestudent');

    Route::get('teacher/affichemodulse', 'Teacher\SeanceController@affichemodulse');
    Route::group([
      'middleware' => 'teacher',
      'namespace' => 'Teacher',
      'prefix' => 'teacher'
  ], function () {

      
       
          Route::resource('seance', 'SeanceController');
      





  });


    // 
    Route::group([
                'middleware' => 'admin',
                'namespace' => 'Admin',
                'prefix' => 'admin'
            ], function () {

                
                  
                    Route::resource('modul', 'ModulController');
                
                  
                  Route::get('indexteacher', 'UserController@indexteacher');
                  Route::get('editteacher', 'UserController@editteacher');
                  Route::get('affect', 'UserController@affect');
            
                  Route::get('createuser', 'UserController@createuser');

          Route::resource('users', 'UserController');

          
          Route::resource('classe', 'ClasseController');

  
         
       
       
            });
});
