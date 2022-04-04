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

Route::get('/current?access_key=ca37374410ef2f88b56c6c32c48fb115&query=New York',[\App\Http\Controllers\Wrapper::class, 'districts'])->name('districts');

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