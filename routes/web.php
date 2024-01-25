<?php


use App\Http\Controllers\fileUploadController;
use App\Http\Controllers\halamanTugasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\tugasController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\showMemberController;
use App\Http\Controllers\showFileController;
use App\Http\Controllers\emailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\tugas;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/tugas', function () {
    return view('tugas');
})->middleware(['auth', 'verified'])->name('tugas');

Route::post('/tugas', [tugasController::class, 'tugas']);

Route::resource('/halaman/tugas', halamanTugasController::class)->middleware('auth');
// route team
Route::get('/team', function () {
    return view('team');
})->middleware(['auth', 'verified'])->name('team');
// member
Route::get('/member', function () {
    return view('member');
})->middleware(['auth', 'verified'])->name('member');

Route::get('add-member', [MemberController::class, 'create']);
Route::post('add-member', [MemberController::class, 'store']);
// akhir member

// show memeber
Route::get('/showMember', [showMemberController::class, 'show']);

// kirim email
Route::get('/email', function () {
    return view('email');
})->middleware(['auth', 'verified'])->name('email');


Route::post('/email-send', [emailController::class, 'create'])->name('send-email');


Route::get('/file', function () {
    return view('fileUpload');
})->middleware(['auth', 'verified'])->name('file');
Route::get('file_upload', [App\Http\Controllers\fileUploadController::class, 'create']);
Route::post('file_upload', [App\Http\Controllers\fileUploadController::class, 'store']);

Route::get('/showFile', [showFileController::class, 'show']);

// Route::resource('/tugas', tugasController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';