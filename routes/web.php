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


    return \App\User::all();
    
});