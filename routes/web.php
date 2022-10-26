<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\DeveloperController;


// user side not login
Route::get('/welcome', function () {
    return view('welcome');
});


Route::group(['middleware' => 'prevent-back-history'],function(){

    // user side auth
    Route::get('/', [HomeController::class, 'redirect'])
    ->name('Home')
    ->middleware('auth');

    Route::get('/clinics', [HomeController::class, 'clinics'])
    ->name('clinics')
    ->middleware('auth');
    
    Route::get('/clinics', [HomeController::class, 'clinics'])
    ->name('clinics')
    ->middleware('auth');

    Route::get('/Appointment', [HomeController::class, 'appoints'])
    ->name('appoints')
    ->middleware('auth');

    Route::get('/clinic-menu/{id}', [HomeController::class, 'selectedClinic'])
    ->name('clinic-menu')
    ->middleware('auth');

    Route::get('/Cancel-appoint/{id}', [HomeController::class, 'CnclAppnt'])
    ->name('Cancel-Appointment')
    ->middleware('auth');

    Route::post('/Request-Appointment/{id}', [HomeController::class, 'rqstAppoint'])
    ->name('Request-Appointment')
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

    Route::get('/Appointment-Approval/{id}', [AdminController::class, 'AppRoval'])
    ->name('Appointment-Approval')
    ->middleware('auth');

    Route::get('/Appointment-Cancel/{id}', [AdminController::class, 'AppCel'])
    ->name('Appointment-Approval')
    ->middleware('auth');

    
    // admin developers side
    Route::get('/clinic-request', [DeveloperController::class, 'clinicreq'])
    ->name('clinic-request')
    ->middleware('auth');

    Route::get('/selected-clinic/{id}', [DeveloperController::class, 'clinicslct'])
    ->name('selected-clinic')
    ->middleware('auth');

    Route::get('/selected-reject/{id}', [DeveloperController::class, 'clinicdecline'])
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