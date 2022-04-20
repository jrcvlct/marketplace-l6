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
})->name('home');


Route::get('/model', function(){

    $product = \App\Product::find(49);

    return $product->categories;
});

//Route::get - recupero as coisas
//Route::post - crio alguma coisa
//Route::put - atualização
//Route::patch - atualização
//Route::delete - remoção
//Route::options - dentro do http retorna quais cabeçalhos aquela rota especifica ela responde



Route::group(['middleware' => ['auth']], function(){

    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function(){

                
        Route::resource('stores', 'StoreController');
        Route::resource('products', 'ProductController');
        Route::resource('categories', 'CategoryController');
        
        
    });
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
