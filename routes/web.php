<?php

use Illuminate\Support\Facades\Route;

Route::resource('produtos', 'ProdutoController');

Route::get('produtos', 'ProdutoController@index')->name('produtos.index');
Route::post('produtos', 'ProdutoController@store')->name('produtos.store');

Route::get('produtos/{produto}/edit', 'ProdutoController@edit')->name('produtos.edit');
Route::put('produtos/{produto}', 'ProdutoController@update')->name('produtos.update');

Route::get('produtos/{produto}', 'ProdutoController@show')->name('produtos.show');
