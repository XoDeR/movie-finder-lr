<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// home
Route::name('home.')->group(function (): void {
    Route::get('/', [HomeController::class, 'index'])->name('index');
});

// dashboard public for test
/*
Route::name('dashboard.')->group(function (): void {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
});
*/

// dashboard (protected)
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])
    ->name('dashboard')
    ->group(function (): void {
        Route::get('/dashboard', [DashboardController::class, 'index']);
    });

/*
// original home (welcome) page
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
*/

// public
Route::name('movies.')->prefix('/movies')->group(function (): void {
    Route::get('/{id}', [MovieController::class, 'show'])->name('show');
});
Route::get('movies-browse', [MovieController::class, 'browse'])->name('movies.browse');

// protected dashboard-initial
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard-initial', function () {
        return Inertia::render('DashboardInitial');
    })->name('dashboard-initial');
});
