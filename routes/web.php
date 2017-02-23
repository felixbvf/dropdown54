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
use App\Course;

$courses = collect([
        new Course(['title' => 'OOP', 'premium' => true]),
        new Course(['title' => 'POrimeros pasos con Laravel', 'premium' => false]),
        new Course(['title' => 'Git', 'premium' => true]),
        new Course(['title' => 'Laravel 5.4', 'premium' => false]),
]);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('get_position/{id}', array('as'=>'get_position', 'uses'=>'HomeController@getPosition'));


//Mensajes de orden superior en las colecciones de Laravel
Route::get('courses', function() use ($courses) {
    //$courses->map->archive();
    /*
    $premium = $courses->filter->isPremium();
    $free = $courses->reject->isPremium();
    */
    list($premium, $free) = $courses->partition->isPremium();



    dd($courses->toArray(), $premium->toArray(),$free->toArray());
});

// Components and slot
Route::get('images', function () {
    return view('images');
});

// Facades Automáticos
// Route::get('dashboard', function () {
//     (new Alert)->message('Bienvenido de nuevo!', 'succsess');
//
//     session()->flash('alert', [
//         'message' => 'Bienvenido de nuevo',
//         'type' => 'success'
//     ]);
//     return view('dashboard');
// });

//
//Generar controladores asociados a un modelo en Laravel 5.4
//Route::resource('products', 'ProductController');

//Nueva interfaz fluida en las ReflectionFunctionAbstract
Route::name('products.edit')
    ->get('products/{product}/edit', 'ProductController@edit')
    ->middleware('guest');

Route::name('products.update')
    ->put('products/{product}','ProductController@update');
