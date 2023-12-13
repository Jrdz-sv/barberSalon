<?php

use App\Models\Payment;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/CategoryShow',[CategoryController::class, 'index']); 

});

//------------------- Categories Views--------------------------
Route::get('/category/show', [CategoryController::class, 'index'] )->name('category.show');
//Ruta para Crear (FrontEnd)
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
//Ruta para Crear (BackEnd)
Route::post('/categoryStore', [CategoryController::class, 'store']);
//Ruta para Modificar (FrontEnd)
Route::get('/category/edit/{id_category}', [CategoryController::class, 'edit'])->name('category.edit');
//Ruta para Modificar BackEnd)
Route::put('/category/update/{categories}', [CategoryController::class, 'update'])->name('category.update'); 
//Ruta para Eliminar (BackEnd)
Route::delete('category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy'); 


// -----------------Services views--------------------------
Route::get('/service/show', [ServiceController::class,'index'])->name('service.show');
//Ruta para Crear (FrontEnd)
Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
//Ruta para Crear (BackEnd)
Route::post('/serviceStore', [ServiceController::class, 'store']);
//Ruta para Modificar (FrontEnd)
Route::get('/service/edit/{id_service}', [ServiceController::class, 'edit'])->name('service.edit');
//Ruta para Modificar BackEnd)
Route::put('/service/update/{services}', [ServiceController::class, 'update'])->name('service.update'); 
//Ruta para Eliminar (BackEnd)
Route::delete('service/destroy/{id}', [ServiceController::class, 'destroy'])->name('service.destroy'); 


//--------------------Appointments views--------------------------
Route::get('/appointment/show', [AppointmentController::class, 'index'] )->name('appointment.show');
//Ruta para Crear (FrontEnd)
Route::get('/appointment/create', [AppointmentController::class, 'create'])->name('appointment.create');
//Ruta para Crear (BackEnd)
Route::post('/appointmentStore', [AppointmentController::class, 'store']);
//Ruta para Modificar (FrontEnd)
Route::get('/appointment/edit/{id_appointment}', [AppointmentController::class, 'edit'])->name('appointment.edit');
//Ruta para Modificar BackEnd)
Route::put('/appointment/update/{appointments}', [AppointmentController::class, 'update'])->name('appointment.update'); 
//Ruta para Eliminar (BackEnd)
Route::delete('appointment/destroy/{id}', [AppointmentController::class, 'destroy'])->name('appointment.destroy'); 

//--------------------Payment views--------------------------
Route::get('/payment/show', [PaymentController::class, 'index'] )->name('payment.show');
//Ruta para Crear (FrontEnd)
Route::get('/payment/create', [PaymentController::class, 'create'])->name('payment.create');
//Ruta para Crear (BackEnd)
Route::post('/paymenttStore', [PaymentController::class, 'store']);
//Ruta para Modificar (FrontEnd)
Route::get('/payment/edit/{id_payment}', [PaymentController::class, 'edit'])->name('payment.edit');
//Ruta para Modificar BackEnd)
Route::put('/payment/update/{payments}', [PaymentController::class, 'update'])->name('payment.update'); 
//Ruta para Eliminar (BackEnd)
Route::delete('payment/destroy/{id}', [PaymentController::class, 'destroy'])->name('payment.destroy'); 


require __DIR__.'/auth.php';
