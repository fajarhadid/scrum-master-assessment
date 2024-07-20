<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Form\Penilaian;
use App\Livewire\Form\Result;
use App\Livewire\Form\Resultdetail;
use App\Livewire\Skillsets\Create;
use App\Livewire\Skillsets\CreateSub;
use App\Livewire\Skillsets\Index as SkillsetsIndex;
use App\Livewire\Skillsets\Subskill;
use App\Livewire\Users\Index;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(['login' => false, 'register' => false]);

Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin')->middleware('is_admin');
Route::get('/admin/user', Index::class)->name('users.index')->middleware('auth', 'is_admin');
Route::get('/admin/skillset', SkillsetsIndex::class)->name('skillsets.index')->middleware('auth', 'is_admin');
Route::get('admin/skilllset/create', Create::class)->name('skillsets.create')->middleware('auth', 'is_admin');
Route::get('/admin/subskill', Subskill::class)->name('skillsets.subskill')->middleware('auth', 'is_admin');
Route::get('/penilaian', Penilaian::class)->name('penilaian')->middleware('auth');
Route::get('/penilaian/hasil', Result::class)->name('hasil')->middleware('auth');
Route::get('/penilaian/hasil/{result}', Resultdetail::class)->name('hasil.detail')->middleware('auth');
