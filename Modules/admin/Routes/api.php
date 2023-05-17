<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

foreach (['auth:api'] as $mid) 
       Route::group(['prefix'=>'admin','middleware' => [$mid]],function () {
               Route::get('/', function (){
                   return ["message"=>"admin"];
               });


        /*Agency*/
               Route::post('agency/validate', 'AgencyController@validate_model');
               Route::post('agency/update_multiple', 'AgencyController@update_multiple');
               Route::delete('agency/delete_by_id', 'AgencyController@deletebyid');
               Route::resource('agency', 'AgencyController');


        /*Bank*/
               Route::post('bank/validate', 'BankController@validate_model');
               Route::post('bank/update_multiple', 'BankController@update_multiple');
               Route::delete('bank/delete_by_id', 'BankController@deletebyid');
               Route::resource('bank', 'BankController');


        /*Fee*/
               Route::post('fee/validate', 'FeeController@validate_model');
               Route::post('fee/update_multiple', 'FeeController@update_multiple');
               Route::delete('fee/delete_by_id', 'FeeController@deletebyid');
               Route::resource('fee', 'FeeController');


        /*Fee_details*/
               Route::post('fee_details/validate', 'Fee_detailsController@validate_model');
               Route::post('fee_details/update_multiple', 'Fee_detailsController@update_multiple');
               Route::delete('fee_details/delete_by_id', 'Fee_detailsController@deletebyid');
               Route::resource('fee_details', 'Fee_detailsController');


    });
