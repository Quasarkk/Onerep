<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Models\Program;
use App\Models\Exercise;
use App\Models\Set;
use App\Models\Training;

use App\Http\controllers\ProgramController;
use App\Http\controllers\ExerciseController;
use App\Http\controllers\SetController;
use App\Http\controllers\TrainingController;


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
    $programs = Program::with('trainings')->get();


    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,

        'programs' => $programs,
        // 'exercises' => $exercises,
        // 'sets' => $sets,
        // 'trainings' => $trainings,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('/stats', function () {
    return Inertia::render('Stats');
})->name('Stats');

Route::resource("programs", ProgramController::class);
// Route::resource("exercises", ExerciseController::class);
// Route::resource("sets", SetController::class);
// Route::resource("trainings", TrainingController::class);
