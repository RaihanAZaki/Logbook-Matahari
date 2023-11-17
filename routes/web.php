<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\MentorController;
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
Route::middleware(['guest'])->group(function(){
    Route::get('/',[SesiController::class, 'index'])->name('login');
    Route::post('/',[SesiController::class, 'login']);
});

Route::get('/home', function(){
    return redirect('/');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin',[AdminController::class, 'admin'])->middleware('userAkses:admin')->name('admin');
    Route::get('data-lengkap',[AdminController::class, 'datalengkap'])->middleware('userAkses:admin')->name('data-lengkap');
    
    Route::get('profile',[AdminController::class, 'profile'])->middleware('userAkses:admin')->name('profile');

    Route::get('user-management',[AdminController::class, 'userManagement'])->middleware('userAkses:admin')->name('user-management');
    Route::get('insert-new-user',[AdminController::class, 'admUser'])->middleware('userAkses:admin')->name('insert');
    Route::post('insert-new-user', [AdminController::class, 'insertUser'])->middleware('userAkses:admin')->name('insert-user');
    Route::delete('user-management/{id}', [AdminController::class, 'destroyUser']);

    Route::get('toko',[AdminController::class, 'dataToko'])->middleware('userAkses:admin')->name('toko');
    Route::get('insert-toko', [AdminController::class, 'formToko'])->middleware('userAkses:admin')->name('insert-toko');
    Route::post('insert-toko', [AdminController::class, 'insertToko'])->middleware('userAkses:admin')->name('insert-toko');
    Route::get('/admin/toko/{kode_toko}/edit', [AdminController::class, 'editToko'])->middleware('userAkses:admin')->name('edit-toko');
    Route::put('/admin/toko/{kode_toko}', [AdminController::class, 'updateToko'])->middleware('userAkses:admin')->name('update-toko');
    Route::delete('toko/{kode_toko}', [AdminController::class, 'destroyToko'])->middleware('userAkses:admin')->name('destroy-toko');


    Route::get('jabatan',[AdminController::class, 'dataJabatan'])->middleware('userAkses:admin')->name('jabatan');
    Route::get('insert-jabatan', [AdminController::class, 'formJabatan'])->middleware('userAkses:admin')->name('insert-jabatan');
    Route::post('insert-jabatan', [AdminController::class, 'insertJabatan'])->middleware('userAkses:admin')->name('insert-jabatan');
    Route::get('/admin/jabatan/{id}/edit', [AdminController::class, 'editJabatan'])->middleware('userAkses:admin')->name('edit-jabatan');
    Route::put('/admin/jabatan/{id}', [AdminController::class, 'updateJabatan'])->middleware('userAkses:admin')->name('update-jabatan');
    Route::delete('jabatan/{id}', [AdminController::class, 'destroyJabatan'])->middleware('userAkses:admin')->name('destroy-jabatan');

    Route::get('siswa',[AdminController::class, 'dataSiswa'])->middleware('userAkses:admin')->name('siswa');
    Route::get('insert-siswa', [AdminController::class, 'formSiswa'])->middleware('userAkses:admin')->name('insert-siswa');
    Route::post('insert-siswa', [AdminController::class, 'insertSiswa'])->middleware('userAkses:admin')->name('insert-siswa');
    Route::get('/admin/siswa/{id}/edit', [AdminController::class, 'editSiswa'])->middleware('userAkses:admin')->name('edit-siswa');
    Route::put('/admin/siswa/{id}', [AdminController::class, 'updateSiswa'])->middleware('userAkses:admin')->name('update-siswa');
    Route::delete('siswa/{id}', [AdminController::class, 'destroySiswa'])->middleware('userAkses:admin')->name('destroy-siswa');

    Route::get('mentors',[AdminController::class, 'dataMentor'])->middleware('userAkses:admin')->name('mentor');
    Route::get('insert-mentor', [AdminController::class, 'formMentor'])->middleware('userAkses:admin')->name('insert-mentor');
    Route::post('insert-mentor', [AdminController::class, 'insertMentor'])->middleware('userAkses:admin')->name('insert-mentor');
    Route::get('/admin/mentor/{id}/edit', [AdminController::class, 'editMentor'])->middleware('userAkses:admin')->name('edit-mentor');
    Route::put('/admin/mentor/{id}', [AdminController::class, 'updateMentor'])->middleware('userAkses:admin')->name('update-mentor');
    Route::delete('mentors/{id}', [AdminController::class, 'destroyMentor']);

    Route::get('formulir-logbook',[AdminController::class, 'dataForm'])->middleware('userAkses:admin')->name('logbook');
    Route::post('formulir-logbook/export/excel',[ExportController::class, 'exportCSVFile'])->middleware('userAkses:admin')->name('logbook_export');
    // Route::get('formulir-logbook/export/excel',[ExportController::class, 'exportCSVFile'])->middleware('userAkses:admin')->name('logbook');


    Route::get('/mentor',[AdminController::class, 'mentor'])->middleware('userAkses:mentor');
    Route::get('/mentor/formulir',[MentorController::class, 'dataMentor'])->middleware('userAkses:mentor');
    Route::post('/mentor/formulir',[MentorController::class, 'insertFormMentor'])->middleware('userAkses:mentor');
    Route::get('/mentor/histori',[MentorController::class, 'historiLogbookMentor'])->middleware('userAkses:mentor');


    Route::get('/magang',[AdminController::class, 'magang'])->middleware('userAkses:siswa');
    Route::get('/magang/formulir',[AdminController::class, 'formulir'])->middleware('userAkses:siswa');

    Route::get('/magang/formulir',[MagangController::class, 'dataMagang'])->middleware('userAkses:siswa');
    Route::post('/magang/formulir',[MagangController::class, 'insertForm'])->middleware('userAkses:siswa');
    Route::get('/magang/histori',[MagangController::class, 'historiLogbook'])->middleware('userAkses:siswa');
    
    Route::get('/logout',[SesiController::class, 'logout']);

    Route::get('/tester',[AdminController::class, 'tes']);
});

