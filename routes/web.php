<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

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



// /*--------------------------------Dashboard--------------------------------*/
Route::view('/dashboard', 'admin.dashboard')->name('dashboard');

// /*--------------------------------Inventory--------------------------------*/
Route::view('/add-unit', 'admin.inv-addunit')->name('add-unit');
Route::view('/showroom', 'admin.inv-showroom')->name('showroom');
Route::view('/sold-units', 'admin.inv-soldunits')->name('sold-units');

// /*--------------------------------Calendar--------------------------------*/
Route::view('/calendar', 'admin.calendar')->name('calendar');

// /*--------------------------------Appointment--------------------------------*/
Route::view('/appointment', 'admin.appointment')->name('appointment');

// /*--------------------------------Financing--------------------------------*/
Route::view('/financing-confirmation', 'admin.fin-confirmation')->name('financing-confirmation');
Route::view('/financing-status', 'admin.fin-status')->name('financing-status');

// /*--------------------------------Trade-in--------------------------------*/
Route::view('/trade-requests', 'admin.ti-trade-requests')->name('trade-requests');
Route::view('/trade-in-status', 'admin.ti-status')->name('trade-in-status');
Route::view('/traded-units', 'admin.ti-traded')->name('traded-units');

// /*--------------------------------Receipt--------------------------------*/
Route::view('/acknowledgment-receipt', 'admin.rcpt-acknowledgment')->name('acknowledgment-receipt');
Route::view('/receipt-records', 'admin.rcpt-records')->name('receipt-records');

// /*--------------------------------Walk-in--------------------------------*/
Route::view('/walk-in-unit', 'admin.wi-unit')->name('walk-in-unit');
Route::view('/walk-in-financing', 'admin.wi-financing')->name('walk-in-financing');
Route::view('/walk-in-trade-in', 'admin.wi-trade-in')->name('walk-in-trade-in');
Route::view('/walk-in-carwash', 'admin.wi-carwash')->name('walk-in-carwash');
Route::view('/walk-in-detailing', 'admin.wi-detailing')->name('walk-in-detailing');
Route::view('/walk-in-paintjob', 'admin.wi-paintjob')->name('walk-in-paintjob');

// /*--------------------------------Car-Wash--------------------------------*/
Route::view('/car-wash-confirmation', 'admin.cw-confirmation')->name('car-wash-confirmation');
Route::view('/car-wash-records', 'admin.cw-records')->name('car-wash-records');

// /*--------------------------------Auto-Detailing--------------------------------*/
Route::view('/auto-detailing-confirmation', 'admin.ad-confirmation')->name('auto-detailing-confirmation');
Route::view('/auto-detailing-payment', 'admin.ad-payment')->name('auto-detailing-payment');
Route::view('/auto-detailing-records', 'admin.ad-records')->name('auto-detailing-records');

// /*--------------------------------Auto-Detailing--------------------------------*/
Route::view('/paint-job-confirmation', 'admin.pj-confirmation')->name('paint-job-confirmation');
Route::view('/paint-job-payment', 'admin.pj-payment')->name('paint-job-payment');
Route::view('/paint-job-records', 'admin.pj-records')->name('paint-job-records');




Route::get('/sample', [UserController::class, 'sample']);

// Route::get('/services', function(){
//     return view('home.services');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/vehicles', [HomeController::class, 'vehicles'])->name('vehicles');
Route::get('/new-arrival', [HomeController::class, 'newArrival'])->name('new-arrival');
Route::get('/financing-calculator', [HomeController::class, 'finanCal'])->name('financing-calculator');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login/process', [UserController::class, 'process']);
Route::post('/logout', [UserController::class, 'logout']);

Route::post('/store', [UserController::class, 'store'])->name('store');

