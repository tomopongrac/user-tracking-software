<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::post('/track-leaving-page', [\App\Http\Controllers\TrackLeavingPageController::class, 'store']);

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        return view('admin.home');
    });

    Route::get('/admin/user-tracking-data', [\App\Http\Controllers\Admin\UserTrackingDataController::class, 'index']);
});
