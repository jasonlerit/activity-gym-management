<?php

use App\Http\Controllers\MemberController;
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

Route::get('/', [MemberController::class, 'index'])->name('member.index');
Route::get('/create', [MemberController::class, 'create'])->name('member.create');
Route::post('/create', [MemberController::class, 'store'])->name('member.store');
Route::get('/{id}', [MemberController::class, 'show'])->name('member.show');
Route::get('/{id}/edit', [MemberController::class, 'edit'])->name('member.edit');
Route::post('/{id}', [MemberController::class, 'update'])->name('member.update');
Route::post('/{id}/destroy', [MemberController::class, 'destroy'])->name('member.destroy');

Route::get('/{id}/trainer', [MemberController::class, 'showTrainer'])->name('member.trainer');
Route::get('/{id}/membership', [MemberController::class, 'showMembership'])->name('member.membership');