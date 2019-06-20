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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/job-listing', 'HomeController@joblisting')->name('joblisting');
Route::get('/projectdetail', 'HomeController@projectdetail')->name('projectdetail');


Route::get('viewalljobs', 'HomeController@viewalljobs');
Route::post('viewalljobs', 'HomeController@viewalljobs');

Auth::routes();

//User Routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/message', 'HomeController@message')->name('message');
Route::get('/change-password', 'HomeController@changepassword')->name('changepassword');
Route::get('/manage-jobs', 'HomeController@managejobs')->name('managejobs');
Route::get('/candidate-earnings', 'HomeController@candidateearnings')->name('candidateearnings');

//Company Routes
Route::get('/post-job', 'PostJob@index')->name('post-job');
Route::get('/company', 'PostJob@index')->name('company');
Route::get('/transaction', 'CompanyDetails@transaction')->name('company');
Route::get('/manage-candidates', 'CompanyDetails@managecandidates')->name('company');

Route::post('/post-job', 'PostJob@StoreJob')->name('post-job.StoreJob');
