<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseSchoolController;
use App\Http\Controllers\EmailController;


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



Route::get('/ana/{nom}', function ($nom) {

    return view('bienvenu',[
        'nom'=>$nom
    ]);
});


//3
Route::get('/acceuil/{id}', function ($id) {
    return "ID de acceuil: $id";
});

//4
Route::get('/contact', function () {
    return "Page de contact";
})->name('contact');

Route::get('/about', function () {
    return "Page À Propos";
})->name('about');


//5
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Tableau de bord de l'administration";
    });
    Route::get('/users', function () {
        return "Liste des utilisateurs de l'administration";
    });
});
Route::resource('books',BookController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// In your routes/web.php file, add the following:
Route::resource('articles', ArticleController::class);

// routes/web.php


// Routes pour le contrôleur SchoolController
Route::resource('schools', SchoolController::class);

// Routes pour le contrôleur CourseController
Route::resource('courses', CourseController::class);

// Routes pour le contrôleur StudentController
Route::resource('students', StudentController::class);

// Routes pour le contrôleur CourseSchoolController
Route::resource('course_schools', CourseSchoolController::class);
Route::get('/event', [EmailController::class,"send"]);
