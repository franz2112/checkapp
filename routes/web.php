<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
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
// Route::get('/home',[HomeController::class, 'redirect']);

// Route::get('/',[HomeController::class, 'index']);


Route::group(['middleware' => 'prevent-back-history'],function(){

    // user side auth
    Route::get('/', [HomeController::class, 'redirect'])
    ->name('/')
    ->middleware('auth');

    Route::get('/clinics', [HomeController::class, 'clinics'])
    ->name('clinics')
    ->middleware('auth');

    Route::get('/clinic-menu', [HomeController::class, 'clinicians'])
    ->name('clinic-menu')
    ->middleware('auth');

    
    // admin part   
    Route::get('/Appointments', [HomeController::class, 'Appointments'])
    ->name('Appointments')
    ->middleware('auth');
});





// user side not login
Route::get('/welcome', function () {
    return view('welcome');
});
    

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});