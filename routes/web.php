<?php

use app\Models\Character;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\WeaponController;
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

// characters
// Route::get(
//   '/characters',
//   [CharacterController::class, 'index']
// );

Route::get(
  'characters/trash/{id}',
  [CharacterController::class, 'trash']
)->name('characters.trash');

Route::get(
  'characters/trashed/',
  [CharacterController::class, 'trashed']
)->name('characters.trashed');

Route::get(
  'characters/restore/{id}',
  [CharacterController::class, 'trash']
)->name('characters.restore');

Route::resource('characters', CharacterController::class);

// weapons
Route::get(
  'weapons/trash/{id}',
  [WeaponController::class, 'trash']
)->name('weapons.trash');

Route::get(
  'weapons/trashed/',
  [WeaponController::class, 'trashed']
)->name('weapons.trashed');

Route::get(
  'weapons/restore/{id}',
  [WeaponController::class, 'trash']
)->name('weapons.restore');

Route::resource('weapons', WeaponController::class);