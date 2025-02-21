<?php

use App\Http\Controllers\ProfileController;
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

Route::prefix('/')->name('front.')->group(function(){
    Route::view('','front.index')->name('index');
    // ===================================
    Route::view('about','front.about')->name('about');
    // ===================================
    Route::view('contact','front.contact')->name('contact');
    // ===================================
    Route::view('project','front.project')->name('project');
    // ===================================
    Route::view('service','front.service')->name('service');
    // ===================================
    Route::view('team','front.team')->name('team');
    // ===================================
    Route::view('testimonial','front.testimonial')->name('testimonial');
});
Route::prefix('/admin')->name('admin.')->group(function(){
    Route::view('' ,'admin.index')->name('index')->middleware('admin');
        // ===================================
    Route::view('/settings' ,'admin.settings.index')->name('settings')->middleware('admin');
        // ===================================
    Route::view('/skills' ,'admin.skills.index')->name('skills')->middleware('admin');
        // ===================================
    Route::view('/subscribers' ,'admin.subscribers.index')->name('subscribers')->middleware('admin');
        // ===================================
    Route::view('/counters' ,'admin.counters.index')->name('counters')->middleware('admin');
        // ===================================
    Route::view('/services' ,'admin.services.index')->name('services')->middleware('admin');
        // ===================================
    Route::view('/messages' ,'admin.messages.index')->name('messages')->middleware('admin');
        // ===================================
    Route::view('/categories' ,'admin.categories.index')->name('categories')->middleware('admin');
        // ===================================
    Route::view('/projects' ,'admin.projects.index')->name('projects')->middleware('admin');
    Route::view('/login' ,'admin.auth.login')->name('login')->middleware('guest:admin');
});

//Route::get('/', function () {
  //  return view('welcome');
//});

//Route::get('/dashboard', function () {
  //  return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
    //Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  //  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__.'/auth.php';
