<?php

/**
 * Frontend Controllers
 */


Route::get('/', 'FrontendController@index')->name('frontend.index');
Route::get('macros', 'FrontendController@macros')->name('frontend.macros');	
Route::resource('customers', 'CustomersController');
Route::resource('process', 'ProcessesController');
Route::resource('processes', 'ProcessesController');
Route::resource('parts', 'PartsController');
Route::resource('contacts', 'ContactsController');
Route::resource('workorders', 'WorkordersController');
Route::resource('dmrs', 'DiscrepantMaterialReportsController');
Route::resource('discrepantmaterialreports', 'DiscrepantMaterialReportsController');
Route::post('dmrs/stage', [
    'as' => 'dmrs.stage',
    'uses' => 'DiscrepantMaterialReportsController@createDmrFromWorkorder'
]);


/**
 * These frontend controllers require the user to be logged in
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User'], function() {
        Route::get('dashboard', 'DashboardController@index')->name('frontend.user.dashboard');
        Route::get('profile/edit', 'ProfileController@edit')->name('frontend.user.profile.edit');
        Route::patch('profile/update', 'ProfileController@update')->name('frontend.user.profile.update');
    });

});