<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndustrialController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ScreenController;
use App\Http\Controllers\FileController;
use App\Models\File;
use App\Models\Screen;
use App\Models\About;
use App\Models\Slider;

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

/*
 * Authentications Only Admin Can Login
 */
Route::get('/', function () {
    return view('auth.login');
});
/*
 * Website User
 */
Route::get('/', function () {
    $slider = Slider::first();
    $about = About::first();
    $screen = Screen::first();
    $file = File::first();
    return view('layouts.website.master',compact('slider','about','screen','file'));
})->name('/');
/*
 * Admin Dashboard For (CRUD)
 */
Route::get('/admin_dashboard', function () {
    return view('layouts.admin.admin_dashboard');
})->middleware(['auth'])->name('admin_dashboard');
/*
 * E-mail Signed
 */
Route::get('industrial',[IndustrialController::class,'index'])->name('industrial');
Route::post('industrial/store',[IndustrialController::class,'store'])->name('industrial.store');
Route::post('industrial/destroy',[IndustrialController::class,'destroy'])->name('industrial.destroy');
/*
 * Slider Sections ( عنوان تجريبى ) Complete CRUD
 */
Route::get('slider',[SliderController::class,'index'])->name('slider');
Route::post('slider/store',[SliderController::class,'store'])->name('slider.store');
Route::post('slider/destroy',[SliderController::class,'destroy'])->name('slider.destroy');
Route::post('slider/{id}',[SliderController::class,'update'])->name('slider.update');
/*
 * About Section ( من نحن ؟ ) Complete CRUD
 */
Route::get('about',[AboutController::class,'index'])->name('about');
Route::post('about/store',[AboutController::class,'store'])->name('about.store');
Route::post('about/destroy',[AboutController::class,'destroy'])->name('about.destroy');
Route::post('about/{id}',[AboutController::class,'update'])->name('about.update');
/*
 * Screen Section (شاشات التطبيق) Complete CRUD
 */
Route::get('screen',[ScreenController::class,'index'])->name('screen');
Route::post('screen/store',[ScreenController::class,'store'])->name('screen.store');
Route::post('screen/destroy',[ScreenController::class,'destroy'])->name('screen.destroy');
Route::post('screen/{id}',[ScreenController::class,'update'])->name('screen.update');
/*
 * File Upload
 */
Route::get('file',[FileController::class,'index'])->name('file');
Route::post('file/store',[FileController::class,'store'])->name('file.store');
Route::post('file/{id}',[FileController::class,'update'])->name('file.update');

require __DIR__.'/auth.php';
