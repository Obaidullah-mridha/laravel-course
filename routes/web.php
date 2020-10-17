<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\ImageUploadController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test',function(){
	if (Auth::check()) {
		return Auth::user();
	}else{
		return 'Please login';
	}

});


Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login']);
Route::get('/logout',[LoginController::class,'logout']);
Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'store']);

Route::middleware('auth')->group(function(){
Route::get('admin',function(){
	return Auth::user();
	return 'welcome to admin';
});
Route::get('dashboard',function(){
	return 'Welcome to dashboard';
});
Route::get('update',function(){
	return 'Welcome to update';
});
Route::get('posts',function(){
	return 'Welcome to posts';
});
});

//image upload
Route::view('file-upload','upload.image');
Route::post('/file-upload',[ImageUploadController::class,'store']);
Route::get('/files',[ImageUploadController::class,'files']);
Route::get('/delete-file',[ImageUploadController::class,'delete']);