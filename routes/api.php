<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/current',[\App\Http\Controllers\Wrapper::class, 'districts'])->name('districts');
Route::get('/current',[\App\Http\Controllers\Wrapper::class, 'current'])->name('current');
Route::get('/current',[\App\Http\Controllers\Wrapper::class, 'current2'])->name('current2');
Route::get('/current',[\App\Http\Controllers\Wrapper::class, 'current3'])->name('current3');
Route::get('/current',[\App\Http\Controllers\Wrapper::class, 'current4'])->name('current4');

Route::get('/user/identitas', function(){
    return [
        'code' => '0',
        'data' => [
            'npm' => '197006050',
            'name' => 'Ilham Wahyudi',
            'email' => '197006050@student.unsil.ac.id'
        ]
        ];
})->middleware('npm');