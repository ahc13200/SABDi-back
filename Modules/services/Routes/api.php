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
       Route::group(['prefix'=>'services','middleware' => [$mid]],function () {
               Route::get('/', function (){
                   return ["message"=>"services"];
               });


        /*Auditlog_logentry*/
               Route::post('auditlog_logentry/validate', 'Auditlog_logentryController@validate_model');
               Route::post('auditlog_logentry/update_multiple', 'Auditlog_logentryController@update_multiple');
               Route::delete('auditlog_logentry/delete_by_id', 'Auditlog_logentryController@deletebyid');
               Route::resource('auditlog_logentry', 'Auditlog_logentryController');


        /*Beneficiary_black_list*/
               Route::post('beneficiary_black_list/validate', 'Beneficiary_black_listController@validate_model');
               Route::post('beneficiary_black_list/update_multiple', 'Beneficiary_black_listController@update_multiple');
               Route::delete('beneficiary_black_list/delete_by_id', 'Beneficiary_black_listController@deletebyid');
               Route::resource('beneficiary_black_list', 'Beneficiary_black_listController');


        /*Beneficiary_control_amount*/
               Route::post('beneficiary_control_amount/validate', 'Beneficiary_control_amountController@validate_model');
               Route::post('beneficiary_control_amount/update_multiple', 'Beneficiary_control_amountController@update_multiple');
               Route::delete('beneficiary_control_amount/delete_by_id', 'Beneficiary_control_amountController@deletebyid');
               Route::resource('beneficiary_control_amount', 'Beneficiary_control_amountController');


        /*Country*/
               Route::post('country/validate', 'CountryController@validate_model');
               Route::post('country/update_multiple', 'CountryController@update_multiple');
               Route::delete('country/delete_by_id', 'CountryController@deletebyid');
               Route::resource('country', 'CountryController');


        /*Currency*/
               Route::post('currency/validate', 'CurrencyController@validate_model');
               Route::post('currency/update_multiple', 'CurrencyController@update_multiple');
               Route::delete('currency/delete_by_id', 'CurrencyController@deletebyid');
               Route::resource('currency', 'CurrencyController');


        /*Log*/
               Route::post('log/validate', 'LogController@validate_model');
               Route::post('log/update_multiple', 'LogController@update_multiple');
               Route::delete('log/delete_by_id', 'LogController@deletebyid');
               Route::resource('log', 'LogController');


        /*Log_programer*/
               Route::post('log_programer/validate', 'Log_programerController@validate_model');
               Route::post('log_programer/update_multiple', 'Log_programerController@update_multiple');
               Route::delete('log_programer/delete_by_id', 'Log_programerController@deletebyid');
               Route::resource('log_programer', 'Log_programerController');


        /*Municipality*/
               Route::post('municipality/validate', 'MunicipalityController@validate_model');
               Route::post('municipality/update_multiple', 'MunicipalityController@update_multiple');
               Route::delete('municipality/delete_by_id', 'MunicipalityController@deletebyid');
               Route::resource('municipality', 'MunicipalityController');


        /*Payment_transaction*/
               Route::post('payment_transaction/validate', 'Payment_transactionController@validate_model');
               Route::post('payment_transaction/update_multiple', 'Payment_transactionController@update_multiple');
               Route::delete('payment_transaction/delete_by_id', 'Payment_transactionController@deletebyid');
               Route::resource('payment_transaction', 'Payment_transactionController');


        /*Payment_transaction_error*/
               Route::post('payment_transaction_error/validate', 'Payment_transaction_errorController@validate_model');
               Route::post('payment_transaction_error/update_multiple', 'Payment_transaction_errorController@update_multiple');
               Route::delete('payment_transaction_error/delete_by_id', 'Payment_transaction_errorController@deletebyid');
               Route::resource('payment_transaction_error', 'Payment_transaction_errorController');


        /*Province*/
               Route::post('province/validate', 'ProvinceController@validate_model');
               Route::post('province/update_multiple', 'ProvinceController@update_multiple');
               Route::delete('province/delete_by_id', 'ProvinceController@deletebyid');
               Route::resource('province', 'ProvinceController');


        /*Rejection_error*/
               Route::post('rejection_error/validate', 'Rejection_errorController@validate_model');
               Route::post('rejection_error/update_multiple', 'Rejection_errorController@update_multiple');
               Route::delete('rejection_error/delete_by_id', 'Rejection_errorController@deletebyid');
               Route::resource('rejection_error', 'Rejection_errorController');


        /*Sentai_batch*/
               Route::post('sentai_batch/validate', 'Sentai_batchController@validate_model');
               Route::post('sentai_batch/update_multiple', 'Sentai_batchController@update_multiple');
               Route::delete('sentai_batch/delete_by_id', 'Sentai_batchController@deletebyid');
               Route::resource('sentai_batch', 'Sentai_batchController');


        /*Sentai_batch_details*/
               Route::post('sentai_batch_details/validate', 'Sentai_batch_detailsController@validate_model');
               Route::post('sentai_batch_details/update_multiple', 'Sentai_batch_detailsController@update_multiple');
               Route::delete('sentai_batch_details/delete_by_id', 'Sentai_batch_detailsController@deletebyid');
               Route::resource('sentai_batch_details', 'Sentai_batch_detailsController');


        /*Transaction_state*/
               Route::post('transaction_state/validate', 'Transaction_stateController@validate_model');
               Route::post('transaction_state/update_multiple', 'Transaction_stateController@update_multiple');
               Route::delete('transaction_state/delete_by_id', 'Transaction_stateController@deletebyid');
               Route::resource('transaction_state', 'Transaction_stateController');


    });
