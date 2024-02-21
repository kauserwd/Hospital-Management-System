<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/',[HomeController::class, 'index']);

Route::get('/home',[HomeController::class, 'redirect'])->middleware('auth','verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



/* take appoinment request sent */
Route::post('/take_appointment',[HomeController::class, 'takeAppointment']);

/* sho appointment as a User after login  */
Route::get('/my-appointment',[HomeController::class, 'myAppointment']);

/* cancell appointment after booking appoinment */
Route::get('/cancel_appointment/{id}',[HomeController::class, 'cancelAppointment']);

/* Show appoinment in home page after login user    */
Route::get('/appointment',[AdminController::class, 'showAppointment']);

/* User appoinment approve and delete  */
Route::get('/approved/{id}',[AdminController::class, 'approve']);
Route::get('/canceled/{id}',[AdminController::class, 'cancel']);

/* add doctor  form into addmin pannel  */
Route::get('/add_doctor_view',[AdminController::class, 'addView']);

/* Add doctor  into database  */
Route::post('/upload_doctor',[AdminController::class, 'uploaddoctor']);

/* Show doctor  list  */
Route::get('/all_doctors',[AdminController::class, 'all_doctors']);

/* Delete doctor/update doctor from all  doctor list  */
Route::get('/delteDoctor/{id}',[AdminController::class, 'delteDoctor']);

/* show doctor in input field for update list  */
Route::get('/updateDoctor/{id}',[AdminController::class, 'updateDoctor']);
/* Update doctor list  */
Route::post('/editDoctor/{id}',[AdminController::class, 'editDoctor']);

Route::get('/emailView/{id}',[AdminController::class, 'emailView']);

Route::post('/sendEmail/{id}',[AdminController::class, 'sendEmail']);

