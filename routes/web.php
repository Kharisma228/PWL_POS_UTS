<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\barangcontroller;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AuthController;
 
Route::pattern('id','[0-9]+'); // Artinya ketika ada parameter {id}, maka harus berupa angka

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postlogin']);
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'store']);

Route::middleware(['auth'])->group(function(){ // Artinya semua route di dalam group ini harus login dulu
    Route::get('/', [WelcomeController::class,'index']);

    // Artinya semua route di dalam group ini harus punya role ADM (Administrator)
    Route::middleware(['authorize:ADM'])->group(function(){
        Route::get('/level', [LevelController::class, 'index']); // menampilkan halaman awal level
        Route::post('/level/list', [LevelController::class, 'list']); // menampilkan data level dalam bentuk json untuk datatables
        Route::get('/level/create', [LevelController::class, 'create']); // menampilkan halaman form tambah level
        Route::post('/level', [LevelController::class, 'store']); // menyimpan data level baru
        Route::get('/level/create_ajax', [LevelController::class, 'create_ajax']); // menampilkan halaman form tambah level Ajax
        Route::post('/level/ajax', [LevelController::class, 'store_ajax']); // menyimpan data level baru Ajax
        Route::get('/level/{id}', [LevelController::class, 'show']); // menampilkan detail level
        Route::get('/level/{id}/edit', [LevelController::class, 'edit']); // menampilkan halaman form edit level
        Route::get('/level/{id}/edit_ajax', [LevelController::class, 'edit_ajax']); // menampilkan halaman form edit level Ajax
        Route::put('/level/{id}', [LevelController::class, 'update']); // menyimpan perubahan data level
        Route::put('/level/{id}/update_ajax', [LevelController::class, 'update_ajax']); // menyimpan perubahan data level Ajax
        Route::get('/level/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']); // untuk tampilkan form confirm delete level Ajax
        Route::delete('/level/{id}/delete_ajax', [LevelController::class, 'delete_ajax']); // untuk hapus data level Ajax 
        Route::delete('/level/{id}', [LevelController::class, 'destroy']); // menghapus data level

        Route::get('/level/import', [LevelController::class, 'import']); // ajax form upload excel
        Route::post('/level/import_ajax', [LevelController::class, 'import_ajax']); // ajax import excel
        Route::get('/level/export_excel', [LevelController::class, 'export_excel']); // export excel
        Route::get('/level/export_pdf', [LevelController::class, 'export_pdf']); // export pdf
    });

    Route::middleware(['authorize:ADM'])->group(function(){
        Route::group(['prefix' => 'user'], function() {
            Route::get('/', [UserController::class, 'index']); //Menampilkan laman awal user
            Route::post('/list', [UserController::class, 'list']); //menampilkan data user dalam bentuk json untuk datatables.
            Route::get('/create', [UserController::class, 'create']); //Membuat data baru
            Route::post('/', [UserController::class, 'store']); //Menyimpan data yang telah dibuat
            Route::get('/create_ajax', [UserController::class, 'create_ajax']); //menambah data user dengan ajax
            Route::post('/ajax', [UserController::class, 'store_ajax']); //menyimpan data yg telah dibuat dengan ajax
            Route::get('/{id}', [UserController::class, 'show']); //menampilkan detail data user
            Route::get('/{id}/edit', [UserController::class, 'edit']); //Edit data user tertentu
            Route::put('/{id}', [UserController::class, 'update']); //Menyimpan perubahan data user 
            Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']); //edit data user dengan ajax
            Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']); //menyimpan perubahan data dengan ajax
            Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']); // Untuk menyimpan form confirm delete user ajax
            Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']); // untuk hapus data user Ajax
            Route::delete('/{id}', [UserController::class, 'destroy']); //Menghapus data user
    });
    });

    // Artinya semua route di dalam group ini harus punya role ADM (Administrator) dan MNG (Manager)
    Route::middleware(['authorize:ADM,MNG'])->group(function(){
        Route::get('/barang', [BarangController::class, 'index']);
        Route::post('/barang/list', [BarangController::class, 'list']);
        Route::get('/barang/create_ajax', [BarangController::class, 'create_ajax']); // Ajax form create
        Route::post('/barang_ajax', [BarangController::class, 'store']); // Ajax store
        Route::get('/barang/{id}/edit_ajax', [BarangController::class, 'edit_ajax']);   // Ajax form edit
        Route::put('/barang/{id}/update_ajax', [BarangController::class, 'update_ajax']);  // Ajax update
        Route::get('/barang/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);  // Ajax form confirm
        Route::delete('/barang/{id}/delete_ajax', [BarangController::class, 'delete_ajax']);  // Ajax delete
        Route::get('barang/import', [BarangController::class, 'import']);      // ajax form upload excel
        Route::post('barang/import_ajax', [BarangController::class, 'import_ajax']);      // ajax import excel
        Route::get('barang/export_excel', [BarangController::class, 'export_excel']);      // export excel
        Route::get('barang/export_pdf', [BarangController::class, 'export_pdf']);      // export pdf

    });

    // Artinya semua route di dalam group ini harus punya role ADM (Administrator), MNG (Manager) dan STF (Staff)
    Route::middleware(['authorize:ADM,MNG,STF'])->group(function(){
            Route::get('/kategori', [KategoriController::class, 'index']);
            Route::post('/kategori/list', [KategoriController::class, 'list']);
            Route::get('/kategori/create', [KategoriController::class, 'create']);
            Route::post('/kategori', [KategoriController::class, 'store']);
            Route::get('/kategori/create_ajax', [KategoriController::class, 'create_ajax']);
            Route::post('/kategori/ajax', [KategoriController::class, 'store_ajax']);
            Route::get('/kategori/{id}', [KategoriController::class, 'show']);
            Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit']);
            Route::put('/kategori/{id}', [KategoriController::class, 'update']);
            Route::put('/kategori/{id}/update_ajax', [KategoriController::class, 'update_ajax']);
            Route::get('/kategori/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax']);
            Route::delete('/kategori/{id}/delete_ajax', [KategoriController::class, 'delete_ajax']);
            Route::delete('/kategori/{id}', [KategoriController::class, 'destroy']);
    });

    // Artinya semua route di dalam group ini harus punya role ADM (Administrator), MNG (Manager), STF (Staf), GDG (Gudang)
    Route::middleware(['authorize:ADM,MNG,STF,GDG'])->group(function(){
        Route::group(['prefix' => 'supplier'], function () {
            Route::get('/', [SupplierController::class, 'index']);              // menampilkan halaman awal supplier
            Route::post('/list', [SupplierController::class, 'list']);          // menampilkan data supplier dalam bentuk json untuk datatables
            Route::get('/create', [SupplierController::class, 'create']);       // menampilkan halaman form tambah supplier
            Route::post('/', [SupplierController::class, 'store']);              // menyimpan data supplier baru
            Route::get('/create_ajax', [SupplierController::class, 'create_ajax']); 
            Route::post('/ajax', [SupplierController::class, 'store_ajax']);
            Route::get('/{id}', [SupplierController::class, 'show']);            // menampilkan detail supplier
            Route::get('/{id}/show_ajax', [SupplierController :: class, 'show_ajax']);
            Route::get('/{id}/edit', [SupplierController::class, 'edit']);       // menampilkan halaman form edit supplier
            Route::put('/{id}', [SupplierController::class, 'update']);          // menyimpan perubahan data supplier
            Route::get('/{id}/edit_ajax', [SupplierController::class, 'edit_ajax']); 
            Route::put('/{id}/update_ajax', [SupplierController::class, 'update_ajax']); 
            Route::get('/{id}/delete_ajax', [SupplierController::class, 'confirm_ajax']); 
            Route::delete('/{id}/delete_ajax', [SupplierController::class, 'delete_ajax']); 
            Route::delete('/{id}', [SupplierController::class, 'destroy']);      // menghapus data supplier
    });
    });
});