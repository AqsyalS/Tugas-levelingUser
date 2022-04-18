<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController ;
use App\Http\Controllers\LoginController ;
use App\Http\Controllers\AdminController ;

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
})->middleware('auth');
Route::get('/register', [RegisterController::class, 'index' ]);
Route::post('/register', [RegisterController::class, 'store' ]);


Route::get('/login', [LoginController::class, 'index' ])
->name('login');
Route::post('/login', [LoginController::class, 'login' ]);
Route::get('/admin', function () { return view('Admin'); })->middleware(['checkRole:admin','auth']);
Route::get('/user', function () { return view('User'); })->middleware(['checkRole:user,admin','auth']);

Route::get('/admin', [AdminController::class, 'index' ])->middleware(['checkRole:admin','auth']);
Route::get('/edit/{id}', [AdminController::class, 'edit' ])->middleware(['checkRole:admin','auth']);
Route::post('/simpandata', [AdminController::class, 'store' ]);
Route::post('/updatedata/{id}', [AdminController::class, 'update' ]);
Route::get('/deletedata/{id}', [AdminController::class, 'destroy' ]);

Route::post('/logout', [LoginController::class, 'logout' ]);