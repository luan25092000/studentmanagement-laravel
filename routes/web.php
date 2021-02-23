<?php

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
Route::get('/',function(){
    return view('login');
})->name('login.form');
Route::get('register',function(){
    return view('register');
})->name('register.form');
Route::get('show-student',['uses' => 'StudentController@index','as' => 'index']);
Route::get('add-student-form',['uses' => 'StudentController@create','middleware' => ['role:admin|writer'],'as' => 'add.student.form']);
Route::post('add-student',['uses' => 'StudentController@store','as' => 'add.student']);
Route::get('show-student/{id}',['uses' => 'StudentController@show','as' => 'show.student']);
Route::get('delete-student/{id}',['uses' => 'StudentController@destroy','middleware' => ['role:admin|writer'],'as' => 'delete.student']);
Route::get('edit-student-form/{id}',['uses' => 'StudentController@edit','middleware' => ['role:admin|writer'],'as' => 'edit.student.form']);
Route::post('edit-student/{id}',['uses' => 'StudentController@update','as' => 'edit.student']);
Route::post('login',['uses' => 'StudentController@login','as' => 'login']);
Route::post('register',['uses' => 'StudentController@register','as' => 'register']);
Route::get('logout',['uses'=>'StudentController@logOut','as'=>'logout']);
Route::get('add-role',['uses'=>'RoleController@index','as'=>'add.role']);