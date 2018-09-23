<?php

/*
|--------------------------------------------------------------------------
| Shop Routes
|--------------------------------------------------------------------------
|
| This file is where you may override any of the routes that are included
| with ...
|
*/
$namespacePrefix = '\\' . config('voyager-shop.controllers.namespace') . '\\';

Route::group(['prefix' => 'shop', 'as' => 'shop.'], function () use ($namespacePrefix) {

    Route::resource('products', $namespacePrefix . 'Catalog\\ProductController', [
        'except' => ['create'],
    ]);
   // Route::resource('/products',  ['uses' => $namespacePrefix.'Catalog\\ProductController@index'])->name('products.all');

   //Route::get('/store',  ['uses' => $namespacePrefix.'Catalog\\ProductController@store'])->name('store');
});
