<?php

use Illuminate\Support\Facades\Route;

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
    // return "Hello World";
    return view('welcome');
});


Route::get('/newpage', function () {
    return view('newpage'); // This will open the 'newpage.blade.php' in the path /mnt/c/Code/helloWorld/resources/views 
});

Route::get('/mymodel', [\App\Http\Controllers\MyModelController::class, 'index']);
Route::get('/mymodel/create', [\App\Http\Controllers\MyModelController::class, 'create']);
Route::get('/mymodel/{id}/edit', [\App\Http\Controllers\MyModelController::class, 'edit']);
Route::post('/mymodel', [\App\Http\Controllers\MyModelController::class, 'store']);

