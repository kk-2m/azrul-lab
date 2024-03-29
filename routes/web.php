<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
// Route::get('/teachers', [TeacherController::class, 'index']);
// Route::get('/teachers', function() {
//     return view('profile.teacher');
// });
Route::controller(ProfileController::class)->group(function(){
    Route::get('/teachers', 'teacher')->name('teacher');
});