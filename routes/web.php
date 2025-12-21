<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ComplaintController;
;


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
//role
Route::get('/role_form',[RoleController::class,'index'])->name('role.form');
Route::post('/role_store',[RoleController::class,'store'])->name('role.store');
Route::get('/role_data',[RoleController::class,'show'])->name('role.show');
Route::post('/role_edit',[RoleController::class,'edit'])->name('role.edit');
Route::post('/role_update',[RoleController::class,'update'])->name('role.update');
Route::post('/role_delete',[RoleController::class,'destroy'])->name('role.delete');


//user

Route::get('/user_form',[UserController::class,'index'])->name('user.form');
Route::post('/user_store',[UserController::class,'store'])->name('user.store');
Route::get('/user_data',[UserController::class,'show'])->name('user.show');
Route::post('/user_edit',[UserController::class,'edit'])->name('user.edit');
Route::post('/user_update',[UserController::class,'update'])->name('user.update');
Route::post('/user_delete',[UserController::class,'destroy'])->name('user.delete');
Route::get('/login',[UserController::class,'login'])->name('user.login');
Route::post('/login_check',[UserController::class,'logincheck'])->name('login.check');
Route::get('/user_dashboard',[UserController::class,'customer'])->name('user.dashboard');
Route::get('/officer_dashboard',[UserController::class,'officerdashboard'])->name('officer.dashboard');
Route::get('/',[UserController::class,'home'])->name('home');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
Route::get('/admin_dashboard',[UserController::class,'admin'])->name('admin.dashboard');


//category

Route::get('/category_form',[CategoryController::class,'index'])->name('category.form');
Route::post('/category_store',[CategoryController::class,'store'])->name('category.store');
Route::get('/category_data',[CategoryController::class,'show'])->name('category.show');
Route::post('/category_edit',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/category_update',[CategoryController::class,'update'])->name('category.update');
Route::post('/category_delete',[CategoryController::class,'destroy'])->name('category.delete');

//Department

Route::get('/department_form',[DepartmentController::class,'index'])->name('department.form');
Route::post('/department_store',[DepartmentController::class,'store'])->name('department.store');
Route::get('/department_data',[DepartmentController::class,'show'])->name('department.show');
Route::post('/department_edit',[DepartmentController::class,'edit'])->name('department.edit');
Route::post('/department_update',[DepartmentController::class,'update'])->name('department.update');
Route::post('/department_delete',[DepartmentController::class,'destroy'])->name('department.delete');


//Complaint

Route::get('/complaint_form',[ComplaintController::class,'index'])->name('complaint.form');
Route::post('/complaint_store',[ComplaintController::class,'store'])->name('complaint.store');
Route::get('/complaint_show',[ComplaintController::class,'show'])->name('complaint.show');
Route::get('/admin_complaint',[ComplaintController::class,'updateshow'])->name('update.show');
Route::post('/complaint_edit',[ComplaintController::class,'edit'])->name('complaint.edit');
Route::post('/complaint_update',[ComplaintController::class,'update'])->name('complaint.update');
Route::post('/complaint_delete',[ComplaintController::class,'destroy'])->name('complaint.delete');



Route::post('/officer_edit',[ComplaintController::class,'offedit'])->name('off.edit');
Route::post('/Officer_update',[ComplaintController::class,'offupdate'])->name('off.update');





