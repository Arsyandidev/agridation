<?php

use Illuminate\Support\Facades\Auth;
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
    return view('index');
})->name('home');

Route::get('/webinar', function () {
    return view('webinar');
})->name('webinar');

Route::get('/workshop', function () {
    return view('workshop');
})->name('workshop');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('getCity/ajax/{id}', 'User\WorkshopController@ajax');

// super admin
Route::prefix('super-admin')
    ->middleware('role:super-admin')
    ->group(function () {
        Route::get('/dashboard', 'Super\SuperController@index')->name('super.dashboard');
        Route::resource('peserta', 'Super\PesertaController');
        Route::resource('lomba', 'Super\LombaController');
        Route::resource('dlomba', 'Super\DlombaController');
    });




// admin
Route::middleware('role:admin')->get('/admin-dashboard', 'Admin\AdminController@index')->name('admin-dashboard');

Route::prefix('peserta')
    ->middleware('role:user')
    ->group(function () {
        Route::get('/beranda', 'User\UserController@dashboard')->name('user.dashboard');
        // Route::get('/profile/{id}', 'User\ProfileController@index')->name('user.profile');
        Route::get('/profile/{id}', 'User\ProfileController@index')->name('user.profile');
        Route::put('/profile/{id}', 'User\ProfileController@update')->name('user.update');
        //lomba
        Route::get('/lomba', 'User\LombaController@daftarLomba')->name('user.lomba');
        Route::post('/lomba', 'User\LombaController@daftar')->name('user.daftar');
        Route::get('/lombaku', 'User\LombaController@listLomba')->name('user.lombaku');
        Route::get('/lomba/daftar', 'User\LombaController@formDaftar')->name('user.daftarlomba');
        Route::get('/lomba/detail', 'User\LombaController@detailLomba')->name('user.detail.lomba');
        //webinar
        Route::get('/webinar', 'User\WebinarController@daftarWebinar')->name('user.webinar');
        Route::get('/webinarku', 'User\WebinarController@listWebinar')->name('user.webinarku');
        Route::get('/webinar/daftar', 'User\WebinarController@formDaftar')->name('user.daftarwebinar');
        Route::get('/webinar/detail', 'User\WebinarController@detailWebinar')->name('user.detail.webinar');
        //workshop
        Route::get('/workshop', 'User\WorkshopController@daftarWorkshop')->name('user.workshop');
        Route::get('/workshopku', 'User\WorkshopController@listWorkshop')->name('user.workshopku');
        Route::get('/workshop/daftar', 'User\WorkshopController@formDaftar')->name('user.daftarworkshop');
        Route::get('/workshop/detail', 'User\WorkshopController@detailWorkshop')->name('user.detail.workshop');
        Route::get('/workshop/ongkir', 'User\WorkshopController@cekOngkir')->name('user.ongkir');
    });
