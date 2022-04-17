<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\InputData;
use Illuminate\Support\Facades\Route;

//routing

//auth
Route::get('/', [UserController::class , 'index']);
Route::post('/'  , [UserController::class, 'handleLogin']);
Route::get('/register' ,[UserController::class, 'register']);
Route::post('/register' , [UserController::class  , 'handleRegister']);
Route::get('/dashboard' ,[Dashboard::class,'index']);

//dashboard
Route::get('/dashboard/barang' ,[Dashboard::class,'barang']);
Route::post('/dashboard/barang' ,[InputData::class, 'barangHandler']);
Route::get('/dashboard/deletebarang/{id}' , [InputData::class, 'deleteBarang']);
Route::get('/dashboard/showEditBarang/{id}' , [Dashboard::class,'showEditBarang']);

//pelanggan
Route::get('/dashboard/pelanggan' ,[Dashboard::class,'pelanggan']);
Route::post('/dashboard/pelanggan',[InputData::class,'pelangganHandler']);
Route::get('/dashboard/deletePelanggan/{id}',[InputData::class,'deletePelanggan']);
Route::get('/dashboard/showEditPelanggan/{id}',[Dashboard::class,'showEditPelanggan']);;

//sales
Route::get('/dashboard/sales' , [Dashboard::class, 'sales']);
Route::post('/dashboard/sales'  , [InputData::class , 'salesHandler']);
Route::get('/dashboard/deleteSales/{id}', [InputData::class,'deleteSales']);
Route::get('/dashboard/showEditSales/{id}', [Dashboard::class,'showEditSales']);

//suplier
Route::get('/dashboard/suplier' , [Dashboard::class, 'suplier']);
Route::post('/dashboard/suplier'  , [InputData::class , 'suplierHandler']);
Route::get('/dashboard/deleteSuplier/{id}', [InputData::class,'deleteSuplier']);
Route::get('/dashboard/showEditSuplier/{id}', [Dashboard::class,'showEditSuplier']);
