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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/customers', 'CustomerController@AllCustomer');
Route::post('/formSubmit', 'RegisterFormController@formSubmit');
Route::get('/admin', 'AdminController@readItems');
Route::get('/Edit/{id}/{status}', 'AdminController@Edit');
Route::get('/Delete/{id}', 'AdminController@Delete');
Route::get('customers', 'CustomerController@AllCustomer');
Route::get('group', 'GroupController@AllUser');
Route::post('/addgroup', 'GroupController@AddGroup');
Route::get('/GroupTo/{userid}/{groupid}', 'DistributionController@submit');
Route::get('/distribution', 'DistributionController@Add');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
