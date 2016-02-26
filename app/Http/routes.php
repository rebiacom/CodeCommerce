<?php

Route::get('/', function(){
    return view('Welcome');
});

Route::group(['prefix'=>'admin', 'where'=>['id'=> '[0-9]+']], function()
{

    Route::group(['prefix'=>'categories'], function()
    {
        /* Rotas de Admin Categorias */
        Route::get('', ['as'=>'categories', 'uses'=>'AdminCategoriesController@index']);
        Route::post('store', ['as'=>'categories.store', 'uses'=>'AdminCategoriesController@store']);
        Route::get('create', ['as'=>'categories.create', 'uses'=>'AdminCategoriesController@create']);
        Route::get('{id}/destroy', ['as'=>'categories.destroy', 'uses'=>'AdminCategoriesController@destroy']);
        Route::get('{id}/edit', ['as'=>'categories.edit', 'uses'=>'AdminCategoriesController@edit']);
        Route::put('{id}/update', ['as'=>'categories.update', 'uses'=>'AdminCategoriesController@update']);

    });

    Route::group(['prefix'=>'products'], function()
    {
        /* Rotas de Admin Produtos */
        Route::get('', ['as'=>'products', 'uses'=>'AdminProductsController@index']);
        Route::post('store', ['as'=>'products.store', 'uses'=>'AdminProductsController@store']);
        Route::get('create', ['as'=>'products.create', 'uses'=>'AdminProductsController@create']);
        Route::get('{id}/destroy', ['as'=>'products.destroy', 'uses'=>'AdminProductsController@destroy']);
        Route::get('{id}/edit', ['as'=>'products.edit', 'uses'=>'AdminProductsController@edit']);
        Route::put('{id}/update', ['as'=>'products.update', 'uses'=>'AdminProductsController@update']);

         Route::group(['prefix'=>'images'], function()
        {
           Route::get('{id}/product', ['as'=>'products.images', 'uses'=>'AdminProductsController@images']);
           Route::get('create/{id}/product', ['as'=>'products.images.create', 'uses'=>'AdminProductsController@createImage']);
           Route::post('store/{id}/product', ['as'=>'products.images.store', 'uses'=>'AdminProductsController@storeImage']);
           Route::get('destroy/{id}/image', ['as'=>'products.images.destroy', 'uses'=>'AdminProductsController@destroyImage']);
        });

    });

});
