<?php

Route::get('/', function(){
    return view('Welcome');
});

/* Rotas de Admin Categorias */
Route::get('admin/categories/', ['as'=>'categories', 'uses'=>'AdminCategoriesController@index']);
Route::post('admin/categories/store', ['as'=>'categories.store', 'uses'=>'AdminCategoriesController@store']);
Route::get('admin/categories/create', ['as'=>'categories.create', 'uses'=>'AdminCategoriesController@create']);
Route::get('admin/categories/{id}/destroy', ['as'=>'categories.destroy', 'uses'=>'AdminCategoriesController@destroy']);
Route::get('admin/categories/{id}/edit', ['as'=>'categories.edit', 'uses'=>'AdminCategoriesController@edit']);
Route::put('admin/categories/{id}/update', ['as'=>'categories.update', 'uses'=>'AdminCategoriesController@update']);

/* Rotas de Admin Produtos */
Route::get('admin/products', ['as'=>'products', 'uses'=>'AdminProductsController@index']);
Route::post('admin/products/store', ['as'=>'products.store', 'uses'=>'AdminProductsController@store']);
Route::get('admin/products/create', ['as'=>'products.create', 'uses'=>'AdminProductsController@create']);
Route::get('admin/products/{id}/destroy', ['as'=>'products.destroy', 'uses'=>'AdminProductsController@destroy']);
Route::get('admin/products/{id}/edit', ['as'=>'products.edit', 'uses'=>'AdminProductsController@edit']);
Route::put('admin/products/{id}/update', ['as'=>'products.update', 'uses'=>'AdminProductsController@update']);