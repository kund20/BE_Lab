<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUserController;

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
Route::get('dashboard', [CrudUserController::class, 'dashboard']);

Route::get('login', [CrudUserController::class, 'login'])->name('login');

Route::post('login', [CrudUserController::class, 'authUser'])->name('user.authUser');

Route::get('create', [CrudUserController::class, 'createUser'])->name('user.createUser');

Route::post('create', [CrudUserController::class, 'postUser'])->name('user.postUser');

Route::post('signOut', [CrudUserController::class, 'signOut'])->name('signOut');

Route::get('read', [CrudUserController::class, 'readUser'])->name('user.readUser');

Route::get('delete', [CrudUserController::class, 'deleteUser'])->name('user.deleteUser');

Route::get('list', [CrudUserController::class, 'listUser'])->name('user.list');

Route::get('update', [CrudUserController::class, 'updateUser'])->name('user.updateUser');

Route::post('update', [CrudUserController::class, 'postUpdateUser'])->name('user.postUpdateUser');

Route::get('signOut', [CrudUserController::class, 'signOut'])->name('signout');

Route::get('hacker/xss', [CrudUserController::class, 'xss'])->name('xss');

Route::get('/', function () {
    return view('welcome');
});