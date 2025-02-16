<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Models\Teas;
use Inertia\Inertia;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Http\Request;
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

require __DIR__.'/auth.php';

Route::get('/teas', function () {
    return Inertia::render('Teas', [
        'teas' => Teas::all()
    ]);
})->name('teas.index');

Route::get('/teas/{tea}', function (Teas $tea) {
    return Inertia::render('Tea', [
        'tea' => $tea
    ]);
})->name('tea.show');

Route::get('/{user_id}/teas', function ($user_id) {
    return Inertia::render('Teas', [
        'teas' => Teas::where('user_id', $user_id)->get()
    ]);
})->name('teas.index');

Route::post('/teas', function (Request $request) {
    $tea = new Teas();
    $tea->fill($request->all());
    $tea->user_id = auth()->id();
    $tea->save();
    return redirect()->back();
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
