<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\DeveloperController;

use App\Http\Controllers\AppointmentSetController;


// user side not login
Route::get('/welcome', function () {
    return view('welcome');
});


Route::group(['middleware' => 'prevent-back-history'],function(){

    Route::get('/', [HomeController::class, 'redirect'])
    ->name('Home')
    ->middleware('auth');

     // user side auth
    Route::group(['middleware' => 'UserType:user', 'prefix' => 'user', 'as' => 'user.'],function(){
        
        Route::get('/clinics', [HomeController::class, 'clinics'])
        ->name('clinics')
        ->middleware('auth');
    
        Route::get('/appointment', [HomeController::class, 'appoints'])
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
    
        Route::get('/notifications', [HomeController::class, 'notif'])
        ->name('Notifications')
        ->middleware('auth');
    
        Route::get('/DocSelect/{id}', [HomeController::class, 'SelectDoc'])
        ->name('DocSelect')
        ->middleware('auth');
    
        Route::get('/TimeSelect/{id}', [HomeController::class, 'SelectTime'])
        ->name('TimeSelect')
        ->middleware('auth');
        
        Route::get('/my-records', [HomeController::class, 'records'])
        ->name('my-records')
        ->middleware('auth');

        Route::get('/get-records{id}', [HomeController::class, 'uploadrecords'])
        ->name('get-records')
        ->middleware('auth');
    });

   
    // clinics clinic part   
    Route::group(['middleware' => 'UserType:clinics', 'prefix' => 'clinics', 'as' => 'clinics.'],function(){

        Route::get('/appointment-request', [AdminController::class, 'ShowAppointments'])
        ->name('appointment-request')
        ->middleware('auth');

        Route::get('/appointments-request/{id}', [AdminController::class, 'approvalview'])
        ->name('appointments-request-{id}')
        ->middleware('auth');

        Route::post('/appointments-approval/{id}', [AdminController::class, 'AppRoval'])
        ->name('appointments-approval')
        ->middleware('auth');

        Route::post('/upload-doctor', [AdminController::class, 'upload'])
        ->name('upload-doctor')
        ->middleware('auth');

        Route::get('/appointments-cancel/{id}', [AdminController::class, 'AppCel'])
        ->name('appointments-cancel')
        ->middleware('auth');
        
        Route::get('/doctors-information', [AdminController::class, 'AddDoctor'])
        ->name('doctors-information')
        ->middleware('auth');

        Route::get('/doctors-details/{id}', [AdminController::class,'DocD'])
        ->name('doctors-details')
        ->middleware('auth');
        
        Route::post('/doctors-details/{id}', [AdminController::class,'editDoctor'])
        ->name('doctors-details')
        ->middleware('auth');
        
        Route::get('/appointments-create/{id}', [AdminController::class,'create'])
        ->name('appointments-create')
        ->middleware('auth');
        
        Route::post('/appointments-create/{id}', [AdminController::class,'check'])
        ->name('appointments-create')
        ->middleware('auth');

        Route::get('/doctor-index/{id}', [AdminController::class,'indexs'])
        ->name('doctor-index')
        ->middleware('auth');

        Route::post('/doctor-update/{id}', [AdminController::class,'update'])
        ->name('doctor-update')
        ->middleware('auth');

        Route::get('/clinic-profile', [AdminController::class,'clinicProfile'])
        ->name('clinic-profile')
        ->middleware('auth');

        Route::post('/appointment-set/{id}', [AdminController::class,'store'])
        ->name('appointment-set')
        ->middleware('auth');
        
        Route::post('/clinic-update', [AdminController::class,'updateClinic'])
        ->name('clinic-update')
        ->middleware('auth');

        Route::get('/doctors-records/{id}', [AdminController::class,'recordsClinic'])
        ->name('doctors-records')
        ->middleware('auth');

        Route::get('/appointment-reschedule/{id}', [AdminController::class,'reschedule'])
        ->name('appointment-reschedule')
        ->middleware('auth');

        Route::get('/appointment-complete/{id}', [AdminController::class,'complete'])
        ->name('appointment-complete')
        ->middleware('auth');

        Route::get('/upload-results/{id}', [AdminController::class,'uploadresults'])
        ->name('upload-results')
        ->middleware('auth');

        Route::post('/new-results/{id}', [AdminController::class,'newresult'])
        ->name('new-results')
        ->middleware('auth');



    });


    // Route::get('/Availables/{id}', [HomeController::class, 'show'])
    // ->name('Availables')
    // ->middleware('auth');

    
    // SuperAdmin or developers side
    Route::group(['middleware' => 'UserType:superadmin', 'prefix' => 'superadmin', 'as' => 'superadmin.'],function(){
        Route::get('/clinic-request', [DeveloperController::class, 'clinicreq'])
        ->name('clinic-request')
        ->middleware('auth');

        Route::get('/selected-clinic/{id}', [DeveloperController::class, 'clinicslct'])
        ->name('selected-clinic')
        ->middleware('auth');

        Route::get('/selected-reject/{id}', [DeveloperController::class, 'clinicdecline'])
        ->name('selected-clinic')
        ->middleware('auth');
    
    });

    Route::post('/upload-clinics', [DeveloperController::class, 'Cupload'])
    ->name('upload-clinic');
        

// add ons
    Route::get('/Email-set', [AdminController::class,'SetEmail'])
    ->name('Email-set')
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