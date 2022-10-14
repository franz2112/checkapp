<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\DeveloperController;
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

    
    // admin clinic part   
    Route::get('/Appointments', [AdminController::class, 'Appointments'])
    ->name('Appointments')
    ->middleware('auth');

    Route::get('/Add-Doctor', [AdminController::class, 'AddDoctor'])
    ->name('Add-Doctor')
    ->middleware('auth');

    Route::post('/upload-doctor', [AdminController::class, 'upload'])
    ->name('Add-Doctor')
    ->middleware('auth');

    
    // admin developers side
    Route::get('/clinic-request', [DeveloperController::class, 'clinicreq'])
    ->name('clinic-request')
    ->middleware('auth');

    Route::post('/selected-clinic', [DeveloperController::class, 'clinicslct'])
    ->name('selected-clinic')
    ->middleware('auth');





    // // clinic Registration...
    // if (Features::enabled(Features::registration())) {
    //     if ($enableViews) {
    //         Route::get('/register-clinic', [RegisteredUserController::class, 'create'])
    //             ->middleware(['guest:'.config('fortify.guard')])
    //             ->name('register');
    //     }

    //     Route::post('/register-clinic', [RegisteredUserController::class, 'store'])
    //         ->middleware(['guest:'.config('fortify.guard')]);
    // }
});



Route::post('/upload-clinics', [DeveloperController::class, 'Cupload']);

// Route::post('/clinic-request', [DeveloperController::class, 'clinicreq']);




// user side not login
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/clinic-register', function () {
    return view('admin.clinicreg');
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