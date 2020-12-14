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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','Frontend\FrontendController@index');
Route::get('/about', 'Frontend\FrontendController@about')->name('about');
Route::get('/project', 'Frontend\FrontendController@project')->name('project');
Route::get('/contact', 'Frontend\FrontendController@contact')->name('contact');
Route::get('/blog/details/{id}' , 'Frontend\FrontendController@blog')->name('blog.details');


//Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('profiles')->group(function(){

	Route::get('/view', 'Backend\ProfileController@view')->name('profiles.view');
	Route::get('/edit', 'Backend\ProfileController@edit')->name('profiles.edit');
	Route::post('/store', 'Backend\ProfileController@update')->name('profiles.update');
	Route::get('/password/view', 'Backend\ProfileController@passwordView')->name('profiles.password.view');
	Route::post('/password/update', 'Backend\ProfileController@passwordUpdate')->name('profiles.password.update');
});

Route::prefix('blog')->group(function(){

	Route::get('/view', 'Backend\BlogController@view')->name('blog.view');
	Route::get('/add', 'Backend\BlogController@add')->name('blog.add');
	Route::post('/store', 'Backend\BlogController@store')->name('blog.store');
	Route::get('/edit/{id}', 'Backend\BlogController@edit')->name('blog.edit');
	Route::post('/update/{id}', 'Backend\BlogController@update')->name('blog.update');
	Route::get('/delete/{id}', 'Backend\BlogController@delete')->name('blog.delete');

});

Route::prefix('project')->group(function(){

	Route::get('/view', 'Backend\ProjectController@view')->name('project.view');
	Route::get('/add', 'Backend\ProjectController@add')->name('project.add');
	Route::post('/store', 'Backend\ProjectController@store')->name('project.store');
	Route::get('/edit/{id}', 'Backend\ProjectController@edit')->name('project.edit');
	Route::post('/update/{id}', 'Backend\ProjectController@update')->name('project.update');
	Route::get('/delete/{id}', 'Backend\ProjectController@delete')->name('project.delete');

});







	
