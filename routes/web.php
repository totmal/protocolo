<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeController2;
use App\Http\Controllers\protocoloController;
use App\Http\Controllers\PesquisaController;




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
Route::get('/', [HomeController::class, 'inicio'])->name('inicio');
// Route::get('/', function () {
//     return view('inicio');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/inicio', [HomeController::class, 'inicio'])->name('inicio');



Route::get('/home2', [HomeController2::class, 'index'])->name('home2');


Route::get('/pesquisa', [HomeController::class, 'pesquisa'])->name('pesquisa');
route::get('/pesquisa', [PesquisaController::class, 'index'])->name('pesquisa');
route::get('/pesquisanome', [PesquisaController::class, 'pesquisanome'])->name('pesquisanome');

Route::get('/gravar', function ($filename)
{
    $path = storage_path('public/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});



Route::get('/gravar', [protocoloController::class, 'store']);
Route::post('/pesquisar_cpf', [PesquisaController::class,'show']);
// Route::get('/gravar', function (Request $request) {
//     var_dump($request->all());
// });