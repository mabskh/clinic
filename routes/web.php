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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::name('admin.')->prefix('admin')->middleware('auth')->namespace('Admin')->group(function () {

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', ('UsersController@index'))->name('users.index');
        Route::get('/create', ('UsersController@create'))->name('users.create');
        Route::post('/store', ('UsersController@store'))->name('users.store');
        Route::get('/show/{id}', ('UsersController@show'))->name('users.show');
        Route::get('/edit/{id}', ('AccountsController@edit'))->name('accounts.edit');
        Route::post('/update/{id}', 'AccountsController@update')->name('accounts.update');
        Route::get('/delete/{id}', 'AccountsController@destroy')->name('accounts.destroy');
    });

    Route::group(['prefix' => 'accounts'], function () {
        Route::any('/', ('AccountsController@index'))->name('accounts.index');
        Route::get('/create', ('AccountsController@create'))->name('accounts.create');
        Route::post('/store', ('AccountsController@store'))->name('accounts.store');
        Route::get('/show/{id}', ('AccountsController@show'))->name('accounts.show');
        Route::get('/edit/{id}', ('AccountsController@edit'))->name('accounts.edit');
        Route::post('/update/{id}', 'AccountsController@update')->name('accounts.update');
        Route::get('/delete/{id}', 'AccountsController@destroy')->name('accounts.destroy');
    });

    Route::group(['prefix' => 'patients'], function () {
        Route::get('/', ('PatientsController@index'))->name('patients.index');
        Route::get('/create', ('PatientsController@create'))->name('patients.create');
        Route::post('/store', ('PatientsController@store'))->name('patients.store');
        Route::get('/show/{id}', ('PatientsController@show'))->name('patients.show');
        Route::get('/edit/{id}', ('PatientsController@edit'))->name('patients.edit');
        Route::post('/update/{id}', 'PatientsController@update')->name('patients.update');
        Route::get('/delete/{id}', 'PatientsController@destroy')->name('patients.destroy');


    });

    Route::group(['prefix' => 'statics'], function () {
        Route::get('/', ('AppStaticsController@index'))->name('statics.index');
        Route::get('/create', ('AppStaticsController@create'))->name('statics.create');
        Route::post('/store', ('AppStaticsController@store'))->name('statics.store');
        Route::get('/show/{id}', ('AppStaticsController@show'))->name('statics.show');
        Route::get('/edit/{id}', ('AppStaticsController@edit'))->name('statics.edit');
        Route::post('/update/{id}', 'AppStaticsController@update')->name('statics.update');
        Route::get('/delete/{id}', 'AppStaticsController@destroy')->name('statics.destroy');
    });

    Route::group(['prefix' => 'contacts'], function () {
        Route::get('/', ('ContactsController@index'))->name('contacts.index');
        Route::get('/create', ('ContactsController@create'))->name('contacts.create');
        Route::post('/store', ('ContactsController@store'))->name('contacts.store');
        Route::get('/show/{id}', ('ContactsController@show'))->name('contacts.show');
        Route::get('/edit/{id}', ('ContactsController@edit'))->name('contacts.edit');
        Route::post('/update/{id}', 'ContactsController@update')->name('contacts.update');
        Route::get('/delete/{id}', 'ContactsController@destroy')->name('contacts.destroy');
        Route::get('/status/{id}', 'ContactsController@changeDefaultStatus')->name('contacts.status');
    });

//        Route::get('/', ('WorksController@index'))->name('works.index');
//        Route::get('/create', ('WorksController@create'))->name('works.create');
//        Route::post('/store', ('WorksController@store'))->name('works.store');
//        Route::get('/show/{id}', ('WorksController@show'))->name('works.show');
//        Route::get('/edit/{id}', ('WorksController@edit'))->name('works.edit');
//        Route::post('/update/{id}','WorksController@update') -> name('works.update');
//        Route::get('/delete/{id}','WorksController@destroy') -> name('works.destroy');
    Route::resource('works', 'WorksController');

    Route::group(['prefix' => 'notes'], function () {
        Route::get('/', ('NotesController@index'))->name('notes.index');
        Route::get('/create', ('NotesController@create'))->name('notes.create');
        Route::post('/store', ('NotesController@store'))->name('notes.store');
        Route::get('/show/{id}', ('NotesController@show'))->name('notes.show');
        Route::get('/edit/{id}', ('NotesController@edit'))->name('notes.edit');
        Route::post('/update/{id}', 'NotesController@update')->name('notes.update');
        Route::get('/delete/{id}', 'NotesController@destroy')->name('notes.destroy');
        Route::post('/add-note', 'NotesController@addNote')->name('notes.ajax.add');
    });

    Route::group(['prefix' => 'attributes'], function () {
        Route::get('/', ('AttributesController@index'))->name('attributes.index');
        Route::get('/create', ('AttributesController@create'))->name('attributes.create');
        Route::post('/store', ('AttributesController@store'))->name('attributes.store');
        Route::get('/show/{id}', ('AttributesController@show'))->name('attributes.show');
        Route::get('/edit/{id}', ('AttributesController@edit'))->name('attributes.edit');
        Route::post('/update/{id}', 'AttributesController@update')->name('attributes.update');
        Route::get('/delete/{id}', 'AttributesController@destroy')->name('attributes.destroy');
    });

    Route::resource('constants', 'ConstantsController');

});

Route::get('/test', function () {
    return view('patients.show3');
});

