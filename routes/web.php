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


Route::get('/model', function(){
    // $products = \App\Product::all(); //select * from products

    // $user = new \App\User();
    // $user->name = 'Usuário Teste';
    // $user->email = 'email@teste.com';
    // $user->password = bcrypt('12345678');

    // $user->save();

    //    return 

    // return \App\User::all(); retorna todos os usuários
    // return \App\User::find(3); retorna o usuário com base no id
    // return \App\User::where('name', 'Mr. Jamel Kreiger III')->get(); // select * from users where name = Mr. Jamel Kreiger III
    // return \App\User::paginate(10): - paginar dados com laravel

    //Mass Assignment - Atribuição em Massa

    // $user = \App\User::create([
    //     'name' => 'Josimar Junior',
    //     'email' => 'email@email.com',
    //     'password' => bcrypt('12345678')
    // ]);

    // Mass Update
    // $user = \App\User::find(42);
    // $user->update([
    //     'name' => 'Atualizando com Mass Update'
    // ]); //true ou false

    // Como eu faria para pegar a loja de um usuário:
    //$user = \App\User::find(4);

    //dd($user->store()->count()); //O objeto único (Store) se for collection de dados (objetos)

    //Pegar produtos de uma loja?
    //   $loja = \App\Store::find(1);
    //return $loja->products; | $loja->products()->where('id', 9)->get();

    //Pegar as lojas de uma categoria de uma loja?
    //$categoria = \App\Category::find();
    //$categoria->products;

    //Criar uma loja para um usuário
    // $user = \App\User::find(10);
    // $store = $user->store()->create([
    //     'name' => 'Loja Teste',
    //     'description' => 'Loja Teste de produtos de informática',
    //     'mobile_phone' => 'XX-XXXXX-XXXX',
    //     'phone' => 'XX-XXXXX-XXXX',
    //     'slug' => 'loja-teste'
    // ]);


    //Criar um produto para uma loja
    // $store = \App\Store::find(41);
    // $product = $store->products()->create([
    //     'name' => 'Notebook Dell',
    //     'description' => 'Core I5 10GB',
    //     'body' => 'Qualquer coisa...',
    //     'price' => 2999.90,
    //     'slug' => 'notebook-dell',
    // ]);

    // dd($product);
    //Crir uma categoria

    // \App\Category::create([
    //     'name' => 'Games',
    //     'description' => null,
    //     'slug' => 'games'
    // ]);

    // \App\Category::create([
    //     'name' => 'Notebooks',
    //     'description' => null,
    //     'slug' => 'notebooks'
    // ]);

    // return \App\Category::all();

    //Adicionar um protudo para um categoria ou vice-versa
    // $product = \App\Product::find(49);

    // dd($product->categories()->attach([1]));

    $product = \App\Product::find(49);

    return $product->categories;
});

//Route::get - recupero as coisas
//Route::post - crio alguma coisa
//Route::put - atualização
//Route::patch - atualização
//Route::delete - remoção
//Route::options - dentro do http retorna quais cabeçalhos aquela rota especifica ela responde



Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function(){

    // Route::prefix('stores')->name('stores.')->group(function(){

    //     Route::get('/', 'StoreController@index')->name('index');
    //     Route::get('/create', 'StoreController@create')->name('create');
    //     Route::post('/store', 'StoreController@store')->name('store');
    //     Route::get('/{store}/edit', 'StoreController@edit')->name('edit');
    //     Route::post('/update/{store}', 'StoreController@update')->name('update');
    //     Route::get('/destroy/{store}', 'StoreController@destroy')->name('destroy');        

    // });
    
    Route::resource('stores', 'StoreController');
    Route::resource('products', 'ProductController');
    
});