<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Facade;
use App\Http\Controllers\FrontentController;

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

Route::get('/',[FrontentController::class,'index'])->name('home');

Route::get('/about',[FrontentController::class,'about'])->name('about');
Route::get('/contact',[FrontentController::class,'contact'])->name('contact');

// group routing

Route::prefix('user')->group(function (){
    Route::get('/',[FrontentController::class,'list'])->name('user.list');
    Route::get('/view',[FrontentController::class,'view'])->name('user.view');
    Route::get('/create-user',[FrontentController::class,'create'])->name('createUser');
    Route::post('/save-user',[FrontentController::class,'saveUser'])->name('saveUser');
    Route::get('/edit-user/{id}',[FrontentController::class,'editUser'])->name('editUser');
    Route::get('/view-user/{id}',[FrontentController::class,'viewUser'])->name('viewUser');
    Route::post('/update-user',[FrontentController::class,'updateUser'])->name('updateUser');
    Route::get('/delete-user/{id}',[FrontentController::class,'deleteUser'])->name('deleteUser');
    Route::get('/activte-user/{id}',[FrontentController::class,'activateUser'])->name('activateUser');
    Route::get('/force-delete/{id}',[FrontentController::class,'forceDelete'])->name('forceDelete');
    Route::get('/login',[FrontentController::class,'login'])->name('login');
    Route::get('/register',[FrontentController::class,'register'])->name('register');
    Route::post('/dologin',[FrontentController::class,'dologin'])->name('do.login');

    
}
);


