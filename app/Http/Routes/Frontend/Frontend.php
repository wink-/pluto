<?php

/**
 * Frontend Controllers
 */


Route::get('/', 'FrontendController@index')->name('frontend.index');

Route::get('macros', 'FrontendController@macros')->name('frontend.macros');	




/**
 * These frontend controllers require the user to be logged in
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User'], function() {
        Route::get('dashboard', 'DashboardController@index')->name('frontend.user.dashboard');
        Route::get('profile/edit', 'ProfileController@edit')->name('frontend.user.profile.edit');
        Route::patch('profile/update', 'ProfileController@update')->name('frontend.user.profile.update');
    });
// Customers
Route::controller('dataTableCustomers', 'CustomersController', [
    'anyData'  => 'customers.data',
    'getIndex' => 'customers',

]);
Route::get('customers/{id}/delete', [
    'as' => 'customers.delete',
    'uses' => 'CustomersController@destroy',
]);
Route::resource('customers', 'CustomersController');


// Processes
Route::resource('process', 'ProcessesController');
Route::resource('processes', 'ProcessesController');

// Parts
Route::resource('parts', 'PartsController');

// Contacts
Route::resource('contacts', 'ContactsController');
Route::post('contacts/createFromCustomer', [
	'as' => 'contacts.createFromCustomer',
	'uses' => 'ContactsController@createFromCustomer']);

// Workorders
Route::resource('workorders', 'WorkordersController');

// DMR System
Route::resource('dmrs', 'DiscrepantMaterialReportsController', ['except' => 'create']);
Route::resource('discrepantmaterialreports', 'DiscrepantMaterialReportsController', ['except' => 'create']);
Route::post('dmrs/stage', [
    'as' => 'dmrs.stage',
    'uses' => 'DiscrepantMaterialReportsController@createDmrFromWorkorder' ]);    

});