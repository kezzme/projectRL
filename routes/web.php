<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TradeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AppointmentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::view('/', 'home.index')->name('index');
// Route::view('/services', 'home.services')->name('services');
// Route::view('/vehicles', 'home.vehicles')->name('vehicles');
// Route::view('/new-arrival', 'home.new-arrival')->name('new-arrival');
// Route::view('/financing-calculator', 'home.financing-calculator')->name('financing-calculator');
// Route::view('/about', 'home.about')->name('about');
// Route::view('/contact', 'home.contact')->name('contact');
// Route::view('/login', 'user.login')->name('login');
// Route::view('/register', 'user.register')->name('register');
// Route::view('/trade-in', 'home.trade-in')->name('trade-in');
// Route::view('/view-details', 'home.view-details')->name('view-details');



// // /*--------------------------------Dashboard--------------------------------*/
// Route::view('/dashboard', 'system.dashboard')->name('dashboard');

// // /*--------------------------------Inventory--------------------------------*/
// Route::view('/add-unit', 'system.inv-addunit')->name('add-unit');
// Route::view('/showroom', 'system.inv-showroom')->name('showroom');
// Route::view('/sold-units', 'system.inv-soldunits')->name('sold-units');

// // /*--------------------------------Calendar--------------------------------*/
// Route::view('/calendar', 'system.calendar')->name('calendar');

// // /*--------------------------------Appointment--------------------------------*/
// Route::view('/appointment', 'system.appointment')->name('appointment');

// // /*--------------------------------Financing--------------------------------*/
// Route::view('/financing-confirmation', 'system.fin-confirmation')->name('financing-confirmation');
// Route::view('/financing-status', 'system.fin-status')->name('financing-status');

// // /*--------------------------------Trade-in--------------------------------*/
// Route::view('/trade-requests', 'system.ti-trade-requests')->name('trade-requests');
// Route::view('/trade-in-status', 'system.ti-status')->name('trade-in-status');
// Route::view('/traded-units', 'system.ti-traded')->name('traded-units');

// // /*--------------------------------Receipt--------------------------------*/
// Route::view('/acknowledgment-receipt', 'system.rcpt-acknowledgment')->name('acknowledgment-receipt');
// Route::view('/receipt-records', 'system.rcpt-records')->name('receipt-records');

// // /*--------------------------------Walk-in--------------------------------*/
// Route::view('/walk-in-unit', 'system.wi-unit')->name('walk-in-unit');
// Route::view('/walk-in-financing', 'system.wi-financing')->name('walk-in-financing');
// Route::view('/walk-in-trade-in', 'system.wi-trade-in')->name('walk-in-trade-in');
// Route::view('/walk-in-carwash', 'system.wi-carwash')->name('walk-in-carwash');
// Route::view('/walk-in-detailing', 'system.wi-detailing')->name('walk-in-detailing');
// Route::view('/walk-in-paintjob', 'system.wi-paintjob')->name('walk-in-paintjob');

// // /*--------------------------------Car-Wash--------------------------------*/
// Route::view('/car-wash-confirmation', 'system.cw-confirmation')->name('car-wash-confirmation');
// Route::view('/car-wash-records', 'system.cw-records')->name('car-wash-records');

// // /*--------------------------------Auto-Detailing--------------------------------*/
// Route::view('/auto-detailing-confirmation', 'system.ad-confirmation')->name('auto-detailing-confirmation');
// Route::view('/auto-detailing-payment', 'system.ad-payment')->name('auto-detailing-payment');
// Route::view('/auto-detailing-records', 'system.ad-records')->name('auto-detailing-records');

// // /*--------------------------------Auto-Detailing--------------------------------*/
// Route::view('/paint-job-confirmation', 'system.pj-confirmation')->name('paint-job-confirmation');
// Route::view('/paint-job-payment', 'system.pj-payment')->name('paint-job-payment');
// Route::view('/paint-job-records', 'system.pj-records')->name('paint-job-records');


// Auth::routes();


// Route::get('/services', function(){
//     return view('home.services');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'preventBackhHistory'])->group(function(){
    Route::prefix('services')->name('services.')->group(function(){
        Route::get('/carwash', [ServiceController::class, 'carwash'])->name('carwash');
        Route::post('/carwash/check', [ServiceController::class, 'check'])->name('check');
        Route::view('/carwash/done', 'services.carwash.done')->name('done');

        Route::get('/auto-detailing', [ServiceController::class, 'autodetailing'])->name('auto-detailing');
        Route::post('/auto-detailing/check', [ServiceController::class, 'check1'])->name('check1');
        Route::view('/auto-detailing/done', 'services.auto-detailing.done')->name('done1');

        Route::get('/paintjob', [ServiceController::class, 'paintjob'])->name('paintjob');
        Route::post('/paintjob/check', [ServiceController::class, 'check2'])->name('check2');
        Route::view('/paintjob/done', 'services.paintjob.done')->name('done2');
    });
});

Route::get('/vehicles', [UnitController::class, 'vehicles'])->name('vehicles');
Route::middleware(['auth', 'preventBackhHistory'])->group(function(){
    Route::prefix('vehicles')->name('vehicles.')->group(function(){
        Route::get('/vehicles/trade-in/{uid}', [TradeController::class, 'show'])->name('trade-in');
        Route::post('/vehicles/trade-in/check', [TradeController::class, 'check'])->name('check3');
        Route::view('/vehicles/trade-in/done', 'trade-in.done')->name('done3');
    });
});
        



Route::get('/vehicles/view-details/{uid}', [AppointmentController::class, 'show']);
Route::post('/vehicles/view-details/done', [AppointmentController::class, 'store']);

Route::get('/new-arrival', [UnitController::class, 'newArrival'])->name('new-arrival');
Route::get('/new-arrival/trade-in/{uid}', [TradeController::class, 'show1']);
Route::get('/new-arrival/view-details/{uid}', [AppointmentController::class, 'show']);

// Route::view('/view-details', 'home.view-details');

Route::get('/financing-calculator', [HomeController::class, 'finanCal'])->name('financing-calculator');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


Route::middleware(['guest'])->group(function(){
    Route::view('/login', 'user.login')->name('login');
    Route::view('/register', 'user.register')->name('register');
    Route::post('/login/process', [UserController::class, 'process'])->name('process');
    Route::post('/store', [UserController::class, 'store'])->name('store');
});


Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');




