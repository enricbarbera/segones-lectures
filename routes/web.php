<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TitolController;
use App\Http\Controllers\AutorController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('titols', [TitolController::class, 'index'])->middleware(['auth'])->name('titols.index');

Route::get('titols/show/{titol}', [TitolController::class, 'show'])->name('titols.show');

Route::get('titols/create', [TitolController::class, 'create'])->name('titols.create');

Route::post('titols/store', [TitolController::class, 'store'])->name('titols.store');

Route::get('titols/edit/{titol}', [TitolController::class, 'edit'])->name('titols.edit');

Route::put('titols/update/{titol}', [TitolController::class, 'update'])->name('titols.update');

Route::delete('titols/delete/{titol}', [TitolController::class, 'delete'])->name('titols.delete');

Route::get('autors', [AutorController::class, 'index'])->name('autors.index');

Route::get('autors/show/{autor}', [AutorController::class, 'show'])->name('autors.show');

Route::get('editorials');
