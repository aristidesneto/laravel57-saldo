<?php

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('balance', 'BalanceController@index')->name('admin.balance');
    Route::get('balance/deposit', 'BalanceController@deposit')->name('balance.deposit');
    Route::post('balance/deposit', 'BalanceController@depositStore')->name('balance.deposit.store');

    Route::get('balance/withdraw', 'BalanceController@withdraw')->name('balance.withdraw');
    Route::post('balance/withdraw', 'BalanceController@withdrawStore')->name('balance.withdraw.store');

    Route::get('balance/transfer', 'BalanceController@transfer')->name('balance.transfer');
    Route::post('balance/transfer', 'BalanceController@confirmTransfer')->name('balance.transfer.confirm');
    Route::post('balance/transfer-store', 'BalanceController@transferStore')->name('balance.transfer.store');

    Route::get('historic', 'BalanceController@historic')->name('admin.historic');
    Route::any('historic-search', 'BalanceController@searchHistoric')->name('admin.historic.search');


});

Route::get('/', 'Site\SiteController@index')->name('home');

Route::get('meu-perfil', 'Admin\UserController@profile')->name('profile')->middleware('auth');
Route::post('profile', 'Admin\UserController@profileUpdate')->name('profile.update')->middleware('auth');

Auth::routes();

