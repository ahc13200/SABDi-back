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
       Route::group(['prefix'=>'security','middleware' => [$mid]],function () {
               Route::get('/', function (){
                   return ["message"=>"security"];
               });


        /*Auth_group*/
               Route::post('auth_group/validate', 'Auth_groupController@validate_model');
               Route::post('auth_group/update_multiple', 'Auth_groupController@update_multiple');
               Route::delete('auth_group/delete_by_id', 'Auth_groupController@deletebyid');
               Route::resource('auth_group', 'Auth_groupController');


        /*Auth_group_permissions*/
               Route::post('auth_group_permissions/validate', 'Auth_group_permissionsController@validate_model');
               Route::post('auth_group_permissions/update_multiple', 'Auth_group_permissionsController@update_multiple');
               Route::delete('auth_group_permissions/delete_by_id', 'Auth_group_permissionsController@deletebyid');
               Route::resource('auth_group_permissions', 'Auth_group_permissionsController');


        /*Auth_permission*/
               Route::post('auth_permission/validate', 'Auth_permissionController@validate_model');
               Route::post('auth_permission/update_multiple', 'Auth_permissionController@update_multiple');
               Route::delete('auth_permission/delete_by_id', 'Auth_permissionController@deletebyid');
               Route::resource('auth_permission', 'Auth_permissionController');


        /*Auth_user*/
               Route::post('auth_user/validate', 'Auth_userController@validate_model');
               Route::post('auth_user/update_multiple', 'Auth_userController@update_multiple');
               Route::delete('auth_user/delete_by_id', 'Auth_userController@deletebyid');
               Route::resource('auth_user', 'Auth_userController');


        /*Auth_user_groups*/
               Route::post('auth_user_groups/validate', 'Auth_user_groupsController@validate_model');
               Route::post('auth_user_groups/update_multiple', 'Auth_user_groupsController@update_multiple');
               Route::delete('auth_user_groups/delete_by_id', 'Auth_user_groupsController@deletebyid');
               Route::resource('auth_user_groups', 'Auth_user_groupsController');


        /*Auth_user_user_permissions*/
               Route::post('auth_user_user_permissions/validate', 'Auth_user_user_permissionsController@validate_model');
               Route::post('auth_user_user_permissions/update_multiple', 'Auth_user_user_permissionsController@update_multiple');
               Route::delete('auth_user_user_permissions/delete_by_id', 'Auth_user_user_permissionsController@deletebyid');
               Route::resource('auth_user_user_permissions', 'Auth_user_user_permissionsController');


    });
