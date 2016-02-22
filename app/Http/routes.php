<?php

Route::get('/', function(){
    return view('Welcome');
});

/* Rotas de Admin Categorias */
Route::get('categories', ['as'=>'categories', 'uses'=>'AdminCategoriesController@index']);
Route::post('categories/store', ['as'=>'categories.store', 'uses'=>'AdminCategoriesController@store']);
Route::get('categories/create', ['as'=>'categories.create', 'uses'=>'AdminCategoriesController@create']);
Route::get('categories/{id}/destroy', ['as'=>'categories.destroy', 'uses'=>'AdminCategoriesController@destroy']);

/* Rotas de Admin Produtos */
Route::get('products', ['as'=>'products', 'uses'=>'AdminProductsController@index']);
Route::post('products/store', ['as'=>'products.store', 'uses'=>'AdminProductsController@store']);
Route::get('products/create', ['as'=>'products.create', 'uses'=>'AdminProductsController@create']);
Route::get('products/{id}/destroy', ['as'=>'products.destroy', 'uses'=>'AdminProductsController@destroy']);