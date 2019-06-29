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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("/demo","HomeController@demo");

Route::group(["middleware"=>"admin.auth"],function (){
    Route::group(["prefix"=>"book"],function (){
        Route::get("/","BookController@BookList");

        Route::get("/create","BookController@BookCreate");
        Route::post("/create","BookController@BookSave");

        Route::get("/edit","BookController@BookEdit");
        Route::post("/edit","BookController@BookUpdate");

        Route::get("/delete/{book_id}","BookController@BookDelete");
    });

});

Route::get("author/detail/{author_id}","AuthorController@show");