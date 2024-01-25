<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\TestimonailController;


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

Route::get('Test', [ExampleController::class, 'home'])->name('Test');
Route::get('about', [ExampleController::class, 'about'])->name('about');
Route::get('Classes', [ExampleController::class, 'class'])->name('Classes');
Route::get('contactUs', [ExampleController::class, 'contact'])->name('contactUs');
Route::get('facilities', [ExampleController::class, 'facilities'])->name('facilities');
Route::get('popularteachers', [ExampleController::class, 'Teachers'])->name('popularteachers');
Route::get('become_teacher', [ExampleController::class, 'becometeacher'])->name('become_teacher');
Route::get('appointment', [ExampleController::class, 'make_appointment'])->name('appointment');
Route::get('callToAction', [ExampleController::class, 'call_To_action'])->name('callToAction');
Route::get('404', [ExampleController::class, 'error_404'])->name('404');

// Route :: fallback(function(){
//     return redirect('404');
// });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
