<?php

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ImageGenerationController;
use App\Http\Controllers\BackgroundRemoverController;
use App\Http\Controllers\AIBackgroundController;
use App\Http\Controllers\ImageUpscaleController;
use App\Http\Controllers\TextToPngImageController;

//texttoimage route
Route::get('/generate', [ImageGenerationController::class, 'index']);
Route::post('/generate', [ImageGenerationController::class, 'generate'])->name('generate.image');

//remove background route
Route::get('/remove-background', [BackgroundRemoverController::class, 'index'])->name('remove.bg.form');
Route::post('/remove-background', [BackgroundRemoverController::class, 'remove'])->name('remove.bg.process');

//ai image background route
Route::get('/ai-background', [AIBackgroundController::class, 'index'])->name('ai.background.index');
Route::post('/ai-background', [AIBackgroundController::class, 'generate'])->name('ai.background.process');

//image upscale route
Route::get('/upscale-image', [ImageUpscaleController::class, 'index'])->name('upscale.form');
Route::post('/upscale-image', [ImageUpscaleController::class, 'upscale'])->name('upscale.process');

//texttopngimage route
Route::get('/text-to-pngimage', [TextToPngImageController::class, 'index'])->name('text.to.pngimage.form');
Route::post('/text-to-pngimage', [TextToPngImageController::class, 'generate'])->name('text.to.pngimage.generate');
