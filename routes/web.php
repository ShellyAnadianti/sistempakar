<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\DetailGejalaController;
use App\Http\Controllers\DetailPasienController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\CertaintyFactorController;
use App\Http\Controllers\CbrController;
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
    return view('dashboard.dashboard');
});

Route::get('dashboard', function () {
    return view('dashboard.dashboard');
});
Route::get('gejala',[GejalaController::class,'index']); 
Route::get('addgejala',[GejalaController::class,'create']); 
Route::post('postgejala',[GejalaController::class,'store']); 
Route::get('editgejala/{id}',[GejalaController::class,'edit']); 
Route::post('updategejala/{id}',[GejalaController::class,'update']); 
Route::get('deletegejala/{id}',[GejalaController::class,'destroy']); 

Route::get('penyakit',[PenyakitController::class,'index']); 
Route::get('addpenyakit',[PenyakitController::class,'create']); 
Route::post('postpenyakit',[PenyakitController::class,'store']); 
Route::get('editpenyakit/{id}',[PenyakitController::class,'edit']); 
Route::post('updatepenyakit/{id}',[PenyakitController::class,'update']); 
Route::get('deletepenyakit/{id}',[PenyakitController::class,'destroy']); 

Route::get('detailgejala',[DetailGejalaController::class,'index']); 
Route::get('adddetailgejala',[DetailGejalatController::class,'create']); 
Route::post('postdetailgejala',[DetailGejalaController::class,'store']); 
Route::get('editdetailgejala/{id}',[DetailGejalaController::class,'edit']); 
Route::post('updatedetailgejala/{id}',[DetailGejalaController::class,'update']); 
Route::get('deletedetailgejala/{id}',[DetailGejalaController::class,'destroy']); 

Route::get('detailpasien',[DetailPasienController::class,'index']); 


Route::get('login',[PasienController::class,'index']); 

Route::get('registrasipasien',[PasienController::class,'registrasipasien']); 

Route::resource('cf', CertaintyFactorController::class);
Route::resource('cbr', CbrController::class);