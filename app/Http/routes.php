<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('tempImport/{id}', function($id){
	$product = App\Table::find($id);
	echo $product->name . ' ' . $product->brand;
});

Route::get('products', function(){
	$products = App\Table::all();

	$data = array(
		'products' => $products
		);

	return view('temp', $data);
	//return View::make('temp');
});

Route::get('import', 'ImportController@index');