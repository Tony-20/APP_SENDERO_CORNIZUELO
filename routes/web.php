<?php

//use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VoluntariadoIndividualController;
use App\Http\Controllers\VoluntariadoGrupalController;
use App\Http\Controllers\CaminataIndividualController;
use App\Http\Controllers\CaminataGrupalController;
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
});

Route::get('/servicios', function () {
    return view('servicios');
});

/*
Route::get('/formVolInd', function () {
    return view('formVolInd');
});

Route::get('/formVolGrup', function () {
    return view('formVolGrup');
});

Route::get('/formResInd', function () {
    return view('formResInd');
});

Route::get('/formResGrup', function () { 
    return view('formResGrup');
}); */

//routes voluntariado-individual

Route::get('formvolind/add',[VoluntariadoIndividualController::class, 'create']);
Route::post('formvolind/add',[VoluntariadoIndividualController::class, 'store']); 
Route::get('/formvolind',[VoluntariadoIndividualController::class, 'index']);
Route::get('formvolind/edit/{id}',[VoluntariadoIndividualController::class, 'edit']);
Route::post('formvolind/edit/{id}',[VoluntariadoIndividualController::class, 'update']);
Route::delete('formvolind/{id}',[VoluntariadoIndividualController::class, 'destroy']);


//routes voluntariado-grupal
Route::get('formvolgrup/add',[VoluntariadoGrupalController::class, 'create']);
Route::post('formvolgrup/add',[VoluntariadoGrupalController::class, 'store']);
Route::get('/formvolgrup',[VoluntariadoGrupalController::class, 'index']);
Route::get('formvolgrup/edit/{id}',[VoluntariadoGrupalController::class, 'edit']);
Route::post('formvolgrup/edit/{id}',[VoluntariadoGrupalController::class, 'update']);
Route::delete('formvolgrup/{id}',[VoluntariadoGrupalController::class, 'destroy']);

//routes caminata-individual
Route::get('formresind/add',[CaminataIndividualController::class, 'create']);
Route::post('formresind/add',[CaminataIndividualController::class, 'store']);
Route::get('/formresind',[CaminataIndividualController::class, 'index']);
Route::get('formresind/edit/{id}',[CaminataIndividualController::class, 'edit']);
Route::post('formresind/edit/{id}',[CaminataIndividualController::class, 'update']);
Route::delete('formresind/{id}',[CaminataIndividualController::class, 'destroy']);

//routes caminata-grupal
Route::get('formresgrup/add',[CaminataGrupalController::class, 'create']);
Route::post('formresgrup/add',[CaminataGrupalController::class, 'store']);
Route::get('/formresgrup',[CaminataGrupalController::class, 'index']);
Route::get('formresgrup/edit/{id}',[CaminataGrupalController::class, 'edit']);
Route::post('formresgrup/edit/{id}',[CaminataGrupalController::class, 'update']);
Route::delete('formresgrup/{id}',[CaminataGrupalController::class, 'destroy']);

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/contacto', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
