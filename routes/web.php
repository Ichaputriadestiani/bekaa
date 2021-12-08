<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ConsultSessionController;
use Illuminate\Support\Facades\Auth;

Auth::routes();

// Start Route for Frontend View
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');
//Route::get('/blog', [FrontendController::class, 'blog'])->name('frontend.blog');
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{slug}', [BlogController::class, 'show']);

Route::get('/gallery', function () {
    return view('frontend.gallery');
});


// also frontend, but for logeed in user and student role
Route::middleware(['auth', 'student'])->group(function () {
    Route::get('/consult', [FrontendController::class, 'consult'])->middleware('student')->name('frontend.consult');
});
// End Route for Frontend View

Route::group(['middleware' => ['auth', 'mentor']], function () {
    Route::prefix('admin/user')->group(function () {
        Route::prefix('student')->group(function () {
            Route::get('/', [StudentController::class, 'index'])->name('user.student.index');
            Route::get('/create', [StudentController::class, 'create'])->name('user.student.create');
            Route::post('/store', [StudentController::class, 'store'])->name('user.student.store');
            Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('user.student.edit');
            Route::put('/update/{id}', [StudentController::class, 'update'])->name('user.student.update');
            Route::delete('/delete/{id}', [StudentController::class, 'destroy'])->name('user.student.destroy');
        });

        Route::prefix('mentor')->group(function () {
            Route::get('/', [MentorController::class, 'index'])->name('user.mentor.index');
            Route::get('/create', [MentorController::class, 'create'])->name('user.mentor.create');
            Route::post('/store', [MentorController::class, 'store'])->name('user.mentor.store');
            Route::get('/edit/{id}', [MentorController::class, 'edit'])->name('user.mentor.edit');
            Route::put('/update/{id}', [MentorController::class, 'update'])->name('user.mentor.update');
            Route::delete('/delete/{id}', [MentorController::class, 'destroy'])->name('user.mentor.destroy');
        });
    });

    Route::prefix('admin/consult-session')->group(function () {
        Route::get('/', [ConsultSessionController::class, 'index'])->name('consult-session.index');
        Route::get('/create', [ConsultSessionController::class, 'create'])->name('consult-session.create');
        Route::post('/store', [ConsultSessionController::class, 'store'])->name('consult-session.store');
        Route::get('/edit/{id}', [ConsultSessionController::class, 'edit'])->name('consult-session.edit');
        Route::put('/update/{id}', [ConsultSessionController::class, 'update'])->name('consult-session.update');
        Route::delete('/delete/{id}', [ConsultSessionController::class, 'destroy'])->name('consult-session.destroy');
    });

    Route::resource('post', PostController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('todo', TodoController::class);
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::resource('gallery', GalleryController::class);
});
