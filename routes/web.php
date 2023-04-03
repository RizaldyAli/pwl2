<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\Home2Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// PRAKTIKUM MINGGU 1 
//Route::get('/', function () {
//    return view('welcome');
//});

// Route::get('/', function () {
//     return "Selamat Datang";
// });

// Route::get('/about', function () {
//     return "NIM: 2141720115, Nama: Rizaldy Ali Machfuddin";
// });

// Route::get('/articles/{id}', function ($id) {
//     return "Halaman Artikel dengan ID $id";
// });

// Route::get('/', [PageController::class, 'index']);

// Route::get('/about', [PageController::class, 'about']);

// Route::get('/article/{id}', [PageController::class, 'article']);

// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [AboutController::class, 'about']);

// Route::get('/article/{id}', [ArticleController::class, 'article']);





// PRAKTIKUM MINGGU 2
// Route::get('/', function(){
//     return "SELAMAT DATANG DI WEBSITE INI";
// });

// Route::prefix('product')->group(function () {
//     Route::get('/', function () {
//     echo "Menampilkan Daftar Product";
//     echo '<br><a href="http://localhost/pwl2/public/product/marbel-edu-games">marbel-edu-games</a><br>';
//     echo '<a href="http://localhost/pwl2/public/product/marbel-and-friends-kids-games">marbel-and-friends-kids-games</a><br>';
//     echo '<a href="http://localhost/pwl2/public/product/riri-story-books">riri-story-books</a><br>';
//     echo '<a href="http://localhost/pwl2/public/product/kolak-kids-songs">kolak-kids-songs</a><br>';
//     });
// });

// Route::get('/product/marbel-edu-games', function(){
//     echo "Masuk ke halaman marbel-edu-games";
// });

// Route::get('/product/marbel-and-friends-kids-games', function(){
//     echo "Masuk ke halaman marbel-and-friends-kids-games";
// });

// Route::get('/product/riri-story-books', function(){
//     echo "Masuk ke halaman riri-story-books";
// });

// Route::get('/product/kolak-kids-songs', function(){
//     echo "Masuk ke halaman kolak-kids-songs";
// });


// Route::get('/news/{tittle}', function ($tittle) {
//     return 'Menampilkan Daftar Berita tentang '.$tittle;
// });
   

// Route::prefix('program')->group(function () {
//     Route::get('/', function () {
//         echo "Menampilkan Daftar Program";
//         echo '<br><a href="http://localhost/pwl2/public/program/karir">karir</a><br>';
//         echo '<a href="http://localhost/pwl2/public/program/magang">magang</a><br>';
//         echo '<a href="http://localhost/pwl2/public/program/kunjungan industri">kunjungan industri</a><br>';
//     });
// });

// Route::get('/program/karir', function(){
//     echo "Masuk ke halaman karir";
// });

// Route::get('/program/magang', function(){
//     echo "Masuk ke halaman magang";
// });

// Route::get('/program/kunjungan industri', function(){
//     echo "Masuk ke halaman kunjungan industri";
// });

// Route::get('/about', function () {
//     echo "Nama Saya Rizaldy Ali <br>";
//     echo "Saya adalah Mahasiswa Polteknik Negeri Malang Jurusan Teknologi Informasi";
// });

// Route::resource('kontak', HomeController::class);

// PRAKTIKUM MINGGU 3 -- Praktikum 1
// Route::get('/', [Home2Controller::class, 'home']);

// Route::prefix('product')->group(function () {
//     Route::get('/', [Home2Controller::class, 'product']);
// });

// Route::get('/news/{id}', [Home2Controller::class, 'news']);
   
// Route::prefix('program')->group(function () {
//     Route::get('/', [Home2Controller::class, 'program']);
// });

// Route::get('/', [Home2Controller::class, 'aboutUs']);

// Route::resource('/contactUs', ContactUsController::class);
   
// // PRAKTIKUM MINGGU 3 -- Praktikum 2
// Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::get('/profile', [ProfileController::class, 'index']);
// Route::get('/kuliah', [KuliahController::class, 'index']);

// // PRAKTIKUM MINGGU 4
// Route::get('/hobi', [HobiController::class, 'index']);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// PRAKTIKUM MINGGU 6
Auth::routes();
Route::get('/', [LoginController::class, 'showLoginForm']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function() {
    // PRAKTIKUM MINGGU 3 -- Praktikum 2
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/kuliah', [KuliahController::class, 'index']);


    // PRAKTIKUM MINGGU 4
    Route::get('/hobi', [HobiController::class, 'index']);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //PRAKTIKUM MINGGU 7
    Route::resource('/mahasiswa', MahasiswaController::class)->parameter('mahasiswa', 'id');
});