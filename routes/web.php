<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\authCheck;

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



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
/* -----------------------------------------------------------------------*/
/* ------------------------------Supper-admin-part)----------------------*/
/* ---------------------------------------------------------------------*/


Route::get('/registration/admin/supper', 'supper_admin\login\loginController@registration_form');
Route::post('/registration/check/admin/supper', 'supper_admin\login\loginController@check_registration');

 

Route::get('/login/admin/supper', 'supper_admin\login\loginController@login_form')->middleware('authCheck');
Route::post('/login/check/admin/supper', 'supper_admin\login\loginController@check_login');



Route::get('supper/admin/master/dashboard', 'supper_admin\dashboard\dashboardController@index')->middleware('authCheck');
/* ------------------------ profile (supper-admin-part)-------------------*/
Route::get('supper/admin/master/profile', 'supper_admin\dashboard\profileController@profile_show');

/* ------------------------ change Password (supper-admin-part)-------------------*/
Route::get('supper/admin/master/change/password', 'supper_admin\dashboard\changePasswordController@password_form_show');



/* ------------------------ Add doctor(supper-admin-part)-------------------*/
Route::get('supper/admin/master/doctor/add', 'supper_admin\doctor\doctorController@doctor_form_show');
Route::post('supper/admin/master/doctor/info/save', 'supper_admin\doctor\doctorController@doctor_info_store');
Route::get('supper/admin/master/doctor/manage', 'supper_admin\doctor\doctorController@doctor_manage');


Route::get('supper/admin/master/logout', 'supper_admin\dashboard\dashboardController@supper_admin_logout');
/* -----------------------------------------------------------------------*/
/* -------------------------------Other-admin-part----------------------*/
/* ---------------------------------------------------------------------*/