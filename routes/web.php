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

Route::resource('/painel/produtos', 'Painel\ProdutoController');

Route::group(['namespace' => 'Site'], function(){
    Route::get('/','SiteController@index');
    Route::get('/categoria/{id}', 'SiteController@categoria')->middleware('auth');
    Route::get('/contato', 'SiteController@contato');
});




/*

Route::group(['prefix'=>'painel', 'middleware' => 'auth'], function(){
    Route::get('/', function(){
        return 'tela inicial do grupo painel';
    });
    
    Route::get('/financeiro', function(){
        return 'tela financeiro no painel';
    });
    
});

Route::get('/login', function(){
    return 'tela de login';
});

Route::get('/categoria2/{id?}', function($id = "sem categoria"){
    return 'caregoria: '.$id;
});

Route::get('/categoria/{id}', function($id){
    return 'caregoria: '.$id;
});

Route::get('/nome/nome2/nome3', function(){
    return "Rota nome grande";
})->name('rota.nomeada');

Route::match(['get', 'post'] , '/match',function(){
    return 'rota do tipo match';
});

Route::get('/contato', function(){
    return 'contato';
});

Route::get('/empresa', function(){
    return view('empresa');
});


Route::get('/', function () {
    //return redirect('nome/nome2/nome3');
    //return redirect()->route('rota.nomeada');
    return "esta é a paina inicial";
});
*/