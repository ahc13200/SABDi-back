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
       Route::group(['prefix'=>'report','middleware' => [$mid]],function () {
               Route::get('/', function (){
                   return ["message"=>"report"];
               });


        /*Consiliation_bank_view*/
               Route::post('consiliation_bank_view/validate', 'Consiliation_bank_viewController@validate_model');
               Route::post('consiliation_bank_view/update_multiple', 'Consiliation_bank_viewController@update_multiple');
               Route::delete('consiliation_bank_view/delete_by_id', 'Consiliation_bank_viewController@deletebyid');
               Route::resource('consiliation_bank_view', 'Consiliation_bank_viewController');


        /*Cust_identification_report*/
               Route::post('cust_identification_report/validate', 'Cust_identification_reportController@validate_model');
               Route::post('cust_identification_report/update_multiple', 'Cust_identification_reportController@update_multiple');
               Route::delete('cust_identification_report/delete_by_id', 'Cust_identification_reportController@deletebyid');
               Route::resource('cust_identification_report', 'Cust_identification_reportController');


        /*Deposit_for_payment*/
               Route::post('deposit_for_payment/validate', 'Deposit_for_paymentController@validate_model');
               Route::post('deposit_for_payment/update_multiple', 'Deposit_for_paymentController@update_multiple');
               Route::delete('deposit_for_payment/delete_by_id', 'Deposit_for_paymentController@deletebyid');
               Route::resource('deposit_for_payment', 'Deposit_for_paymentController');


        /*Lotes_report*/
               Route::post('lotes_report/validate', 'Lotes_reportController@validate_model');
               Route::post('lotes_report/update_multiple', 'Lotes_reportController@update_multiple');
               Route::delete('lotes_report/delete_by_id', 'Lotes_reportController@deletebyid');
               Route::resource('lotes_report', 'Lotes_reportController');


    });
