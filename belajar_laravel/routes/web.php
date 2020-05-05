<?php

use Illuminate\Support\Facades\Route;

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

Route::group(["prefix" => "latihan"], function(){     
	Route::get("/kategori/all", "CategoryController@index");     
	Route::get("/kategori/search", "CategoryController@search");     
	Route::get("/kategori/{id}/delete", "CategoryController@delete");     
	Route::get("/kategori/{id}/restore", "CategoryController@restore");     
	Route::get("/kategori/{id}/permanent-delete", "CategoryController@permanentDelete");
	Route::view("layouts", "child"); 
}); 