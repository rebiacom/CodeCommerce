<?php

Route::get('/', function(){
    return view('Welcome');
});

Route::get('admin/categories', 'AdminCategoriesController@index');
Route::get('admin/products', 'AdminProductsController@index');